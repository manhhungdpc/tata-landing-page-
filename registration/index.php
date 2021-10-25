<?php

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

date_default_timezone_set('Asia/Ho_Chi_Minh');
$now = date('H:i d/m/Y', strtotime('now'));
$adId = $_POST['ad_id'];
$tab = $_POST['tab'];
$fullName = $_POST['full_name'];
$phoneNumber = $_POST['phone'];
$job = $_POST['job'];
$target = $_POST['target'];

require __DIR__ . '/vendor/autoload.php';

/**
 * Returns an authorized API client.
 * @return Google_Client the authorized client object
 */
function getClient()
{
    $client = new Google_Client();
    $client->setApplicationName('Tata Registration');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS);
    $client->setAuthConfig(__DIR__ . '/client_secret.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');

    // Load previously authorized token from a file, if it exists.
    // The file token.json stores the user's access and refresh tokens, and is
    // created automatically when the authorization flow completes for the first
    // time.
    $tokenPath = __DIR__ . '/token.json';
    if (file_exists($tokenPath)) {
        $accessToken = json_decode(file_get_contents($tokenPath), true);
        $client->setAccessToken($accessToken);
    }
    // If there is no previous token or it's expired.
    if ($client->isAccessTokenExpired()) {
        // Refresh the token if possible, else fetch a new one.
        if ($client->getRefreshToken()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        } else {
            // Request authorization from the user.
            $authUrl = $client->createAuthUrl();
            printf("Open the following link in your browser:\n%s\n", $authUrl);
            print 'Enter verification code: ';
            $authCode = trim(fgets(STDIN));

            // Exchange authorization code for an access token.
            $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
            $client->setAccessToken($accessToken);

            // Check to see if there was an error.
            if (array_key_exists('error', $accessToken)) {
                throw new Exception(join(', ', $accessToken));
            }
        }
        // Save the token to a file.
        if (!file_exists(dirname($tokenPath))) {
            mkdir(dirname($tokenPath), 0700, true);
        }
        file_put_contents($tokenPath, json_encode($client->getAccessToken()));
    }
    return $client;
}

function savebackup($fullName, $phoneNumber, $job, $target, $adId, $tab, $now)
{
    $backupFile = \PhpOffice\PhpSpreadsheet\IOFactory::Load('registration_backup.xlsx');
    $backupFile->setActiveSheetIndex(0);
    $row = $backupFile->getActiveSheet()->getHighestRow() + 1;
    $backupFile->getActiveSheet()->setCellValue("A{$row}", $fullName)
        ->setCellValue("B{$row}", $phoneNumber)
        ->setCellValue("C{$row}", $job)
        ->setCellValue("D{$row}", $target)
        ->setCellValue("E{$row}", $adId)
        ->setCellValue("F{$row}", $tab)
        ->setCellValue("G{$row}", $now);
    $writer = new Xlsx($backupFile);
    $writer->save('registration_backup.xlsx');
}

// Get the API client and construct the service object.
try {
    if(trim($fullName) == '' || trim($phoneNumber) == ''){
        return;
    }
    savebackup($fullName, $phoneNumber, $job, $target, $adId, $tab, $now);
    $client = getClient();
    $service = new Google_Service_Sheets($client);
    // Prints the names and majors of students in a sample spreadsheet:
    // https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
    $spreadsheetId = '1VLx_IgVzOIH0szr5_Xwyvs1j5xfwnT94UCUQDX6Fo28';
    $range = "tab_0";

    $response = $service->spreadsheets->get($spreadsheetId);

    $values = [
        [
            $fullName,
            $phoneNumber,
            $job,
            $target,
            $adId,
            $tab,
            $now
        ]
    ];

    $body = new Google_Service_Sheets_ValueRange([
        'values' => $values,
    ]);
    $params = [
        'valueInputOption' => 'RAW'
    ];
    $insert = [
        "insertDataOption" => "INSERT_ROWS"
    ];
    $result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);
    return json_encode(['status' => 1]);
} catch (Exception $e) {
    print('cant get client');
    var_dump($e);
}
return json_encode(['status' => 0]);

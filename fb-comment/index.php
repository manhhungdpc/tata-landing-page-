<?php

require_once __DIR__ . '/vendor/autoload.php'; // change path as needed
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

try {
    $fb = new \Facebook\Facebook([
        'app_id' => '166073834829186',
        'app_secret' => '70547d984420e1c4f8eee47e987fc86a',
        'default_graph_version' => 'v8.0',
        //'default_access_token' => '{access-token}', // optional
    ]);

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'stt')
        ->setCellValue('B1', 'Đáp án')
        ->setCellValue('C1', 'số chọn')
        ->setCellValue('D1', 'comment link')
        ->setCellValue('E1', 'comment')
        ->setCellValue('F1', 'created_time');

    $accessToken = "EAACXCxPudYIBACftsIJmfYieIa6f4ZCDZCWMdGOLDX8VFxh5phKX9vZCucHbUrB5hA5ZBMLtCy0tKxm7uupY1hUGiZC6iILWV3THS7d550RL2hz6KwusrZAaZC7hpRneRfpF4IKcerRQQeVCN7njvEdahYqZBE9vEifqlyx5eb1QEx4DymR66YLabUmeekUZA7jfUvWZAdBU0xPAZDZD";
    try {
        // Get the \Facebook\GraphNodes\GraphUser object for the current user.
        // If you provided a 'default_access_token', the '{access-token}' is optional.
        $response = $fb->get('/221541834566592_3819873444733395?fields=comments.order(chronological).limit(1000)', $accessToken);
        $data = json_decode($response->getBody(), true);
        $comments = $data['comments']['data'];
        foreach($comments as $index => $comment){
            preg_match_all('/[0-9]+/',$comment['message'],$match);
            $row = $index + 2;
            $stt = $index + 1;
            $facebookLink = "https://www.facebook.com/{$comment['id']}";
            $numberPicked = isset($match[0][1]) ? $match[0][1]:'';
            $result = isset($match[0][0]) ? $match[0][0]:'';
            $sheet->setCellValue("A{$row}", $stt)
                ->setCellValue("B{$row}", $result)
                ->setCellValue("C{$row}", $numberPicked)
                ->setCellValue("D{$row}", $facebookLink)
                ->setCellValue("E{$row}", $comment['message'])
                ->setCellValue("F{$row}", $comment['created_time']);
        }
        $writer = new Xlsx($spreadsheet);
        $writer->save('comment.xlsx');
    } catch(\Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(\Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    $me = $response->getGraphUser();
    echo 'Logged in as ' . $me->getName();
} catch (\Facebook\Exceptions\FacebookSDKException $e) {
}

// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
//   $helper = $fb->getRedirectLoginHelper();
//   $helper = $fb->getJavaScriptHelper();
//   $helper = $fb->getCanvasHelper();
//   $helper = $fb->getPageTabHelper();
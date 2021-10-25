<?php

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

require __DIR__ . '/vendor/autoload.php';

date_default_timezone_set( 'Asia/Ho_Chi_Minh' );
$now = date( 'Y-m-d H:i:s', strtotime( 'now' ) );

$db_host     = '27.71.226.10';
$db_user     = 'mvp';
$db_password = 'abc@123';
$db_db       = 'mvp_v2';
$db_port     = 3306;

// $db_host = '127.0.0.1';
// $db_user = 'root';
// $db_password = '12345678';
// $db_db = 'mvp_crm';
// $db_port = 3306;

$mysqli = new mysqli(
	$db_host,
	$db_user,
	$db_password,
//    $db_db,
);
$mysqli->set_charset( "utf8" );

//$result = $mysqli->query("SELECT * FROM mvp_crm.customer order by updated_at DESC limit 10;");
$PAGE_STATUS         = [ - 1 => 'Xoá', 0 => 'Đã tạo', 1 => "Đã duyệt" ];
$TELCO               = [ 0 => 'Viettel', 1 => "Vinafone", 2 => "Mobifone", 3 => "Khác" ];
$BLOCK               = array(
	0   => 'N02 T3',
	1   => "N03 T3-T4",
	2   => "N03 T1",
	3   => "N01 T4",
	4   => "N02 T1",
	5   => "N03 T2",
	6   => "N01 T1",
	7   => "N04 AA-CC",
	8   => "N01 T5",
	9   => "N02 T2",
	10  => "N01 T8",
	12  => "N03 T3",
	13  => "N01 T2",
	14  => "N01 T3",
	15  => "Toà 789",
	100 => "Khác"
);
$CUSTOMER_STATUS     = [
	0   => 'Chưa liên hệ',
	1   => "Chưa có nhu cầu",
	2   => "Đã di chuyển",
	3   => "Đang hẹn lên",
	4   => "Khách cũ",
	6   => "Đang tập chỗ khác",
	7   => "Đang chăm sóc",
	100 => "Khác"
];
$SOURCE              = array(
	0   => 'Excel',
	1   => 'Facebook',
	2   => 'Page',
	3   => 'Voucher',
	4   => 'BR',
	5   => 'Miss Sale',
	6   => 'Hội viên',
	7   => "Hotline",
	8   => 'Khách Cali',
	9   => 'Club',
	10  => 'Hoàng Hoa Thám',
	100 => "Khác"
);
$SHOW_STATUS         = [ 0 => 'Ẩn', 1 => 'Hiện' ];
$FAVORITE            = [ 0 => 'Không', 1 => 'Có' ];
$SWITCH_STATE        = [
	'on'  => [ 'value' => 1, 'text' => '&nbsp;Hiện  ', 'color' => 'success' ],
	'off' => [ 'value' => 0, 'text' => '&nbsp;&nbsp;Ẩn&nbsp;&nbsp;', 'color' => 'danger' ],
];
$BANNER_POSITION     = [ 0 => 'Trái', 1 => 'Phải' ];
$POST_CATEGORY       = [
	0 => 'Trang chủ',
	1 => 'Điểm đến',
	2 => "Cảm hứng",
	3 => "Sự kiện",
	4 => "Tin tức",
	5 => "Thư viện Media"
];
$POST_TYPE           = [
	0 => 'Di tích & Danh lam',
	1 => 'Cơ quan hành chính',
	2 => "Khách sạn",
	3 => "Nhà hàng quán ăn",
	4 => "Trung tâm thương mại",
	5 => "Giải trí thư giãn",
	6 => "Dịch vụ hỗ trợ"
];
$LOCATION_TYPE_ROUTE = [
	"sightseeing" => 0,
	"office"      => 1,
	"hotel"       => 2,
	"restaurant"  => 3,
	"mall"        => 4,
	"relax"       => 5,
	"support"     => 6
];
$CATEGORY_ROUTE      = [
	"index"   => 0,
	"feeling" => 2,
	"map"     => 1,
	"event"   => 3,
	"news"    => 4
];

$BLOCK_NAME = [
	'N02T3'    => 0,
	"N03T3T4"  => 1,
	"N03T1"    => 2,
	"N01T4"    => 3,
	"N02T1"    => 4,
	"N03T2"    => 5,
	"N01T1"    => 6,
	"N04AA-CC" => 7,
	"N01T5"    => 8,
	"N02T2"    => 9,
	"N01T8"    => 10,
	"N03T3"    => 11,
	'kali'     => 13,
	"Khác"     => 100,
];

$VT = [
	'086',
	'086',
	'096',
	'096',
	'097',
	'097',
	'098',
	'098',
	'0162',
	'032',
	'0163',
	'033',
	'0164',
	'034',
	'0165',
	'035',
	'0166',
	'036',
	'0167',
	'037',
	'0168',
	'038',
	'0169',
	'039',
	'032',
	'033',
	'034',
	'035',
	'036',
	'037',
	'038',
	'039',
];

$MOBI = [
	'089',
	'089',
	'090',
	'090',
	'093',
	'093',
	'0120',
	'070',
	'0121',
	'079',
	'0122',
	'077',
	'0126',
	'076',
	'0128',
	'078'
];

$VINA = [
	'088',
	'088',
	'091',
	'091',
	'094',
	'094',
	'0123',
	'083',
	'0124',
	'084',
	'0125',
	'085',
	'0127',
	'081',
	'0129',
	'082',
];

$PHONECONVERT = [
	"0162" => '032',
	"0163" => '033',
	"0164" => '034',
	"0165" => '035',
	"0166" => '036',
	"0167" => '037',
	"0168" => '038',
	"0169" => '039',
	"0120" => '070',
	"0121" => '079',
	"0122" => '077',
	"0126" => '076',
	"0128" => '078',
	"0123" => '083',
	"0124" => '084',
	"0125" => '085',
	"0127" => '081',
	"0129" => '082',
];

$file         = "/Users/manhhung/Projects/mvp/excel_file/DSKH_TL_no1.xlsx";
$fileInput    = \PhpOffice\PhpSpreadsheet\IOFactory::Load( $file );
$sheetData    = $fileInput->setActiveSheetIndex( 0 )->toArray( null, true, true, true );
$preRoom      = 0;
$result       = array();
$customStatus = 0;
$telco        = 3;
$blockNo      = 3;
$counter      = 0;

//từ các toà trung cư

foreach ( $sheetData as $index => $row ) {
//      $room = $row['A'];
	$plan           = $row['O'];
	$fullName       = $row['D'];
	$phoneNumberRaw = $row['F'];
	$phoneNumberRaw = preg_replace( '/\.|,|"/', '', $phoneNumberRaw );
	preg_match( '/[0-9]+/', $phoneNumberRaw, $matches );
	if ( $phoneNumberRaw == null || empty( $matches ) ) {
		continue;
	}
	$phoneNumber = $matches[0];
//      if (!is_null($room) && $room != $preRoom) {
//          $preRoom = $room;
//      }
//      if (is_null($room)) {
//          $room = $preRoom;
//      }
	$phoneNumber = preg_replace( '/\s/', '', $phoneNumber );
	if ( $phoneNumber[0] != "0" ) {
		$phoneNumber = "0" . $phoneNumber;
	}
	$pre = substr( $phoneNumber, 0, 4 );
	if ( key_exists( $pre, $PHONECONVERT ) ) {
		$phoneNumber = $PHONECONVERT[ $pre ] . substr( $phoneNumber, 4, strlen( $phoneNumber ) - 4 );
	}
	$pre = substr( $phoneNumber, 0, 3 );
	if ( in_array( $pre, $VT ) ) {
		$telco = 0;
	} else if ( in_array( $pre, $VINA ) ) {
		$telco = 1;
	} else if ( in_array( $pre, $MOBI ) ) {
		$telco = 2;
	}
	$sqlQuery = "INSERT INTO `mvp_v2`.`backend_app_customercare` (`fullname`, `phone`, `telecom`, `saleNote`, `status`, `sale_id`, `organization_id`, `createdDate`) VALUES ('{$fullName}', '{$phoneNumber}', {$telco},'Gói thẻ {$plan}', '0', '2163','1', '{$now}');";
//       $sqlQuery = "Update mvp_crm.customer SET block_no = {$blockNo}, room_no = {$room} where phone_number = {phone_number}";

	if ( $mysqli->query( $sqlQuery ) ) {
		$counter ++;
	} else {
		var_dump( $mysqli->error_list );
	}
//	var_dump( $phoneNumber, $telco, $fullName );
}

var_dump( $counter );


// nhiều tên trong 1 cell

// $result = array();
// foreach ($sheetData as $index => $row) {
//     $room = $row['D'];
//     $fullName = $row['E'];
//     $phoneNumberRaw = $row['G'];
//     $fullNameArr = explode("\n", $fullName);
//     $phoneNumberRawArr = explode("\n", $phoneNumberRaw);
//     foreach ($fullNameArr as $index => $fullName) {
//         if (!isset($phoneNumberRaw[$index]) || $phoneNumberRaw[$index] == "") continue;
//         $phoneNumberRaw = $phoneNumberRawArr[$index];
//         $phoneNumberRaw = preg_replace('/\.|\,/', '', $phoneNumberRaw);
//         preg_match('/[0-9]+/', $phoneNumberRaw, $matches);
//         if ($phoneNumberRaw == null || empty($matches)) continue;
//         $phoneNumber = $matches[0];
//         if (!is_null($room) && $room != $preRoom) {
//             $preRoom = $room;
//         }
//         if (is_null($room)) {
//             $room = $preRoom;
//         }
//         $phoneNumber = preg_replace('/\s/', '', $phoneNumber);
//         if ($phoneNumber[0] != "0") $phoneNumber = "0" . $phoneNumber;
//         $pre  = substr($phoneNumber, 0, 4);
//         if (key_exists($pre, $PHONECONVERT)) {
//             $phoneNumber = $PHONECONVERT[$pre] . substr($phoneNumber, 4, strlen($phoneNumber) - 4);
//         }
//         $pre = substr($phoneNumber, 0, 3);
//         if (in_array($pre, $VT)) {
//             $telco = 0;
//         } else if (in_array($pre, $VINA)) {
//             $telco = 1;
//         } else if (in_array($pre, $MOBI)) {
//             $telco = 2;
//         }
//         $result[$phoneNumber] = $fullName;
//         $sqlQuery = "INSERT INTO mvp_crm.customer (name,room_no,phone_number,block_no,telco,status,created_at,updated_at) VALUES ('{$fullName}','{$room}','{$phoneNumber}',{$blockNo},{$telco},{$customStatus},'{$now}','{$now}')";
//         // $sqlQuery = "Update mvp_crm.customer SET block_no = {$blockNo}, room_no = {$room} where phone_number = {phone_number}";
//         if ($mysqli->query($sqlQuery)) {
//             $counter++;
//         } else {
//             var_dump($phoneNumber);
//         }
//     }
// }

// var_dump($counter);


// dữ liệu từ nguồn khác

//$source = 1;
//foreach ($sheetData as $index => $row) {
//    $fullName = $row['B'];
//    $phoneNumberRaw = $row['C'];
//    $phoneNumberRaw = preg_replace('/\.|,|"|\s/', '', $phoneNumberRaw);
//    preg_match('/[0-9]+/', $phoneNumberRaw, $matches);
//    if ($phoneNumberRaw == null || empty($matches)) continue;
//    $phoneNumber = $matches[0];
//    if (!is_null($room) && $room != $preRoom) {
//        $preRoom = $room;
//    }
//    if (is_null($room)) {
//        $room = $preRoom;
//    }
//    $phoneNumber = preg_replace('/\s/', '', $phoneNumber);
//    if ($phoneNumber[0] != "0") $phoneNumber = "0" . $phoneNumber;
//    $pre  = substr($phoneNumber, 0, 4);
//    if (key_exists($pre, $PHONECONVERT)) {
//        $phoneNumber = $PHONECONVERT[$pre] . substr($phoneNumber, 4, strlen($phoneNumber) - 4);
//    }
//    $pre = substr($phoneNumber, 0, 3);
//    if (in_array($pre, $VT)) {
//        $telco = 0;
//    } else if (in_array($pre, $VINA)) {
//        $telco = 1;
//    } else if (in_array($pre, $MOBI)) {
//        $telco = 2;
//    }
//    $sqlQuery = "INSERT INTO mvp_crm.customer (name,phone_number,source,telco,status,created_at,updated_at) VALUES ('{$fullName}','{$phoneNumber}',{$source},{$telco},{$customStatus},'{$now}','{$now}')";
//    // $sqlQuery = "Update mvp_crm.customer SET block_no = {$blockNo}, room_no = {$room} where phone_number = {phone_number}";
//    if ($mysqli->query($sqlQuery)) {
//        $counter++;
//    } else {
//        var_dump($phoneNumber);
//    }
//}
//
//var_dump($counter);

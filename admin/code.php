<?php
require_once '../files/conf/connect.php';

$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()';

$characters_length = strlen($characters);

$random_index = mt_rand(0, $characters_length - 1);

$password = substr($characters, $random_index, 1);

$password_length = 8;

for ($i = 0; $i < $password_length; $i++) {
    $random_index = mt_rand(0, $characters_length - 1);
    $password .= substr($characters, $random_index, 1);
}

$date = $db->query("SELECT * FROM musta_hr");

while ( $dt = $date->fetch_assoc() ) {
    $month = $dt['created_date'];
    $hour = $dt['created_hour'];
}

$arrayHour =  explode(':',$hour);
$arrayMonth =  explode('-',$month);

$dateInfo = getdate();
$currentYear = $dateInfo['year'];
$currentMonth = $dateInfo['mon'];
$currentDay = $dateInfo['mday'];
$currentDate = $currentYear .'-' . $currentMonth .'-' . $currentDay ;
$currentHour = date("h");
$currentMinute = date("i");
$currentSecone= date("s");
$currentDateHour = $currentHour .':' . $currentMinute .':' . $currentSecone ;


$addHour = $arrayHour[0] ;

$addMinute = $arrayHour[1] ;

$addSecond = $arrayHour[2] ;

$addYear = $arrayMonth[0] ;

$addMonth = $arrayMonth[1] ;

$addDay = $arrayMonth[2] ;



$diffYear = $currentYear - $addYear ;

$diffMounth = $currentMonth - $addMonth ;

$diffDay = $currentDay - $addDay ;

$diffHour = $currentHour - $addHour ;

$diffMinute = $currentMinute - $addMinute ;

$diffSecond = $currentSecond - $addSecond ;





if ($diffHour != 0 || $diffDay != 0) {
    mysqli_query($db," update `musta_hr` set musta = '$password' , created_hour = '$currentDateHour' , created_date = '$currentDate' WHERE id_musta = '1' ");
}
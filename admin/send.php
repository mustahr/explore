<?php
require_once '../files/conf/connect.php';

require_once 'code.php';

session_start() ;

if(!isset($_SESSION['login'])){
    header("Location: musta.php");
}






function send_whatsapp($message = "Test", $phone_number)
{
    $phone_n = $phone_number;
    $apikey = "738507";       // Enter your personal apikey received in step 3 above

    $url = 'https://api.callmebot.com/whatsapp.php?source=php&phone=' . $phone_n . '&text=' . urlencode($message) . '&apikey=' . $apikey;

    if ($ch = curl_init($url)) {
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $html = curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // echo "Output:".$html;  // you can print the output for troubleshooting
        curl_close($ch);
        return (int) $status;
    } else {
        return false;
    }
}




$pass = $db->query("SELECT * FROM musta_hr");

while ( $dt = $pass->fetch_assoc() ) {
    $psd = $dt['musta'];
}
if ($diffHour == 0 || $diffDay == 0) {
    $password = $psd ;
}

// to the company
$text = '*Your admin code is:* ' . $password ;

$company_phone = "+212608731353";

send_whatsapp($text,$company_phone);

header("location: musta.php");

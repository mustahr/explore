<?php
require_once '../conf/connect.php';

$phone = $_POST['phone'];
$email = $_POST['email'];
$trip_id = $_GET['trip_id'];
$trip = $_GET['trip'];
$succes = '';

// let's add the trip to reservation table
$currentHour = date("h");
$currentMinute = date("i");
$currentSecone = date("s");
$currentDateHour = $currentHour . ':' . $currentMinute . ':' . $currentSecone;

$insert = $db->query("INSERT into reservation 
( 
    email,
    phone,
    trip,
    created_date,
    created_hour
)
VALUES 
(
    '$email',
    '$phone',
    '$trip',
    NOW(),
    '$currentDateHour'
)
    ");

// Extract the name from the email address
$name = strstr($email, '@', true);




$text = '*You have a new reservation :* \n*Phone :* ' . $phone . '\n*Email  :* ' . $email . '\n*Trip    :* ' . $trip;
$confermation = "
Dear " . $name . "\n,

Thank you for booking your trip ( " . $trip . " ) with *Explore Morocco!* We are excited to welcome you to our beautiful country and to show you all that it has to offer.

Your reservation is now complete.\n
Please let us know if you have any questions or need to make any changes to your reservation.

We look forward to seeing you soon and to helping you create memories that will last a lifetime.

If you have any questions please contact us at : contact@expolremorocco4x4.com

Best regards,

*Explore Morocco*

";

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

// to the company
$company_phone = "+212608731353";
send_whatsapp($text, $company_phone);
// email for the company
$text = 'You have a new reservation : Phone : ' . $phone . '\nEmail  : ' . $email . '\nTrip    :' . $trip;

$to = "mustaphaharmouch1972@gmail.com";
$subject = "New Resrvation email :";
$headers = array(
    'From' => 'exploremorocco4x4.com',
    'Content-Type' => 'text/plain'
);

mail($to, $subject, $text, $headers);

// to the client
$subject = "Confemation :";
mail($email, $subject, $confermation, $headers);



$succes = 'Your reservation has been successfully processed.We sent a verification email to the address you submitted We look forward to seeing you soon ';
header("location: trip.php?succes=" . $succes . "&trip_id=" . $trip_id);

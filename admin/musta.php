<?php
$message  = '';
$try  = '';
if (!empty($_GET['message'])) {
    $message  = $_GET['message'];
}
if (!empty($_GET['try'])) {
    $try  = '( '. $_GET['try'] .' )';
}


require_once '../files/conf/connect.php';


$date = $db->query("SELECT * FROM musta_hr");

while ($dt = $date->fetch_assoc()) {
    $month = $dt['created_date'];
    $hour = $dt['created_hour'];
}

$arrayHour =  explode(':', $hour);
$arrayMonth =  explode('-', $month);

$dateInfo = getdate();
$currentYear = $dateInfo['year'];
$currentMonth = $dateInfo['mon'];
$currentDay = $dateInfo['mday'];
$currentDate = $currentYear . '-' . $currentMonth . '-' . $currentDay;
$currentHour = date("h");
$currentMinute = date("i");
$currentSecone = date("s");
$currentDateHour = $currentHour . ':' . $currentMinute . ':' . $currentSecone;


$addHour = $arrayHour[0];

$addMinute = $arrayHour[1];

$addSecond = $arrayHour[2];

$addYear = $arrayMonth[0];

$addMonth = $arrayMonth[1];

$addDay = $arrayMonth[2];



$diffYear = $currentYear - $addYear;

$diffMounth = $currentMonth - $addMonth;

$diffDay = $currentDay - $addDay;

$diffHour = $currentHour - $addHour;

$diffMinute = $currentMinute - $addMinute;

$diffSecond = $currentSecond - $addSecond;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#F0A500">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="admin_category.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../block/header_style.css">
    <link rel="icon" href="../block/logo.png">
    <title>Musta hr</title>
    <style>
        body {
            height: 80vh;
            display: flex;
            align-items: flex-start;
            align-content: flex-start;
            flex-direction: column;
            justify-content: space-between;
        }
        #contact {
            margin: 0 10px;
        }

        #contact h3 {
            font-size: 25px;
        }
    </style>

</head>

<body>
    <?php
    // include header

    $logo = '../block/logo.png';
    $file = '../block/header.php';
    $index = '../';

    require($file);

    logo($logo, $index, '', '', '', '', '');

    ?>
    <div class="container">
        <form action="check.php" id="contact" method="post" enctype="multipart/form-data">
            <h3 style="text-align: center;">👑 Welcom back king 👑</h3>
            <div class="add">
                <a href="send.php">SEND CODE</a>
            </div>
            <fieldset>
                <label for="musta">Code <?php echo $try?></label>
                <input type="text" name="musta" id="musta" required>
            </fieldset>
            <fieldset>
                <input type="submit" value="submit" class="submit" name="submit">
            </fieldset>
        </form>
    </div>

</body>

</html>
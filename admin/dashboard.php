<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: musta.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="theme-color" content="#F0A500">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="admin_category.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../block/header_style.css">
    <link rel="icon" href="../block/logo.png">
    <title>Dashboard</title>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <style>
        .add {
            padding-top: 5px;
            justify-content: flex-start;
        }

        .container {
            max-width: 800px;
            padding: 101px 20px;
        }
        .add a {
            padding: 10px 18px;
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
    <div class="add">
            <a href="./disconnect.php">LOG OUT</a>
        </div>
        <div id="contact">
            <h3 style="text-align: center;">👑 <br><br> WELCOM TO YOUR DASHBOARD KING <br><br> 👑</h3>
            <div class="add">
                <a href="admin_trip.php"><i class="fas fa-star"></i>&nbsp;&nbsp; ADD TRIP</a>
                <a href="admin_category.php"><i class="fas fa-suitcase"></i>&nbsp;&nbsp; ADD CATEGORY</a>
            </div>
            <div class="add">
                <a href="reservations.php"><i class="fas fa-calendar"></i>&nbsp;&nbsp; VIEW RESERVATIONS</a>
                <a href="messages.php"><i class="fas fa-envelope"></i>&nbsp;&nbsp; VIEW MESSAGES</a>
            </div>
            <div class="add">
                <a href="client.php"><i class="fas fa-user"></i>&nbsp;&nbsp; VIEW CLIENTS</a>
            </div>
        </div>
    </div>
    
</body>

</html>
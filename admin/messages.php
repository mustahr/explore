<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: musta.php");
}

require_once '../files/conf/connect.php';

$reservation = $db->query("SELECT * FROM messages");

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
    <title>Dashboard - Messages</title>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <style>
        .add {
            padding-top: 5px;
            justify-content: flex-start
        }

        .container {
            max-width: 800px;
            padding: 101px 20px;
        }
        .add a {
            padding: 10px 18px;
        }
        .add::-webkit-scrollbar-thumb {
            background: transparent;
        }

        .container>.add {
            height: 15vh;
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
            <a href="dashboard.php">DASHBOARD</a>
            <a href="./disconnect.php">LOG OUT</a>
        </div>
        <div id="contact">
            <h3 style="text-align: center;">👑 <br><br> WELCOM TO YOUR MESSAGES KING <br><br> 👑</h3>
            <?php
            while ($res = $reservation->fetch_assoc()) {
            ?>
                <div class="add">
                    <h5> <a href="mailto:<?php echo $res['email']; ?>"><?php echo $res['email']; ?></a> </h5>
                    <h5>.</h5>
                    <h5> <?php echo (!empty($res['messages'])) ? $res['messages'] : 'not added yet'; ?></h5>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>
<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: musta.php");
}

require_once '../files/conf/connect.php';

$reservation = $db->query("SELECT * FROM client");

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
            overflow-x: scroll;
            height: fit-content;
        }

        
        .container {
            max-width: 800px;
            padding: 101px 20px;
        }
        
        .add::-webkit-scrollbar-thumb {
            background: transparent;
        }

        .container>.add {
            height: 15vh;
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
            <a href="dashboard.php">DASHBOARD</a>
            <a href="./disconnect.php">LOG OUT</a>
        </div>
        <div id="contact">
            <h3 style="text-align: center;">👑 <br><br> WELCOM TO YOUR CLIENTS KING <br><br> 👑</h3>
            <?php
            while ($res = $reservation->fetch_assoc()) {
            ?>
                <div class="add">
                    <h5> <a href="mailto:<?php echo $res['mail']; ?>"><?php echo $res['mail']; ?></a> </h5>
                    <h5>.</h5>
                    <h5> <?php echo (!empty($res['first_name'])) ? $res['first_name'] : 'not added yet'; ?></h5>
                    <h5>.</h5>
                    <h5> <?php echo (!empty($res['last_name'])) ? $res['last_name'] : 'not added yet'; ?></h5>
                    <h5>.</h5>
                    <h5> <?php echo (!empty($res['client_func'])) ? $res['client_func'] : 'not added yet'; ?></h5>
                    <h5>.</h5>
                    <h5> <?php echo (!empty($res['phone_number'])) ? $res['phone_number'] : 'not added yet'; ?></h5>
                    <h5>.</h5>
                    <h5> <?php echo $res['created']; ?></h5>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>
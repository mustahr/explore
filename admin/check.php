<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: musta.php");
}
require_once '../files/conf/connect.php';
$password = trim($_POST['musta']);

$pass = $db->query("SELECT * FROM musta_hr");

while ($dt = $pass->fetch_assoc()) {
    $psd = $dt['musta'];
}

echo $psd;

if ($psd == $password) {
    header("location: dashboard.php");
    $_SESSION['login'] = 'hello';
} else {
    header("location:musta.php?try=try again");
}

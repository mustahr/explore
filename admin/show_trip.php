<?php
require_once '../files/conf/connect.php';
session_start() ;

if(!isset($_SESSION['login'])){
    header("Location: musta.php");
}
$trip_id = $_GET['id'];
$show = $_GET['show'];

if( $show == 'false'){
    mysqli_query($db, "update `trip` set show_trip = 'y' where trip_id = '$trip_id'");
}
else {
    mysqli_query($db, "update `trip` set show_trip = 'n' where trip_id = '$trip_id'");
}


header('location:admin_trip.php');

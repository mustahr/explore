<?php
require_once '../files/conf/connect.php';
session_start() ;

if(!isset($_SESSION['login'])){
    header("Location: musta.php");
}
$trip_id = $_GET['id'];


$trip_title = mysqli_real_escape_string($db, $_POST['trip_title']);
$category = mysqli_real_escape_string($db, $_POST['category']);
$trip_front_image = $_FILES['trip_front_image']['tmp_name'];
$activity = mysqli_real_escape_string($db, $_POST['activity']);
$time_open = mysqli_real_escape_string($db, $_POST['time_open']);
$time_start = mysqli_real_escape_string($db, $_POST['time_start']);
$time_end = mysqli_real_escape_string($db, $_POST['time_end']);
$price_origine = mysqli_real_escape_string($db, $_POST['price_origine']);
$price_fake = mysqli_real_escape_string($db, $_POST['price_fake']);
$big_title_1 = mysqli_real_escape_string($db, $_POST['big_title_1']);
$big_title_2 = mysqli_real_escape_string($db, $_POST['big_title_2']);
$big_title_3 = mysqli_real_escape_string($db, $_POST['big_title_3']);

$img_1 = $_FILES['img_1']['tmp_name'];
$img_1_caption = mysqli_real_escape_string($db, $_POST['img_1_caption']);

$img_2 = $_FILES['img_2']['tmp_name'];
$img_2_caption = mysqli_real_escape_string($db, $_POST['img_2_caption']);

$img_3 = $_FILES['img_3']['tmp_name'];
$img_3_caption = mysqli_real_escape_string($db, $_POST['img_3_caption']);

$img_4 = $_FILES['img_4']['tmp_name'];
$img_4_caption = mysqli_real_escape_string($db, $_POST['img_4_caption']);

$img_5 = $_FILES['img_5']['tmp_name'];
$img_5_caption = mysqli_real_escape_string($db, $_POST['img_5_caption']);

$img_6 = $_FILES['img_6']['tmp_name'];
$img_6_caption = mysqli_real_escape_string($db, $_POST['img_6_caption']);

$description_1 = mysqli_real_escape_string($db, $_POST['description_1']);
$description_2 = mysqli_real_escape_string($db, $_POST['description_2']);
$description_3 = mysqli_real_escape_string($db, $_POST['description_3']);
$trip_location = mysqli_real_escape_string($db, $_POST['trip_location']);
$last_destination = mysqli_real_escape_string($db, $_POST['last_destination']);



$trip_front_image = addslashes(file_get_contents($trip_front_image));
$img_1 = addslashes(file_get_contents($img_1));
$img_2 = addslashes(file_get_contents($img_2));
$img_3 = addslashes(file_get_contents($img_3));
$img_4 = addslashes(file_get_contents($img_4));
$img_5 = addslashes(file_get_contents($img_5));
$img_6 = addslashes(file_get_contents($img_6));


mysqli_query($db, "update `trip` set 
                trip_title = '$trip_title',
                trip_front_image = '$trip_front_image',
                activity = '$activity',
                time_open = '$time_open',
                time_start = '$time_start',
                time_end = '$time_end',
                price_origine = '$price_origine',
                price_fake = '$price_fake',
                big_title_1 = '$big_title_1',
                big_title_2 = '$big_title_2',
                big_title_3 = '$big_title_3',
                img_1 = '$img_1',
                img_1_caption = '$img_1_caption',
                img_2 = '$img_2',
                img_2_caption = 'img_2_caption$',
                img_3 = '$img_3',
                img_3_caption = '$img_3_caption',
                img_4 = '$img_4',
                img_4_caption = '$img_4_caption',
                img_5 = '$img_5',
                img_5_caption = '$img_5_caption',
                img_6 = '$img_6',
                img_6_caption = '$img_6_caption',
                description_1 = '$description_1',
                description_2 = '$description_2',
                description_3 = '$description_3',
                trip_location = '$trip_location',
                last_destination = '$last_destination',
                category = '$category'
                where trip_id = '$trip_id'");


header('location:admin_trip.php');

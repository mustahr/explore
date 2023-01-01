<?php
// Include the database configuration file  
require_once '../files/conf/connect.php';
session_start() ;

if(!isset($_SESSION['login'])){
    header("Location: musta.php");
}
$number = $_POST['number'];

for ($i=0; $i <= $number; $i++) {
    $category .=  $_POST['category_'.$i] .' ' ;
}
echo $category ;
$status = '';
$trip_title = mysqli_real_escape_string($db, $_POST['trip_title']);
// $category = $_POST['category'];
$trip_front_image = mysqli_real_escape_string($db, $_POST['trip_front_image']);
$activity = mysqli_real_escape_string($db, $_POST['activity']);
$time_open = mysqli_real_escape_string($db, $_POST['time_open']);
$time_start = mysqli_real_escape_string($db, $_POST['time_start']);
$time_end = mysqli_real_escape_string($db, $_POST['time_end']);
$price_origine = mysqli_real_escape_string($db, $_POST['price_origine']);
$price_fake = mysqli_real_escape_string($db, $_POST['price_fake']);
$big_title_1 = mysqli_real_escape_string($db, $_POST['big_title_1']);
$big_title_2 = mysqli_real_escape_string($db, $_POST['big_title_2']);
$big_title_3 = mysqli_real_escape_string($db, $_POST['big_title_3']);
$img_1 = $_POST['img_1'];
$img_1_caption = mysqli_real_escape_string($db, $_POST['img_1_caption']);
$img_2 = $_POST['img_2'];
$img_2_caption = mysqli_real_escape_string($db, $_POST['img_2_caption']);
$img_3 = $_POST['img_3'];
$img_3_caption = mysqli_real_escape_string($db, $_POST['img_3_caption']);
$img_4 = $_POST['img_4'];
$img_4_caption = mysqli_real_escape_string($db, $_POST['img_4_caption']);
$img_5 = $_POST['img_5'];
$img_5_caption = mysqli_real_escape_string($db, $_POST['img_5_caption']);
$img_6 = $_POST['img_6'];
$img_6_caption = mysqli_real_escape_string($db, $_POST['img_6_caption']);
$description_1 = mysqli_real_escape_string($db, $_POST['description_1']);
$description_2 = mysqli_real_escape_string($db, $_POST['description_2']);
$description_3 = mysqli_real_escape_string($db, $_POST['description_3']);
$trip_location = mysqli_real_escape_string($db, $_POST['trip_location']);
$last_destination = mysqli_real_escape_string($db, $_POST['last_destination']);





if (!empty($_FILES["img_1"]["name"])) {
    // Get file info 
    $fileName = basename($_FILES["img_1"]["name"]);
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    // Allow certain file formats 
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($fileType, $allowTypes)) {
        $img_1 = $_FILES['img_1']['tmp_name'];
        $img_2 = $_FILES['img_2']['tmp_name'];
        $img_3 = $_FILES['img_3']['tmp_name'];
        $img_4 = $_FILES['img_4']['tmp_name'];
        $img_5 = $_FILES['img_5']['tmp_name'];
        $img_6 = $_FILES['img_6']['tmp_name'];
        $trip_front_image = $_FILES['trip_front_image']['tmp_name'];

        $imgContent_1 = addslashes(file_get_contents($img_1));
        $imgContent_2 = addslashes(file_get_contents($img_2));
        $imgContent_3 = addslashes(file_get_contents($img_3));
        $imgContent_4 = addslashes(file_get_contents($img_4));
        $imgContent_5 = addslashes(file_get_contents($img_5));
        $imgContent_6 = addslashes(file_get_contents($img_6));
        $imgContent_trip_front_image = addslashes(file_get_contents($trip_front_image));

        // Insert image content into database 
        $insert = $db->query("INSERT into trip 
            (
                trip_title,
                trip_front_image,
                activity,
                time_open,
                time_start,
                time_end,
                price_origine,
                price_fake,
                big_title_1,
                big_title_2,
                big_title_3,
                img_1,
                img_1_caption,
                img_2,
                img_2_caption,
                img_3,
                img_3_caption,
                img_4,
                img_4_caption,
                img_5,
                img_5_caption,
                img_6,
                img_6_caption,
                description_1,
                description_2,
                description_3,
                trip_location,
                last_destination,
                created,
                category
            )
            VALUES 
            (
                '$trip_title',
                '$imgContent_trip_front_image',
                '$activity',
                '$time_open',
                '$time_start',
                '$time_end',
                '$price_origine',
                '$price_fake',
                '$big_title_1',
                '$big_title_2',
                '$big_title_3',
                '$imgContent_1',
                '$img_1_caption',
                '$imgContent_2',
                '$img_2_caption',
                '$imgContent_3',
                '$img_3_caption',
                '$imgContent_4',
                '$img_4_caption',
                '$imgContent_5',
                '$img_5_caption',
                '$imgContent_6',
                '$img_6_caption',
                '$description_1',
                '$description_2',
                '$description_3',
                '$trip_location',
                '$last_destination',
                NOW(),
                '$category')
                ");

        if ($insert) {
            $status = 'success';
            header("Location: admin_trip.php?message=trip added successfully ");
        } else {
            $statusMsg = "File upload failed, please try again.";
        }
    } else {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
    }
} else {
    $statusMsg = 'Please select an image file to upload.';
}
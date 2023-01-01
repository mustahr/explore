<?php
// Include the database configuration file  
require_once '../files/conf/connect.php';
session_start() ;

if(!isset($_SESSION['login'])){
    header("Location: musta.php");
}
$status = '';
$category = mysqli_real_escape_string($db, $_POST['category']);
$big_title = mysqli_real_escape_string($db, $_POST['big_title']);
$first_price = mysqli_real_escape_string($db, $_POST['first_price']);
$second_price = mysqli_real_escape_string($db, $_POST['second_price']);
$stars = mysqli_real_escape_string($db, $_POST['stars']);
$video_link = mysqli_real_escape_string($db, $_POST['video_link']);
$description = mysqli_real_escape_string($db, $_POST['description']);
$category_image = $_POST['category_image'];
$category_image_thumbnail = $_POST['category_image_thumbnail'];



if (!empty($_FILES["category_image"]["name"])) {
    // Get file info 
    $fileName = basename($_FILES["category_image"]["name"]);
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    // Allow certain file formats 
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($fileType, $allowTypes)) {
        $category_image = $_FILES['category_image']['tmp_name'];
        $category_image_thumbnail = $_FILES['category_image_thumbnail']['tmp_name'];

        $imgContent_1 = addslashes(file_get_contents($category_image));
        $imgContent_2 = addslashes(file_get_contents($category_image_thumbnail));

        // Insert image content into database 
        $insert = $db->query("INSERT into category 
            ( 
                category,
                category_image,
                category_image_thumbnail,
                first_price,
                second_price,
                stars,
                video_link,
                big_title,
                descriptionn,
                created
            )
            VALUES 
            (
                '$category',
                '$imgContent_1',
                '$imgContent_2',
                '$first_price',
                '$second_price',
                '$stars',
                '$video_link',
                '$big_title',
                '$description',
                NOW()
            )
                ");

        if ($insert) {
            $status = 'success';
            header("Location: admin_category.php?message=category added successfully ");

        } else {
            $statusMsg = "File upload failed, please try again.";
        }
    } else {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
    }
} else {
    $statusMsg = 'Please select an image file to upload.';
}
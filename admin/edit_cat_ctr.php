<?php
require_once '../files/conf/connect.php';
session_start() ;

if(!isset($_SESSION['login'])){
    header("Location: musta.php");
}
$id_cat = $_GET['id'];

$category = mysqli_real_escape_string($db, $_POST['category']);
$big_title = mysqli_real_escape_string($db, $_POST['big_title']);
$first_price = mysqli_real_escape_string($db, $_POST['first_price']);
$second_price = mysqli_real_escape_string($db, $_POST['second_price']);
$stars = mysqli_real_escape_string($db, $_POST['stars']);
$video_link = mysqli_real_escape_string($db, $_POST['video_link']);
$descriptionn = mysqli_real_escape_string($db, $_POST['descriptionn']);
$category_image = $_FILES['category_image']['tmp_name'];
$category_image_thumbnail = $_FILES['category_image_thumbnail']['tmp_name'];

if (!empty($category_image)) {
$imgContent = addslashes(file_get_contents($category_image));
$imgContent_2 = addslashes(file_get_contents($category_image_thumbnail));
mysqli_query($db, "update `category` set 
            category ='$category', 
            category_image='$imgContent' , 
            category_image_thumbnail='$imgContent_2' ,
            first_price='$first_price' ,  
            second_price='$second_price' , 
            stars='$stars' , 
            video_link='$video_link', 
            big_title='$big_title', 
            descriptionn='$descriptionn' 
            where id_cat='$id_cat'");
} else {
    mysqli_query($db, "update `category` set 
            category ='$category',
            first_price='$first_price' ,  
            second_price='$second_price' , 
            stars='$stars' , 
            video_link='$video_link', 
            big_title='$big_title', 
            descriptionn='$descriptionn' 
            where id_cat='$id_cat'");
}

header('location:admin_category.php');

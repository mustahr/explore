<?php

require_once '../files/conf/connect.php';
session_start() ;

if(!isset($_SESSION['login'])){
    header("Location: musta.php");
}
$id_cat = $_GET['id'];

$category = $db->query("SELECT * FROM category WHERE id_cat = $id_cat");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#F0A500">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="admin_category.css">
    <link rel="stylesheet" href="../block/header_style.css">
    <link rel="icon" href="../block/logo.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit category</title>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <style>
        fieldset img {
            height: 100px;
            width: auto;
            border: 1px solid white;
            margin: 20px 0;
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

    <div class="add">
        <a href="admin_category.php">CANCEL</a>
    </div>


    <?php while ($row = $category->fetch_assoc()) { ?>

        <div class="container">
            <form id="contact" method="post" action="edit_cat_ctr.php?id=<?php echo $id_cat; ?>" enctype="multipart/form-data">
                <h3>EDIT CATEGORY</h3>
                <fieldset>
                    <input type="text" name="category" placeholder="category" autofocus value="<?php echo $row['category']; ?>">
                </fieldset>
                <fieldset>
                    <input type="text" name="big_title" placeholder="big_title" value="<?php echo $row['big_title']; ?>">
                </fieldset>
                <fieldset>
                    <input type="text" name="first_price" placeholder="first_price" value="<?php echo $row['first_price']; ?>">
                </fieldset>
                <fieldset>
                    <input type="text" name="second_price" placeholder="second_price" value="<?php echo $row['second_price']; ?>">
                </fieldset>
                <fieldset>
                    <label for="stars">Stars</label>
                    <input type="number" name="stars" min="1" max="5" id="stars" value="<?php echo $row['stars']; ?>">
                </fieldset>
                <fieldset>
                    <input type="text" name="video_link" placeholder="video_link" value="<?php echo $row['video_link']; ?>">
                </fieldset>
                <fieldset>
                    <input type="text" name="descriptionn" placeholder="description" value="<?php echo $row['descriptionn']; ?>">
                </fieldset>
                <fieldset>
                    <label for="category_image">Category image</label>
                    <input type="file" class="input-field" id="category_image" name="category_image" value="<?php echo base64_encode($row['category_image']); ?>">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['category_image']); ?>" alt="">
                </fieldset>
                <fieldset>
                    <label for="category_image_thumbnail">Category image to be shown in the home page</label>
                    <input type="file" class="input-field" id="category_image_thumbnail" name="category_image_thumbnail" value="<?php echo base64_encode($row['category_image_thumbnail']); ?>">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['category_image_thumbnail']); ?>" alt="">
                </fieldset>
                <fieldset>
                    <input type="submit" value="edit" class="submit" name="edit">
                </fieldset>
            </form>
        </div>
        
    <?php 
}
?>
</body>

</html>
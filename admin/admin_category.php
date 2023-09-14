<?php
$message  = '';
if (!empty($_GET['message'])) {
    $message  = $_GET['message'];
}
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: musta.php");
}
?>
<?php

require_once '../files/conf/connect.php';

$category = $db->query("SELECT * FROM category");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="theme-color" content="#F0A500">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="admin_category.css">
    <link rel="stylesheet" href="../block/header_style.css">
    <link rel="icon" href="../block/logo.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

</head>

<body>

    <?php
    // include header

    $logo = '../block/logo.png';
    $file = '../block/header.php';
    $index = '../';

    require($file);
=
    ?>





    <div class="container">
        <div class="add">
            <a href="dashboard.php">DASHBOARD</a>
            <a href="./disconnect.php">LOG OUT</a>
        </div>
        <form action="./add_category.php" id="contact" method="post" enctype="multipart/form-data">
            <h3>ADD CATEGORY</h3>
            <h4><?php echo $message; ?></h4>
            <fieldset>
                <label for="category">Category</label>
                <input type="text" name="category" id="category" required autofocus>
            </fieldset>
            <fieldset>
                <label for="big_title">Big title</label>
                <input type="text" name="big_title" id="big_title" required>
            </fieldset>
            <fieldset>
                <label for="first_price">First price</label>
                <input type="text" name="first_price" id="first_price" required>
            </fieldset>
            <fieldset>
                <label for="second_price">Promo price</label>
                <input type="text" name="second_price" id="second_price" required>
            </fieldset>
            <fieldset>
                <label for="stars">Stars</label>
                <input type="number" name="stars" id="stars" min="1" max="5" id="stars" required>
            </fieldset>
            <fieldset>
                <label for="video_link">Video link</label>
                <input type="text" name="video_link" id="video_link" required>
            </fieldset>
            <fieldset>
                <label for="description">Description</label>
                <input type="text" name="description" id="description" required>
            </fieldset>
            <fieldset>
                <label for="category_image">Category image</label>
                <input type="file" class="input-field" id="category_image" name="category_image">
            </fieldset>
            <fieldset>
                <label for="category_image_thumbnail">Category image to be shown in the home page</label>
                <input type="file" class="input-field" id="category_image_thumbnail" name="category_image_thumbnail">
            </fieldset>
            <fieldset>
                <input type="submit" value="add" class="submit" name="submit">
            </fieldset>
        </form>
    </div>


    <!-- ----------------- categories -------------------- -->

    <section class="sec-0">
        <div class="title" data-aos="fade-up">
            <h1>Categories</h1>
        </div>
        <div class="swiper mySwiper" data-aos="fade-up">
            <div class="swiper-wrapper">
                <?php while ($row = $category->fetch_assoc()) { ?>
                    <div class="swiper-slide">
                        <a href="../files/category/category.php?trip_category_id=<?php echo $row['id_cat']; ?>">
                            <div class="product-card">
                                <div class="product-card__images">
                                    <div class="product-card__img">
                                        <img class="img-1" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['category_image_thumbnail']); ?>" alt="category_image" />
                                    </div>
                                </div>

                                <div class="product-card__info">
                                    <h3 class="product-card__name"><?php echo $row['category']; ?> </h3>

                                    <div class="product-card__price">
                                        <span><?php echo $row['first_price']; ?></span>
                                        <span class="product-card__promo"><?php echo $row['second_price']; ?></span>
                                    </div>
                                    <div class="product-card__stars">

                                        <?php for ($i = 0; $i < $row['stars']; $i++) { ?>
                                            <i class="fas fa-star"></i>
                                        <?php } ?>
                                    </div>
                                    <div class="button delete_cat">
                                        <a href="delete.php?id=<?php echo $row['id_cat']; ?>&table=category&column=id_cat">DELETE</a>
                                    </div>
                                    <div class="button edite_cat">
                                        <a href="edit_category.php?id=<?php echo $row['id_cat']; ?>">EDIT</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../files/js/main.js"></script>
</body>

</html>
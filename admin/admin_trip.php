<?php
$message  = '';
if (!empty($_GET['message'])) {
    $message  = $_GET['message'];
}
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: musta.php");
}

require_once '../files/conf/connect.php';

$cat = $db->query("SELECT * FROM category");

$trip = $db->query("SELECT * FROM trip");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="admin_category.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../block/header_style.css">
    <link rel="icon" href="../block/logo.png">
    <title>Categories</title>

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
        <form action="add_trip.php" id="contact" method="post" enctype="multipart/form-data">
            <h3>
                <?php
                if (mysqli_num_rows($cat) == 0) {

                    echo '
                    <a href="admin_category.php">ADD CATEGORY FIRST !!!</a>
                    ';
                    die();
                } else echo 'ADD TRIP';
                ?>
            </h3>
            <h4><?php echo $message; ?></h4>
            <fieldset>
                <label for="trip_title">Trip title</label>
                <input type="text" name="trip_title" id="trip_title"  autofocus required>
            </fieldset>
            <fieldset>
                CHOSE CATEGORY
                <?php 
                $i= 0 ; 
                while ($cats = $cat->fetch_assoc()) { ?>
                    <div class="label">
                        <?php echo $cats['id_cat']  ?> 
                        <input type="checkbox" name="category_<?php echo $i ?>" id="<?php echo $cats['category']; ?>" value="<?php echo $cats['id_cat']; ?>" >
                        <label for="<?php echo $cats['category']; ?>"><?php echo $cats['category']; ?></label>
                        <input type="text" name='number' value="<?php echo $i ?>" hidden>
                    </div>
                <?php
            $i++;
            } ?>
            </fieldset>
            <fieldset>
                <label for="trip_front_image">first image</label>
                <input type="file" class="input-field" id="trip_front_image" name="trip_front_image" required >
            </fieldset>
            <fieldset>
                <label for="activity">Activity</label>
                <input type="text" name="activity" id="activity" >
            </fieldset>
            <fieldset>
                <p>Trip open time ? ( if yes , no need to select the date )</p>
                <div>
                    <input type="radio" name="time_open" id="time_open_1" value="y" >
                    <label for="time_open_1">Yes</label>
                </div>
                <div>
                    <input type="radio" name="time_open" id="time_open_2" value="n">
                    <label for="time_open_2">No</label>
                </div>
            </fieldset>
            <fieldset>
                time_start
                <input type="date" name="time_start" id="time_start">
            </fieldset>
            <fieldset>
                time_end
                <input type="date" name="time_end" id="time_end">
            </fieldset>
            <fieldset>
                <label for="price_origine">Price</label>
                <input type="text" name="price_origine" id="price_origine" required>
            </fieldset>
            <fieldset>
                <label for="price_fake">Promo Price</label>
                <input type="text" name="price_fake" id="price_fake"required >
            </fieldset>
            <fieldset>
                <label for="big_title_1">Big title 1</label>
                <input type="text" name="big_title_1" id="big_title_1"required>
            </fieldset>
            <fieldset>
                <label for="big_title_2">Big title 2</label>
                <input type="text" name="big_title_2" id="big_title_2" required>
            </fieldset>
            <fieldset>
                <label for="big_title_3">Big title 3</label>
                <input type="text" name="big_title_3" id="big_title_3" required>
            </fieldset>
            <fieldset>
                <label for="image_1">image 1</label>
                <input type="file" class="input-field" id="image_1" name="img_1" required>
            </fieldset>
            <fieldset>
                <label for="img_1_caption">image caption 1</label>
                <input type="text" name="img_1_caption" id="img_1_caption" required>
            </fieldset>
            <fieldset>
                <label for="image_2">image 2</label>
                <input type="file" class="input-field" id="image_2" name="img_2" required>
            </fieldset>
            <fieldset>
                <label for="img_2_caption">image caption 2</label>
                <input type="text" name="img_2_caption" id="img_2_caption" required>
            </fieldset>
            <fieldset>
                <label for="image_3">image 3</label>
                <input type="file" class="input-field" id="image =_3" name="img_3" required>
            </fieldset>
            <fieldset>
                <label for="img_3_caption">image caption 3</label>
                <input type="text" name="img_3_caption" id="img_3_caption" required>
            </fieldset>
            <fieldset>
                <label for="image_4">image 4</label>
                <input type="file" class="input-field" id="image_4" name="img_4" required>
            </fieldset>
            <fieldset>
                <label for="img_4_caption">image caption 4</label>
                <input type="text" name="img_4_caption" id="img_4_caption" required>
            </fieldset>
            <fieldset>
                <label for="image_5">image 5</label>
                <input type="file" class="input-field" id="image_5" name="img_5"required >
            </fieldset>
            <fieldset>
                <label for="img_5_caption">image caption 5</label>
                <input type="text" name="img_5_caption" id="img_5_caption" required>
            </fieldset>
            <fieldset>
                <label for="image_6">image 6</label>
                <input type="file" class="input-field" id="image_6" name="img_6" required>
            </fieldset>
            <fieldset>
                <label for="img_6_caption">image caption 6</label>
                <input type="text" name="img_6_caption" id="img_6_caption" required>
            </fieldset>
            <fieldset>
                <label for="description_1">description 1</label>
                <input type="text" name="description_1" id="description_1" required>
            </fieldset>
            <fieldset>
                <label for="description_2">description 2</label>
                <input type="text" name="description_2" id="description_2" required>
            </fieldset>
            <fieldset>
                <label for="description_3">description 3</label>
                <input type="text" name="description_3" id="description_3" required>
            </fieldset>
            <fieldset>
                <label for="trip_location">Trip starting location </label>
                <input type="text" name="trip_location" id="trip_location"required >
            </fieldset>
            <fieldset>
                <p>Add to last destinations ?</p>
                <div>
                    <input type="radio" name="last_destination" id="last_destination_1" value="y" >
                    <label for="last_destination_1">Yes</label>
                </div>
                <div>
                    <input type="radio" name="last_destination" id="last_destination_2" value="n" >
                    <label for="last_destination_2">No</label>
                </div>
            </fieldset>
            <fieldset>
                <input type="submit" value="add" class="submit" name="submit">
            </fieldset>
        </form>
    </div>



    <!-- ----------------- trips -------------------- -->

    <section class="sec-0">
        <div class="title" data-aos="fade-up">
            <h1>Trips</h1>
        </div>
        <div class="swiper mySwiper" data-aos="fade-up">
            <div class="swiper-wrapper">
                <?php while ($row = $trip->fetch_assoc()) { ?>
                    <div class="swiper-slide">
                        <a href="../files/trips/trip.php?trip_id=<?php echo $row['trip_id']; ?>">
                            <div class="product-card">
                                <div class="product-card__images">
                                    <div class="product-card__img">
                                        <img class="img-1" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['trip_front_image']); ?>" alt="trip_front_image" />
                                    </div>
                                </div>

                                <div class="product-card__info">
                                    <h3 class="product-card__name"><?php echo $row['trip_title']; ?> </h3>
                                    <div class="button delete_cat">
                                        <a href="delete.php?id=<?php echo $row['trip_id']; ?>&table=trip&column=trip_id">DELETE</a>
                                    </div>
                                    <div class="button edite_cat">
                                        <a href="edit_trip.php?id=<?php echo $row['trip_id']; ?>">EDIT</a>
                                    </div>
                                    <?php 
                                    if ($row['show_trip'] == 'y'){
                                    ?>
                                    <div class="button show_cat">
                                        <a href="show_trip.php?id=<?php echo $row['trip_id']; ?>&show=true">HIDE</a>
                                    </div>
                                    <?php 
                                    } else {
                                    ?>
                                    <div class="button show_cat">
                                        <a href="show_trip.php?id=<?php echo $row['trip_id']; ?>&show=false">SHOW</a>
                                    </div>
                                    <?php 
                                    }
                                    ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</body>

</html>
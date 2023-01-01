<?php

require_once '../files/conf/connect.php';
session_start() ;

if(!isset($_SESSION['login'])){
    header("Location: musta.php");
}
$id_trip = $_GET['id'];

$trips = $db->query("SELECT * FROM trip WHERE trip_id = $id_trip");
$cat = $db->query("SELECT * FROM category");

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
    <title>Edit trip</title>
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
        <a href="admin_trip.php">CANCEL</a>
    </div>


    <?php while ($row = $trips->fetch_assoc()) { ?>


        <div class="container">
            <form action="edit_trip_ctr.php?id=<?php echo $id_trip; ?>" id="contact" method="post" enctype="multipart/form-data">
                <h3>
                    EDIT TRIP
                </h3>
                <fieldset>
                    <label for="trip_title">Trip title</label>
                    <input type="text" name="trip_title" id="trip_title" required value="<?php echo $row['trip_title']; ?>">
                </fieldset>
                <fieldset>
                    CHOSE CATEGORY
                    <?php while ($cats = $cat->fetch_assoc()) {
                        if (isset($row['category'])) {
                            $checked = 'checked';
                        } else $checked = '';
                    ?>
                        <div class="label">
                            <input type="radio" name="category" id="<?php echo $cats['category']; ?>" value="<?php echo $cats['id_cat']; ?>" <?php echo $checked ?> required>
                            <label for="<?php echo $cats['category']; ?>"><?php echo $cats['category']; ?></label>
                        </div>
                    <?php } ?>
                </fieldset>

                <fieldset>
                    <label for="trip_front_image">Trip front image</label>
                    <input type="file" class="input-field" id="trip_front_image" name="trip_front_image" value="<?php echo base64_encode($row['trip_front_image']); ?>">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['trip_front_image']); ?>" alt="">
                </fieldset>

                <fieldset>
                    <label for="activity">Activity</label>
                    <input type="text" name="activity" id="activity" value="<?php echo $row['activity']; ?>">
                </fieldset>

                <fieldset>
                    <p>Trip open time ?</p>
                    <?php
                    if ($row['time_open'] == 'o') {
                    ?>
                        <div>
                            <input type="radio" name="time_open" id="time_open_1" value="y" checked>
                            <label for="time_open_1">Yes</label>
                        </div>
                        <div>
                            <input type="radio" name="time_open" id="time_open_2" value="n">
                            <label for="time_open_2">No</label>
                        </div>
                    <?php
                    } else {
                    ?>

                        <div>
                            <input type="radio" name="time_open" id="time_open_1" value="y">
                            <label for="time_open_1">Yes</label>
                        </div>
                        <div>
                            <input type="radio" name="time_open" id="time_open_2" value="n" checked>
                            <label for="time_open_2">No</label>
                        </div>
                    <?php
                    }
                    ?>
                </fieldset>

                <fieldset>
                    time_start
                    <input type="date" name="time_start" id="time_start" value="<?php echo $row['time_start']; ?>">
                </fieldset>

                <fieldset>
                    time_end
                    <input type="date" name="time_end" id="time_end" value="<?php echo $row['time_end']; ?>">
                </fieldset>

                <fieldset>
                    <label for="price_origine">price</label>
                    <input type="text" name="price_origine" id="price_origine" value="<?php echo $row['price_origine']; ?>">
                </fieldset>

                <fieldset>
                    <label for="price_fake">promo price </label>
                    <input type="text" name="price_fake" id="price_fake" value="<?php echo $row['price_fake']; ?>">
                </fieldset>

                <fieldset>
                    <input type="text" name="big_title_1" id="big_title_1" value="<?php echo $row['big_title_1']; ?>">
                </fieldset>

                <fieldset>
                    <input type="text" name="big_title_2" id="big_title_2" value="<?php echo $row['big_title_2']; ?>">
                </fieldset>

                <fieldset>
                    <input type="text" name="big_title_3" id="big_title_3" value="<?php echo $row['big_title_3']; ?>">
                </fieldset>

                <fieldset>
                    <label for="img_1">image 1</label>
                    <input type="file" class="input-field" id="img_1" name="img_1" value="<?php echo base64_encode($row['img_1']); ?>">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_1']); ?>" alt="">
                </fieldset>

                <fieldset>
                    <label for="img_1_caption">Image 1 caption</label>
                    <input type="text" name="img_1_caption" id="img_1_caption" value="<?php echo $row['img_1_caption']; ?>">
                </fieldset>

                <fieldset>
                    <label for="img_2">image 2</label>
                    <input type="file" class="input-field" id="img_2" name="img_2" value="<?php echo base64_encode($row['img_2']); ?>">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_2']); ?>" alt="">
                </fieldset>

                <fieldset>
                    <label for="img_2_caption">Image 2 caption</label>
                    <input type="text" name="img_2_caption" id="img_2_caption" value="<?php echo $row['img_2_caption']; ?>">
                </fieldset>

                <fieldset>
                    <label for="img_3">image 3</label>
                    <input type="file" class="input-field" id="img_3" name="img_3" value="<?php echo base64_encode($row['img_3']); ?>">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_3']); ?>" alt="">
                </fieldset>

                <fieldset>
                    <label for="img_3_caption">Image 3 caption</label>
                    <input type="text" name="img_3_caption" id="img_3_caption" value="<?php echo $row['img_3_caption']; ?>">
                </fieldset>

                <fieldset>
                    <label for="img_4">image 4</label>
                    <input type="file" class="input-field" id="img_4" name="img_4" value="<?php echo base64_encode($row['img_4']); ?>">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_4']); ?>" alt="">
                </fieldset>

                <fieldset>
                    <label for="img_4_caption">Image 4 caption</label>
                    <input type="text" name="img_4_caption" id="img_4_caption" value="<?php echo $row['img_4_caption']; ?>">
                </fieldset>

                <fieldset>
                    <label for="img_5">image 5</label>
                    <input type="file" class="input-field" id="img_5" name="img_5" value="<?php echo base64_encode($row['img_5']); ?>">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_5']); ?>" alt="">
                </fieldset>

                <fieldset>
                    <label for="img_5_caption">Image 5 caption</label>
                    <input type="text" name="img_5_caption" id="img_5_caption" value="<?php echo $row['img_5_caption']; ?>">
                </fieldset>

                <fieldset>
                    <label for="img_6">image 6</label>
                    <input type="file" class="input-field" id="img_6" name="img_6" value="<?php echo base64_encode($row['img_6']); ?>">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_6']); ?>" alt="">
                </fieldset>

                <fieldset>
                    <label for="img_6_caption">Image 6 caption</label>
                    <input type="text" name="img_6_caption" id="img_6_caption" value="<?php echo $row['img_6_caption']; ?>">
                </fieldset>

                <fieldset>
                    <label for="description_1">description 1</label>
                    <input type="text" name="description_1" id="description_1" value="<?php echo $row['description_1']; ?>">
                </fieldset>

                <fieldset>
                    <label for="description_2">description 2</label>
                    <input type="text" name="description_2" id="description_2" value="<?php echo $row['description_2']; ?>">
                </fieldset>

                <fieldset>
                    <label for="description_3">description 3</label>
                    <input type="text" name="description_3" id="description_3" value="<?php echo $row['description_3']; ?>">
                </fieldset>

                <fieldset>
                    <label for="trip_location">Copy and past the start location of the trip</label>
                    <input type="text" name="trip_location" id="trip_location" value="<?php echo $row['trip_location']; ?>">
                </fieldset>

                <fieldset>
                    <p>Add to last destinations ?</p>
                    <?php
                    if ($row['time_open'] == 'y') {
                    ?>
                    <div>
                        <input type="radio" name="last_destination" id="last_destination_1" value="y" required checked>
                        <label for="last_destination_1">Yes</label>
                    </div>
                    <div>
                        <input type="radio" name="last_destination" id="last_destination_2" value="n" required>
                        <label for="last_destination_2">No</label>
                    </div>
                    <?php
                    }else {
                    ?>
                    <div>
                        <input type="radio" name="last_destination" id="last_destination_1" value="y" required >
                        <label for="last_destination_1">Yes</label>
                    </div>
                    <div>
                        <input type="radio" name="last_destination" id="last_destination_2" value="n" required checked>
                        <label for="last_destination_2">No</label>
                    </div>
                    <?php
                    }
                    ?>
                </fieldset>

                <fieldset>
                    <input type="submit" value="Edit" class="submit" name="edit">
                </fieldset>

            </form>
        </div>

    <?php
    }
    ?>
</body>

</html>
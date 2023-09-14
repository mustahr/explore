<?php

require_once '../conf/connect.php';
$id_cat = $_GET['id_cat'];
$category = $db->query("SELECT * FROM category WHERE id_cat = $id_cat");


$trip = $db->query("SELECT * FROM trip WHERE show_trip = 'y'");

$cat = $db->query("SELECT * FROM category");





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#F0A500">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../block/header_style.css">
    <link rel="stylesheet" href="../../block/footer.css">
    <title>Category - Chose the best trips for you</title>
    <link rel="icon" href="../../block/logo.png">

    <!-- bootstrash -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

    <?php
    // include header
    $logo = '../../block/logo.png';
    $file = '../../block/header.php';
    $index = '../../';
    $trips = '../trips/trips.php';
    $search_url = '..trips-search/search';
    $categories =  'categories.php';
    $contact =  '../contact.php';
    $about = '../about.php';
    $faq = '../faq.php';

    require($file);

    // logo($logo, $index, $trips, $categories, $contact, $about, $faq);

    ?>

    <?php while ($row = $category->fetch_assoc()) { ?>


        <section class="sec1">
            <img  src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['category_image']); ?>" alt="category_image">
            <div class="title">
                <h1>
                    <?php echo $row['category']; ?>
                </h1>
            </div>
        </section>
        
        <section class="sec2">
            <div class="title">
                <?php echo $row['big_title']; ?>
            </div>
            <div class="description">
                <span>Here's how it works :<br></span>
                <p>
                    <?php echo $row['descriptionn']; ?>
                </p>
            </div>
        </section>

        <section class="sec3">
            <div class="video reveal">
                <div class="photo" id="photo"></div>
                <iframe src="<?php echo $row['video_link']; ?>"></iframe>
                <button id="play_viedo" class="myButton">PLAY VIDEO</button>
            </div>
        </section>

        <div class="sec5">
            <div class="title reveal">
                <h1>
                    If you enjoy trying new foods, exploring historical sites,
                    or immersing yourself in different cultures, then a private
                    tour of Morocco is a great choice for you. And the best part
                    is that we can customize your trip to fulfill your travel dreams.
                </h1>
            </div>
        </div>


        <section class="sec4">
            <div class="title reveal">
                <h1>Our
                    <?php echo $row['category']; ?>
                </h1>
            </div>
        </section>
    <?php } ?>

    <!-- ----------------- trips -------------------- -->

    <!-- start of section 1 -->
    <?php
    $i = 0 ;
    while ($row = $trip->fetch_assoc()) {
        // this code will check if the category id is indluded in the trip's category column F
        if (strpos($row['category'], (string)$id_cat) !== false) {


    ?>

            <!-- start of section 1 -->

            <section class="sec_1" id='scroll_<?php echo $i; ?>' style=" background-image: url('data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['trip_front_image']); ?>');
">
                <div class="scroll reveal">
                    <a href="#scroll_<?php $i++ ;echo $i; ?>">
                        <img  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAqklEQVRIie2TPQ6DMAxGuUQR3P8mdCrQhQw9zutABhRSaseJBCiflMk/L47zNU1V1e0FDMAMtBl6tcAbeEqSR1Y5C9xDne/1khQ8gMUXfIA+ARr26FILxfBkqAVuhqbAs0E18CzQmJ2CH+qUMZudYgDFhUR20kynfoV/8J97DWK7nZr3LZh88sc+qWZyQe5F7KSFF4MewYtDN3CRnUrBD+1UGh61U1XVKfQFaTnYYz43COgAAAAASUVORK5CYII=">
                    </a>
                </div>
                <div class="container reserv_info reveal">
                    <div class="form">
                        <div class="title">
                            <?php echo $row['trip_title']; ?>
                        </div>
                        <div class="date">
                            <p>Dates</p>
                            <span class="first_week">
                                <span id="first_week"><?php echo $row['time_start']; ?></span> <i class="status"></i>
                            </span>
                        <?php
                        if (trim($row['time_open']) == 'o') {
                        ?>
                            <span class="second_week">
                                <span id="second_week">to <?php echo $row['time_end']; ?> </span><i class="status"></i>
                            </span>
                        <?php
                        }
                        ?>
                        </div>
                        <div class="activity">
                            <p>Activity</p>
                            <h4><?php echo $row['activity']; ?> </h4>
                            <!-- <p>From <?php // echo $row['price_origine']; ?> pp dbl. occ.</p> -->
                        </div>
                    </div>
                    <a href="../trips/trip.php?trip_id=<?php echo $row['trip_id']; ?>">
                        <div class="button">
                            ABOUT THE TRIP
                        </div>
                    </a>
                </div>
            </section>
    <?php
        }
    } ?>

    <?php
    // include see more trips
    $table = 'category';
    $file_more_tirps = '../../block/more_trips_cat.php';


    include($file_more_tirps);

    echo more_trips_cat($array_id, $array_title);
    ?>

    <?php
    // include footer

    $file = '../../block/footer.php';

    require($file);

    footer($logo, $index, $about, $contact, $faq);
    ?>


    <script src="../js/main.js"></script>
    

    <script>
        $("#play_viedo").click(function() {
            $(".photo").css("display", "none");
            $(this).css("display", "none");
        });
    </script>
</body>

</html>
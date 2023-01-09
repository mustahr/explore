<?php

require_once '../conf/connect.php';
$trip_id = $_GET['trip_id'];
$back = $_GET['back'];
if (isset($_GET['succes'])) {
    $succes = $_GET['succes'];
}

$result = $db->query("SELECT * FROM trip WHERE trip_id = $trip_id");
$review = $db->query("SELECT c.first_name,c.last_name,c.client_func , r.review FROM client c JOIN review r ON c.id_client = r.id_client WHERE r.id_trip = $trip_id LIMIT 2 ");
$includes = $db->query("SELECT * FROM trip_includes WHERE trip_id = $trip_id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="theme-color" content="#F0A500">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../block/header_style.css">
    <link rel="stylesheet" href="../../block/footer.css">
    <title>Explore Morocco - Trip</title>
    <link rel="icon" href="../../block//logo.png">

    <!-- bootstrash -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- https://michalsnik.github.io/aos/ -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- icons.com -->
    <a target="_blank" href="https://icons8.com/icon/ZMS7XMuKStHF/loading-heart"></a>
    
</head>

<body>
    <!--Menu Modal -->


    <?php
    // include header

    $logo = '../../block//logo.png';
    $file = '../../block/header.php';
    $index = '../../';
    $trips = 'trips.php';
    $categories =  '../category/categories.php';
    $contact =  '../contact.php';
    $about = '../about.php';
    $faq = '../faq.php';

    require($file);

    logo($logo, $index, $trips, $categories, $contact, $about, $faq);
    ?>


    <?php if (!empty($succes)) echo
    '<div class="message">
        ' . $succes . '
    </div>';
    ?>

    <?php
    while ($row = $result->fetch_assoc()) { ?>

        <!-- start of section 1 -->

        <section class="sec_1" style=" background-image: url('data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['trip_front_image']); ?>');">
            <div class="scroll">
                <a href="#scroll">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAqklEQVRIie2TPQ6DMAxGuUQR3P8mdCrQhQw9zutABhRSaseJBCiflMk/L47zNU1V1e0FDMAMtBl6tcAbeEqSR1Y5C9xDne/1khQ8gMUXfIA+ARr26FILxfBkqAVuhqbAs0E18CzQmJ2CH+qUMZudYgDFhUR20kynfoV/8J97DWK7nZr3LZh88sc+qWZyQe5F7KSFF4MewYtDN3CRnUrBD+1UGh61U1XVKfQFaTnYYz43COgAAAAASUVORK5CYII=" alt="traveling">
                </a>
            </div>
            <div class="container reserv_info" data-aos="fade-up" data-aos-delay="500">
                <div class="form">
                    <div class="title">
                        <?php echo $row['trip_title']; ?>
                    </div>
                    <div class="date">
                        <p>Started at</p>
                        <span class="first_week">
                            <span id="first_week"><?php echo $row['time_start']; ?></span> <i class="status"></i>
                        </span>
                        <?php
                        if (trim($row['time_open']) == 'o') {
                        ?>
                            <p>End at</p>
                            <span class="second_week">
                                <span id="second_week"><?php echo $row['time_end']; ?> </span><i class="status"></i>
                            </span>
                        <?php
                        }
                        ?>

                    </div>
                    <div class="activity">
                        <p>Activity</p>
                        <h4><?php echo $row['activity']; ?> </h4>
                       <!-- <p>From <span><?php // echo $row['price_origine']; ?>$ </span>pp dbl. occ.</p> -->
                    </div>
                </div>
                <div class="button">
                    RESERVE
                </div>
                <?php if(!isset($back)){ ?>
                <div class="back">
                    <a href="../category/category.php?id_cat=<?php echo trim($row['category']) ?>">
                        BACK TO CATEGORY
                    </a>
                </div>
                <?php } else { ?>
                <div class="back">
                    <a href="../trips/trips.php">
                        BACK TO TRIPS
                    </a>
                </div>    
                <?php }?>
            </div>

            <form action="mail.php?trip_id=<?php echo $trip_id ?>&trip=<?php echo $row['trip_title'] ?>" id="form" method="post">
                <span id="close">
                    <p>x</p>
                </span>
                <p>Reserve your spot</p>
                <div class="input text">
                    <input type="text" placeholder="Phone number" name="phone" id="text" required>
                    <input type="text" placeholder="Email adresse" name="email" id="text" required>
                </div>
                <input type="submit" id="submit" name="submit" value="SUBMIT">
            </form>
        </section>


        <section class="sec_2" id="scroll">
            <div class="first" data-aos="fade-up" data-aos-duration="2000">
                <div class="title">
                    <h1>
                        <?php
                        echo $row['big_title_1']; ?>
                    </h1>
                    <p>
                        <?php echo $row['description_1']; ?>
                    </p>
                </div>
                <div class="img">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_1']); ?>" alt="image_travel">
                    <p><?php echo $row['img_1_caption']; ?></p>
                </div>
            </div>
            <div class="second" data-aos="fade-up">
                <div class="title">
                    <h1>
                        <?php echo $row['big_title_2']; ?>
                    </h1>
                    <p>
                        <?php echo $row['description_2']; ?>
                    </p>
                </div>
                <?php
                while ($indluce = $includes->fetch_assoc()) {
                ?>
                    <div class="include" data-aos="fade-up">
                        <div class="tag">
                            <h3><?php echo $indluce['title_include']; ?></h3>
                        </div>
                        <div class="includes">
                            <ul>
                                <?php
                                if (!empty($indluce['include_1'])) {
                                ?>
                                    <li> <?php echo $indluce['include_1']; ?></li>
                                <?php
                                }
                                ?>
                                <?php
                                if (!empty($indluce['include_2'])) {
                                ?>
                                    <li> <?php echo $indluce['include_2']; ?></li>
                                <?php
                                }
                                ?>
                                <?php
                                if (!empty($indluce['include_3'])) {
                                ?>
                                    <li> <?php echo $indluce['include_3']; ?></li>
                                <?php
                                }
                                ?>
                                <?php
                                if (!empty($indluce['include_4'])) {
                                ?>
                                    <li> <?php echo $indluce['include_4']; ?></li>
                                <?php
                                }
                                ?>
                                <?php
                                if (!empty($indluce['include_5'])) {
                                ?>
                                    <li> <?php echo $indluce['include_5']; ?></li>
                                <?php
                                }
                                ?>
                                <?php
                                if (!empty($indluce['include_6'])) {
                                ?>
                                    <li> <?php echo $indluce['include_6']; ?></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

        </section>

        <section class="sec_3">

            <div class="third" data-aos="fade-up">
                <div class="title">
                    <h1>
                        <?php echo $row['big_title_3']; ?>
                    </h1>
                </div>
                <div class="img">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_2']); ?>" alt="image_travel" >
                    <p><?php echo $row['img_2_caption']; ?></p>
                </div>
                <div class="description" data-aos="fade-up">
                    <p>
                        <?php echo $row['description_3']; ?>
                    </p>
                </div>
            </div>

            <div class="gallery">
                <div class="img" data-aos="fade-up">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_3']); ?>" alt="traveling">
                    <p><?php echo $row['img_3_caption']; ?></p>
                </div>
                <div class="img" data-aos="fade-up">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_4']); ?>"alt="traveling">
                    <p><?php echo $row['img_4_caption']; ?></p>
                </div>
                <div class="img" data-aos="fade-up">
                    <img  src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_5']); ?>" alt="traveling">
                    <p><?php echo $row['img_5_caption']; ?></p>
                </div>
                <div class="img" data-aos="fade-up">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_6']); ?>" alt="traveling">
                    <p><?php echo $row['img_6_caption']; ?></p>
                </div>
            </div>

        </section>
        <?php
        if (mysqli_num_rows($review) != 0) {
        ?>
            <section class="sec_4">
                <?php
                while ($rev = $review->fetch_assoc()) {
                ?>
                    <div class="client_review">

                        <div class="img" data-aos="fade-up">
                            <img src="https://img.freepik.com/free-photo/islamic-woman-portrait-looking-camera_53876-20792.jpg?w=740&t=st=1670531986~exp=1670532586~hmac=e91d2fd8f7c8c42327f1b08d0ac9e7798ca303c6e2163f0066d183f9b317dae8"alt="traveling">
                        </div>

                        <div class="review" data-aos="fade-up">
                            <h3>Client review</h3>
                            <p>
                                <?php echo $rev['review']; ?>
                            </p>
                            <h3 id="client_name"><?php echo $rev['first_name'] . " " . $rev['last_name'] ?> - <p><?php echo $rev['client_func']; ?></p>
                            </h3>
                            <?php
                            ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </section>
        <?php
        }
        ?>
        <section class="sec_5">
            <div class="title" data-aos="fade-up">
                <h1><?php echo $row['trip_title']; ?></h1>
            </div>
            
            <div class="map" data-aos="flip-up">
                <?php echo $row['trip_location']; ?>
            </div>
        </section>
        
        <div class="sec_6">
            <h1 data-aos="fade-up">⚠ Bear in mind that</h1>
            <h4 data-aos="fade-up">
                This trip is only a proposal for an itinerary, if it does not fit your needs, do not hesitate to
                <a href="../contact.php">contact us</a> .
            </h4>
            <h4 data-aos="fade-up">
                We offer customized and tailor-made tours and trips throughout Morocco that are based on your preferences and length of stay. The price of the tour will vary based on the number of people joining,
                with the more people joining resulting in a lower price.
            </h4>
            <h4 data-aos="fade-up">
                Since the transportation payment is fixed, the price will be divided according to the number of people.
            </h4>
            <h4 data-aos="fade-up">
                The price also depends on the quality of the accommodation. Contact us for an exact price.
            </h4>
        </div>

    <?php } ?>


    <?php
    // include see more trips
    $table = 'trip';
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


    <!-- https://michalsnik.github.io/aos/ -->
    <script>
        // for the reserve 
        $(".button").click(function() {
            $(".reserv_info").css("display", "none");
            $("#form").css("display", "flex");
        });

        $("#close").click(function() {
            $("#form").css("display", "none");
            $(".reserv_info").css("display", "flex");
        });

        AOS.init({
            duration: 1100,
        });
    </script>
</body>

</html>
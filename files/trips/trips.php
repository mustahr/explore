<?php

require_once '../conf/connect.php';
$trip = $db->query("SELECT * FROM trip WHERE show_trip = 'y' ORDER BY trip_title");


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
    <title>Explore Morocco - All trips</title>
    <link rel="icon" href="../../block//logo.png">

    <!-- scrolling -->
    <script src="https://cdnjs.com/libraries/fullPage.js"></script>

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
    $trips = 'trips.php' ;
    $categories =  '../category/categories.php' ;
    $contact =  '../contact.php' ;
    $about = '../about.php' ;
    $faq = '../faq.php' ;

    require($file);

    logo($logo,$index,$trips,$categories,$contact,$about,$faq);
    ?>

    <!-- ----------------- trips -------------------- -->

    <!-- start of section 1 -->
    <?php
    $i = 0 ;
    while ($row = $trip->fetch_assoc()) { ?>

        <!-- start of section 1 -->

        <section class="sec_1" id='scroll_<?php echo $i ; ?>' style=" background-image: url('data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['trip_front_image']); ?>');
">
            <div class="scroll">
                <a href="#scroll_<?php $i++ ; echo $i ; ?>" title="see more">
                    <img  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAqklEQVRIie2TPQ6DMAxGuUQR3P8mdCrQhQw9zutABhRSaseJBCiflMk/L47zNU1V1e0FDMAMtBl6tcAbeEqSR1Y5C9xDne/1khQ8gMUXfIA+ARr26FILxfBkqAVuhqbAs0E18CzQmJ2CH+qUMZudYgDFhUR20kynfoV/8J97DWK7nZr3LZh88sc+qWZyQe5F7KSFF4MewYtDN3CRnUrBD+1UGh61U1XVKfQFaTnYYz43COgAAAAASUVORK5CYII=" alt="traveling">
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
                        <!--<p>From <span><?php // echo $row['price_origine']; ?>$</span> pp dbl. occ.</p>-->
                    </div>
                </div>
                <a href="../trips/trip.php?trip_id=<?php echo $row['trip_id']; ?>&back='back'" title ="More infos">
                    <div class="button">
                        ABOUT THE TRIP
                    </div>
                </a>
            </div>
        </section>
    <?php } ?>

    <?php
    // include footer

    $file = '../../block/footer.php';


    require($file);

    footer($logo, $index ,$about ,$contact ,$faq);
    ?>

    <script src="../js/main.js"></script>

    <!-- https://michalsnik.github.io/aos/ -->
    <script>
        AOS.init({
            duration: 1100,
        });
    </script>
</body>

</html>
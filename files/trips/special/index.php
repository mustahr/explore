<?php
require_once '../../conf/connect.php';
$id = $_GET['trip_id'];
$sql = "SELECT * FROM special_trips WHERE id_s_trip = '$id'";
$days = $db->query("SELECT * FROM special_trips_days WHERE id_s_trip = '$id'");
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);
if (isset($_GET['succes'])) {
    $succes = $_GET['succes'];
}

/* The above code is retrieving a string of text from a database column called "5_text" and then
splitting it into five separate strings using the "|" character as a delimiter. The resulting
strings are then assigned to variables 
This part in database have 5 type of text a header and some paragraphs*/
$text = $row["5_text"];
$devided_text = explode("|", $text);
$text_1 = $devided_text[0];
$text_2 = $devided_text[1];
$text_3 = $devided_text[2];
$text_4 = $devided_text[3];
$text_5 = $devided_text[4];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="theme-color" content="#F0A500">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Special.css">
    <!-- <link rel="stylesheet" href="../style.css"> -->
    <link rel="stylesheet" href="../../../block/header_style.css">
    <link rel="stylesheet" href="../../../block/footer.css">
    <title>Explore Morocco - Trip</title>
    <link rel="icon" href="../../../block/logo.png">
    <!-- Font awsome -->
    <script src="https://kit.fontawesome.com/8ec1398eb3.js" crossorigin="anonymous"></script>

    <!-- bootstrash -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- icons.com -->
    <a target="_blank" href="https://icons8.com/icon/ZMS7XMuKStHF/loading-heart"></a>

</head>

<body>
    <?php
    // include header

    $logo = '../../../block//logo.png';
    $file = '../../../block/header.php';
    $index = '../../../';
    $trips = '../trips.php';
    $search_url = '../../trips-search/search';
    $categories =  '../../category/categories.php';
    $contact =  '../../contact.php';
    $about = '../../about.php';
    $faq = '../../faq.php';

    require($file);

    // logo($logo, $index, $trips, $categories, $contact, $about, $faq);
    ?>

    <?php if (!empty($succes)) echo
    '<div class="message">
        ' . $succes . '
    </div>';
    ?>


    <section class="sec-1" id="sec-1">
        <div class="img1" style="background-image:url('data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['small_cover_img']); ?>');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;">
        </div>
        <div class="img2" style="background-image:url('data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['big_cover_img']); ?>');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;">
        </div>
        <div class="title">
            <p>
                <?php
                echo $text_1
                ?>
            </p>
            <h1>
                <?php echo $text_2 ?>
            </h1>
            <span>
                <?php echo $text_3 ?>
            </span>
            <span>
                <?php echo $text_4 ?>
            </span>
        </div>
    </section>
    <section class="sec-2">
        <div class="description ">
            <?php $devided_text_5 = explode(".", $text_5); ?>
            <h1>
                <?php echo $devided_text_5[0] ?> .
            </h1>
            <h1>
                &nbsp;<?php echo $devided_text_5[1] ?>
            </h1>
        </div>
        <div class="slider-container">
            <div class="img img-1 ">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_1']); ?>" class="image" alt="<?php echo $row['img_1_caption']; ?><" data-image-src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_1']); ?>" data-image-caption="<?php echo $row['img_1_caption']; ?>">
                <p><?php echo $row['img_1_caption']; ?></p>
            </div>
            <div class="img img-2 ">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_2']); ?>" class="image" alt="<?php echo $row['img_2_caption']; ?><" data-image-src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_2']); ?>" data-image-caption="<?php echo $row['img_2_caption']; ?>">
                <p><?php echo $row['img_2_caption']; ?></p>
            </div>
            <div class="img img-3 ">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_3']); ?>" class="image" alt="<?php echo $row['img_3_caption']; ?><" data-image-src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_3']); ?>" data-image-caption="<?php echo $row['img_3_caption']; ?>">
                <p><?php echo $row['img_3_caption']; ?></p>
            </div>
        </div>
    </section>

    <?php

    ?>
    <section class="sec-3">
        <ul class="qa">
            <?php
            while ($d = $days->fetch_assoc()) {
                $day_description = explode(":", $d['day']);
                $conetnt_break = explode(".", $d['day_content']);
            ?>

                <!-- q -->
                <li class="li ">
                    <a href="javascript:;" class="question">
                        <h1> <?php echo  $day_description[0]; ?></h1>
                        <h2><?php echo  $day_description[1]; ?> <i class="fa fa-angle-right" aria-hidden="true"></i></h2>
                    </a>
                    <div class="answer slider-container">
                        <div class="img">
                            <?php if ($d['img_1']) { ?>
                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($d['img_1']); ?>" class="image" alt="Traveling" data-image-src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($d['img_1']); ?>" data-image-caption="<?php echo  $day_description[0]; ?>">
                            <?php } ?>
                            <?php if ($d['img_2']) { ?>
                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($d['img_2']); ?>" class="image" alt="Traveling" data-image-src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($d['img_2']); ?>" data-image-caption="<?php echo  $day_description[0]; ?>">
                            <?php } ?>

                        </div>
                        <p>
                            <?php
                            foreach ($conetnt_break as $c) {
                                echo $c . '.';
                                echo '<br>';
                            }
                            ?>
                        </p>
                    </div>
                </li>
            <?php } ?>
            <!-- q -->
        </ul>
    </section>

    <section class="sec-4">
        <div class="outer ">
            <div class="img">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['location_img']); ?>" alt="">
            </div>
            <div class="inner-content">
                <a href="<?php echo $row['location_url']; ?>" target="_blank" class="first">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        <path d="M50 1a34.31 34.31 0 00-34.3 34.3C15.7 61 50 99 50 99s34.3-38 34.3-63.7A34.31 34.31 0 0050 1zm0 46.55A12.25 12.25 0 1162.25 35.3 12.25 12.25 0 0150 47.55z" fill="currentColor"></path>
                    </svg>
                    <h2>Get directions</h2>
                </a>
                <a href="<?php echo $row['location_url']; ?>" target="_blank" class="adress">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="cmp-icon__image">
                        <path d="M50 99a5.86 5.86 0 01-5.13-3L20.55 51.49A34.13 34.13 0 0121 17.77 33.26 33.26 0 0149.24 1h1.51A33.24 33.24 0 0179 17.77a34.13 34.13 0 01.45 33.72L55.18 96a5.86 5.86 0 01-5.13 3zm0-91.88h-.6a27.19 27.19 0 00-23.09 13.72A28.06 28.06 0 0026 48.55l24 44.08 24.11-44.08a28.06 28.06 0 00-.36-27.71 27.22 27.22 0 00-23.1-13.72z" fill="currentColor"></path>
                        <path d="M50 45.4a13.78 13.78 0 1113.8-13.78A13.78 13.78 0 0150 45.4zM50 24a7.65 7.65 0 107.65 7.65A7.65 7.65 0 0050 24z" fill="currentColor"></path>
                    </svg>
                    <h2><?php echo $row['location']; ?></h2>
                </a>
                <a href="tel:+212608731353" class="adress">
                    <svg id="phone" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve" class="cmp-icon__image">
                        <g transform="translate(-83.5)">
                            <circle fill="currentColor" cx="133.5" cy="8.2" r="1.1"></circle>
                            <path fill="currentColor" d="M159.3 1h-51.7c-4 0-7.2 3.2-7.2 7.2v83.6c0 4 3.2 7.2 7.2 7.2h51.7c4 0 7.2-3.2 7.2-7.2V8.2c0-4-3.2-7.2-7.2-7.2zm4.3 90.8c0 2.4-1.9 4.3-4.3 4.3h-51.7c-2.4 0-4.3-1.9-4.3-4.3V8.2c0-2.4 1.9-4.3 4.3-4.3h51.7c2.4 0 4.3 1.9 4.3 4.3v83.6z"></path>
                            <path fill="currentColor" d="M139.2 84.6h-11.5c-2.4 0-4.3 1.9-4.3 4.3s1.9 4.3 4.3 4.3h11.5c2.4 0 4.3-1.9 4.3-4.3 0-2.3-1.9-4.3-4.3-4.3zm0 5.8h-11.5c-.8 0-1.4-.6-1.4-1.4 0-.8.6-1.4 1.4-1.4h11.5c.8 0 1.4.6 1.4 1.4.1.7-.6 1.4-1.4 1.4zM159.3 6.7h-17.7c-.4 0-.7.2-1 .4l-4.1 4.1c-1.7 1.7-4.4 1.7-6.1 0l-4.1-4.1c-.3-.3-.6-.4-1-.4h-17.7c-.8 0-1.4.6-1.4 1.4v33.2c0 .8.6 1.4 1.4 1.4s1.4-.6 1.4-1.4V9.6h15.7l3.6 3.6c2.8 2.8 7.3 2.8 10.1 0l3.6-3.6h15.7v69.3h-48.8V47.1c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v33.2c0 .8.6 1.4 1.4 1.4h51.7c.8 0 1.4-.6 1.4-1.4V8.2c.1-.8-.5-1.5-1.3-1.5z"></path>
                        </g>
                    </svg>
                    <h2>+212 524 857</h2>
                </a>
            </div>
        </div>
    </section>


    <section class="sec_6">
        <h1 class="">⚠ Bear in mind that</h1>
        <h4 class="">
            This trip is only a proposal for an itinerary, if it does not fit your needs, do not hesitate to
            <a href="../../contact">contact us</a> .
        </h4>
        <h4 class="">
            We offer customized and tailor-made tours and trips throughout Morocco that are based on your preferences and length of stay. The price of the tour will vary based on the number of people joining,
            with the more people joining resulting in a lower price.
        </h4>
        <h4 class="">
            Since the transportation payment is fixed, the price will be divided according to the number of people.
        </h4>
        <h4 class="">
            The price also depends on the quality of the accommodation. Contact us for an exact price.
        </h4>
    </section>


    <!-- Other trips -->
    <?php
    $special = $db->query("SELECT id_s_trip,thumb_img,title,trip_days FROM special_trips WHERE id_s_trip <> '$id'");
    ?>
    <section class="sec-7">
        <div class="title ">
            <h5>
                You may like
            </h5>
            <!-- <hr> -->
        </div>
        <div class="inner-card ">
            <?php
            while ($s = $special->fetch_assoc()) { ?>
                <!-- Start card -->
                <a href="./?trip_id=<?php echo $s['id_s_trip']; ?>">
                    <div class="card">
                        <div class="image">
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($s['thumb_img']); ?>" alt="Traveling">
                        </div>
                        <div class="effect">
                            <!-- <img src="./files/images/camle.png" alt="Traveling"> -->
                        </div>
                        <div class="content">
                            <div class="text">
                                <div class="distenation">
                                    <?php echo $s['title']; ?>
                                </div>
                                <p>
                                    <?php echo $s['trip_days']; ?> days trip
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End card -->
            <?php } ?>
        </div>
    </section>


    <!-- Reservation Form -->
    <div class="aside-2" id="aside-2">
        <form action="../mail.php?trip_id=<?php echo $id ?>&trip=<?php echo $row['trip_title'] ?>&ref=special_trip" id="form" method="post">
            <p>Reserve your spot now <i class="fa fa-angle-right" aria-hidden="true"></i></p>
            <div class="input text">
                <input type="text" placeholder="Phone number" name="phone" id="text" required>
                <input type="text" placeholder="Email adresse" name="email" id="text" required>
                <input type="submit" id="submit" name="submit" value="SUBMIT">
            </div>
        </form>
    </div>


    <!-- Photos sectin -->
    <div class="slide">
        <div id="zoomed-in-modal">
            <img id="zoomed-in-image" src="" alt="">
            <p id="zoomed-in-caption"></p>
            <p id="zoomed-in-order"></p>
            <div class="btn-1">
                <button id="btn-prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </button>
            </div>
            <div class="btn-2">
                <button id="btn-next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </button>
            </div>
            <div class="btn-3">
                <button id="btn-close">
                    <i class="fa-solid fa-close"></i>
                </button>
            </div>
        </div>
    </div>
    <?php
    // include footer

    $file = '../../../block/footer.php';


    require($file);

    footer($logo, $index, $about, $contact, $faq);
    ?>


    <script src="./../../js/main.js"></script>
    <script>
        // Zooming photos
        $(document).ready(function() {
            var currentImageIndex = 0; // keep track of current image index
            let imageOrder = 1;
            $('.slider-container .img img').click(function() {
                currentImageIndex = $('.slider-container .img img').index(this); // update current image index
                showZoomedInModal(currentImageIndex);
            });

            $('#btn-close').on('click', function() {
                hideZoomedInModal();
            });

            $('#btn-next').on('click', function() {
                currentImageIndex++;
                if (currentImageIndex >= $('.slider-container .img img').length) {
                    currentImageIndex = 0; // wrap around to first image
                }
                showZoomedInModal(currentImageIndex);
            });

            $('#btn-prev').on('click', function() {
                console.log('prev button is clicked');
                currentImageIndex--;
                if (currentImageIndex < 0) {
                    currentImageIndex = $('.slider-container .img img').length - 1; // wrap around to last image
                }
                showZoomedInModal(currentImageIndex);
            });

            function showZoomedInModal(index) {
                var imageSrc = $('.slider-container .img img').eq(index).data('image-src');
                var imageCaption = $('.slider-container .img img').eq(index).data('image-caption');
                $('#zoomed-in-image').attr('src', imageSrc);
                $('#zoomed-in-caption').text(imageCaption);
                $('#zoomed-in-order').text((index + 1) + ' / ' + $('.slider-container .img img').length); // update image order
                $('.slide').show();
                $('.slide').addClass('active-modal');
                $('#btn-close').addClass('button-active');
                $('#btn-next').addClass('button-active');
                $('#btn-prev').addClass('button-active');
                $('#zoomed-in-caption').addClass('button-active');
                $('#zoomed-in-order').addClass('button-active');
                $(imageOrder).eq(index);
            }

            function hideZoomedInModal() {
                $('.slide').hide();
                $('.slide').removeClass('active-modal');

            }
        });

        // bottom + 100px after scrolling to the next section 
        window.addEventListener('scroll', function() {
            var myElement = document.getElementById('aside-2');
            var scrollPosition = window.scrollY || window.pageYOffset;

            if (scrollPosition >= 120) {
                myElement.classList.add('aside-2-active');
            } else {
                myElement.classList.remove('aside-2-active');
            }
        });

        //// Reserve section

        $(document).ready(function() {
            // Add click event listener to the div with id "myDiv"
            $(".aside-2 form p").on("click", function(event) {
                // Toggle the class "aside-2" on the clicked div
                $('.aside-2').toggleClass("reserve");
                // Rotate the arrow icon 
                $('.aside-2 form p i').toggleClass("icon");
                // Prevent the click event from bubbling up to the document
                event.stopPropagation();
            });

        });

        //// Days content
        $('ul.qa li a.question').click(function() {
            var iconElement = $(this).find('i:first');
            iconElement.toggleClass('icon-2');
            $(this).toggleClass('active').siblings('.answer').stop().slideToggle(function() {
                $(this).toggleClass('active');
                // $('.sec-3 ul.qa li a.question h2 i').toggleClass("icon-2");
            });
        });
    </script>
</body>

</html>
<?php
require_once './files/conf/connect.php';
$result = $db->query("SELECT * FROM category");
$trip = $db->query("SELECT * FROM trip WHERE last_destination = 'y' and show_trip ='y' LIMIT 4");
$post = $db->query("SELECT * FROM insta_post LIMIT 6");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta
    name="description"
    content="traveling
            ,travelers
            ,travelbug
            ,travelholic
            ,travelgram
            ,travelinggram
            ,travelphotography
            ,exploring
            ,explorer
            ,wanderer
            ,wanderlust
            ,doyoutravel
            ,goexplore
            ,travelmore
            ,lovetotravel
            ,wonderfulplaces
            ,oamtheplanet
            ,travellifestyle
            ,solotravels
            ,solotraveldiaries
            ,solotravelstories
            ,nomadiclife
            ,womenwhoexplore
            ,womenwhotravel
            ,travelingladies
            ,familytravels
            ,travelingwithkids
            ,familytravelmoment
            ,best travel
            ,best travel agents
            ,best travel websites
            ,best travel agency
            ,best travel daypack
            ,best cheap travel places
            ,best travel nursing companies
            ,best travel companies
            ,best travel sites for flights
            ,best travel destinations in january
            ,best travel locations	
            ,the best travel websites
            ,travel agency
            ,travel sites">
    <!-- for google -->
    <meta name="google-site-verification" content="rgdv50XmEoPIfMHGBWE96SNcNqo_UdQcsYljL9jLRxA" />
    <!-- for google -->
    <meta name="theme-color" content="#F0A500">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./files/css/style.css">
    <link rel="stylesheet" href="./block/header_style.css">
    <link rel="stylesheet" href="./block/footer.css">
    <title>Eplore Morroco - where travelers meet</title>
    <link rel="icon" href="./block/logo.png">

    <!-- font family  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">

    <!-- bootstrash -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- https://michalsnik.github.io/aos/ -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- icons.com -->
    <a target="_blank" href="https://icons8.com/icon/ZMS7XMuKStHF/loading-heart"></a>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />


    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="img/favicon.svg" />

    <!-- Normalize CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <meta name="color-shema" content="dark">

</head>

<body>
    <?php
    // include header

    $logo = 'block/logo.png';
    $file = 'block/header.php';
    $index = '#';
    $trips = './files/trips/trips.php';
    $categories =  './files/category/categories.php';
    $contact =  './files/contact.php';
    $about = './files/about.php';
    $faq = 'files/faq.php';

    require($file);

    logo($logo, $index, $trips, $categories, $contact, $about, $faq);
    ?>

    <!-- section 1 -->

    <div class="sec-1">
        <div class="title" >
            <h1>THE ULTIMATE <span>TRAVEL</span> FOR THOSE WHO <p><span>WANT</span> IT ALL</p> </h1>
            <h3>
                Destinations, routes and advices for travelers
            </h3>
        </div>
    </div>

    <section class="sec-0">
        <div class="title" data-aos="fade-up">
            <h1> Creating positive change through the joy of travel</h1>
        </div>
        <div class="subtitle" data-aos="fade-up">
            <p>WAYS TO TRAVEL</p>
        </div>
        <div class="swiper mySwiper" data-aos="fade-up">
            <div class="swiper-wrapper">
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <div class="swiper-slide">
                        <!-- it tooks to the categories -->
                        <a href="./files/category/category.php?id_cat=<?php echo $row['id_cat']; ?>">
                            <div class="product-card">
                                <div class="product-card__images">
                                    <div class="product-card__img">
                                        <img class="img-1" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['category_image_thumbnail']); ?>"  alt="traveling"/>
                                    </div>
                                </div>  
                                <div class="product-card__info">
                                    <h3 class="product-card__name"><?php echo $row['category']; ?> </h3>

                                    <div class="product-card__price">
                                        <span>Started at <?php echo $row['first_price'].'$'; ?></span>
                                    </div>
                                    <div class="product-card__stars">

                                        <?php for ($i = 0; $i < $row['stars']; $i++) { ?>
                                            <i class="fas fa-star"></i>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
                <div class="swiper-slide last-slide">
                    <a href="./files/category/categories.php">
                        <div class="product-card__info">
                            <h3 class="product-card__name">View more <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </h3>
                        </div>
                    </a>
                </div>
            </div>
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
        </div>
    </section>

    <!-- section 2 -->
    <div class="sec-2">
        <div class="title" data-aos="fade-up">
            <h5>
                LAST DESTINTAIONS
            </h5>
            <hr>
        </div>
        <div class="container">
            <?php
            while ($tr = $trip->fetch_assoc()) {
            ?>
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <a href="files/trips/trip.php?trip_id=<?php echo $tr['trip_id']; ?>">
                        <div class="img">
                            <img id="img" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($tr['trip_front_image']); ?>" alt="traveling">
                            <div class="share">
                                <p><?php echo $tr['trip_title']; ?></p>
                            </div>
                        </div>
                        <div class="content">
                            <?php echo $tr['big_title_1']; ?>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="see-more">
            <a href="files/trips/trips.php">SEE MORE</a>
            <hr>
        </div>
    </div>

    <!-- section 3 -->

    <div class="sec-3">
        <div class="big_cap" data-aos="fade-right" data-aos-anchor-placement="center-center">
            THERE IS A HUGE WORLD. <br>
            <span> COME DISCOVER IT WITH US</span>
        </div>
        <div class="small_cap" data-aos="fade-right" data-aos-anchor-placement="center-center">
            <span>Morrocan Explorers</span> is available to curate your next active adventure in locales close to home
            and around the world. Your dates. Your instructors. The challenge is yours.
            For more information or to book your private adventure please email <span>explore@equinox.com</span> <i>and
                one of our travel consultants will customize a journey tailored to you.</i>
        </div>
    </div>

    <!-- seciton 4 -->

    <div class="sec-4">
        <div class="title" data-aos="fade-up">
            <h5>
                LAST INSTA POSTS
            </h5>
            <hr>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="wrapper">
                <div class="images">
                    <?php
                    while ($ps = $post->fetch_assoc()) {
                    ?> <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($ps['post']); ?>" data-aos-delay="1000" alt="traveling">
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="see-more">
            <a href="https://www.instagram.com/moroccan_explorers/" target="_blank" rel="noopener noreferrer">SEE MORE</a>
            <hr>
        </div>
    </div>


    <?php
    // include footer

    $file = 'block/footer.php';

    require($file);
    footer($logo, $index, $about, $contact, $faq);
    ?>

    <script src="./files/js/main.js"></script>

    <!-- https://michalsnik.github.io/aos/ -->
    <script>
        AOS.init({
            duration: 1100,
        });
    </script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        const swiper = new Swiper('.swiper', {
            // Default parameters
            slidesPerView: 4,
            spaceBetween: 10,
            freeMode: {
                enabled: true,
                sticky: true,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 4,
                    spaceBetween: 40
                }
            }

        });
        </script>

</body>

</html>
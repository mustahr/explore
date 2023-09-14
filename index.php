<?php
require_once './files/conf/connect.php';
$result  = $db->query("SELECT id_cat,stars,category,category_image_thumbnail FROM category WHERE id_cat <> 28");
$post    = $db->query("SELECT * FROM insta_post LIMIT 6");
$special = $db->query("SELECT id_s_trip,thumb_img,title,trip_days FROM special_trips");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Discover your next adventure with our wide selection of trips and tours. Browse our curated collection and book your next adventure today! visit morocco">

    <meta name="keywords" content="traveling
            ,travelers
            ,visit morocco
            ,travel bug
            ,travel holic
            ,travel gram
            ,traveling gram
            ,travel photography
            ,exploring
            ,explorer
            ,wanderer
            ,wanderlust
            ,do you travel
            ,go explore
            ,travel more
            ,love to travel
            ,wonderful places
            ,oam the planet
            ,travel life style
            ,solo travels
            ,solo travel diaries
            ,solo travel stories
            ,nomadiclife
            ,women who explore
            ,women who travel
            ,traveling ladies
            ,family travels
            ,traveling with kids
            ,family travel moment
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
    <link rel="stylesheet" href="./block/more_trips_cat.css">
    <title>Explore Morocco - where travelers meet</title>
    <link rel="icon" href="./block/logo.png">

    <!-- font family  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">

    <!-- bootstrash -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="img/favicon.svg" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <meta name="color-shema" content="dark">

    <link href="https://fonts.googleapis.com/css?family=Akronim" rel="stylesheet">


</head>

<body>

    <!-- Loading animation -->
    <!--<div class="loading-animation">-->
    <!--    <img src="block/logo.png" alt="Logo">-->
    <!--</div>-->
    <?php
    // include header

    $logo = 'block/logo.png';
    $file = 'block/header.php';
    $index = '#';
    $trips = './files/trips/trips';
    $search_url = './files/trips-search/search';
    $categories =  './files/category/categories';
    $contact =  './files/contact';
    $about = './files/about';
    $faq = 'files/faq';

    require($file);

    // logo($logo, $index, $trips, $categories, $contact, $about, $faq);
    ?>

    <!-- section 1 -->

    <div class="sec-1">
        <div class="title" id="my_text">
            <h1>
                Sights, flavor, and culture in Morocco
            </h1>
            <h3>
                Travel with atittude
            </h3>
        </div>
        <div class="img image_anime" id="my_image">
            <img src="./files/images/header.jpg" alt="Ouarzazate ait ben haddou">
            <!-- <img src="https://www.wildtraveldmc.com/wp-content/uploads/2023/02/Capture-decran-2023-02-22-a-14.44.24-1536x940.jpg" alt=""> -->
        </div>
        <div class="img" id="my_image">
            <!-- <img src="./files/images/Ouarzazte.jpeg" alt="Ouarzazate ait ben haddou"> -->
            <img src="https://www.wildtraveldmc.com/wp-content/uploads/2023/02/Capture-decran-2023-02-22-a-14.44.24-1536x940.jpg" alt="">
        </div>
        <div class="img" id="my_image">
            <img src="./files/images/Ouarzazte.jpeg" alt="Ouarzazate ait ben haddou">
            <!-- <img src="https://www.wildtraveldmc.com/wp-content/uploads/2023/02/Capture-decran-2023-02-22-a-14.44.24-1536x940.jpg" alt=""> -->
        </div>
    </div>


    <!-- The trending trips -->
    <div class="trending ">
        <div class="title  ">
            <h5>
                Top Destinations
            </h5>
            <!-- <hr> -->
        </div>
        <div class="inner-card  ">
            <?php
            while ($s = $special->fetch_assoc()) { ?>
                <!-- Start card -->
                <a target="_blank" href="./files/trips/special?trip_id=<?php echo $s['id_s_trip']; ?>">
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
    </div>

    <!-- Best offers section -->
    <div class="offers-section ">
        <div class="title  ">
            <h1>
                <!-- Creating positive change through the joy of travel -->
                Exotic Getaways
            </h1>
        </div>
        <main class="offers  ">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="card-offer">
                    <div class="before" style="background-image: url(data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['category_image_thumbnail']); ?>)"></div>
                    <div class="content-offer">
                        <h2 class="title-offer"><?php echo $row['category']; ?> </h2>
                        <div class="product-card__stars">
                            <?php for ($i = 0; $i < $row['stars']; $i++) { ?>
                                <i class="fas fa-star"></i>
                            <?php } ?>
                        </div>
                        <a target="_blank" href="./files/category/category?id_cat=<?php echo $row['id_cat']; ?>">
                            <button class="btn-offer">
                                View Trip
                            </button>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </main>
    </div>

    <!-- section 2 -->

    <!-- section 3 -->

    <div class="sec-3">
        <div class="big_cap  ">
            THERE IS A HUGE WORLD. <br>
            <span> COME DISCOVER IT WITH US</span>
        </div>
        <div class="small_cap  ">
            <span>Morrocan Explorers</span> is available to curate your next active adventure in locales close to home
            and around the world. Your dates. Your instructors. The challenge is yours.
            For more information or to book your private adventure please <span><a href="files/contact">contact us</a></span> <i>and
                one of our travel consultants will customize a journey tailored to you.</i>
        </div>
    </div>

    <!-- seciton 4 why chosing us -->

    <div class="sec-4">
        <div class="title  ">
            <h5>
                Why choose us
            </h5>
        </div>
        <div class="outer-card  ">
            <!-- 1 -->
            <div class="inner-card">
                <div class="svg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Calque_1" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #F0A500;
                            }
                        </style>
                        <g>
                            <path class="st0" d="M47.4,24.4c-0.3,0.4-0.7,0.5-1.2,0.5c-2-0.1-3.9,0-5.8,0.6c-3.8,1.2-6.3,3.7-7.7,7.4c-0.7,2-1,4.1-1,6.2  c0,0.3,0,0.6,0,0.8c0,0.5-0.4,0.8-0.8,0.7c-0.4,0-0.7-0.3-0.8-0.8c-0.1-1,0-2-0.2-3.1c-0.3-2.4-1-4.7-2.3-6.7  c0-0.1-0.1-0.1-0.1-0.2c-0.2-0.4-0.1-0.7,0.2-0.9c0.3-0.2,0.7-0.1,0.9,0.2c0.5,0.9,1,1.8,1.5,2.7c0.4,0.8,0.6,1.6,0.9,2.5  c1.3-5.2,4.4-8.8,9.8-10.3c-5.4-1.5-8.4-5.1-9.8-10.4c-1.4,5.3-4.4,8.9-9.7,10.4c0.6,0.2,1.3,0.4,1.8,0.6c1.1,0.6,2.1,1.2,3.1,1.8  c0.5,0.3,0.6,0.7,0.4,1.1c-0.2,0.4-0.6,0.3-1.2,0c-0.8-0.5-1.6-1.1-2.5-1.5c-2.1-1-4.3-1.2-6.6-1.2c-0.3,0-0.6,0-0.9,0  c-0.6,0-0.9-0.3-0.9-0.8c0-0.5,0.3-0.8,0.9-0.8c1.2,0,2.4,0,3.6-0.1c5-0.5,8.7-3.3,10.4-8.2c0.7-1.9,0.9-3.8,0.9-5.8  c0-0.3,0-0.6,0-0.8c0-0.5,0.4-0.8,0.8-0.8c0.4,0,0.7,0.3,0.8,0.8c0,0.9,0,1.7,0.1,2.6c0.2,2.5,0.9,4.8,2.2,7c1.7,2.7,4.3,4.3,7.4,5  c1.6,0.4,3.3,0.4,5,0.4c0.5,0,0.9,0.1,1.1,0.6C47.4,24,47.4,24.2,47.4,24.4z"></path>
                            <path class="st0" d="M13.1,13.2c-1.4-0.7-2.4-1.7-3-3.2c-0.6,1.4-1.6,2.5-3.1,3.2c1.4,0.7,2.4,1.8,3,3.2c0.1-0.2,0.2-0.3,0.2-0.4  c0.2-0.4,0.5-0.5,0.9-0.3c0.3,0.2,0.4,0.5,0.3,0.9c-0.2,0.7-0.4,1.4-0.6,2.1c-0.1,0.4-0.1,0.8-0.1,1.3c0,0.5-0.3,0.8-0.7,0.8  c-0.4,0-0.7-0.3-0.7-0.8c0-1.1-0.1-2.2-0.6-3.2C8,15,6.6,14.2,4.9,14c-0.5-0.1-1-0.1-1.5-0.1c-0.5,0-0.8-0.3-0.8-0.7  c0-0.4,0.3-0.7,0.8-0.7c0.9-0.1,1.8-0.1,2.6-0.3c2-0.6,3-2.2,3.3-4.1c0.1-0.5,0.1-0.9,0.1-1.4C9.4,6,9.6,5.7,10,5.7  c0.5,0,0.7,0.3,0.7,0.9c0,1.2,0.2,2.3,0.8,3.4c0.9,1.7,2.4,2.3,4.2,2.5c0.3,0,0.7,0,1,0c0.5,0,0.8,0.3,0.8,0.7  c0,0.4-0.3,0.7-0.8,0.7c-0.9,0.1-1.8,0.2-2.6,0.3c-0.2,0-0.4,0.2-0.6,0.3c-0.5,0.2-0.9,0.1-1-0.2c-0.2-0.4,0-0.7,0.4-1  C12.9,13.3,13,13.2,13.1,13.2z"></path>
                            <path class="st0" d="M17.6,40c0.6-1.5,1.6-2.5,3-3.2c-0.2-0.1-0.3-0.1-0.4-0.2c-0.3-0.2-0.4-0.6-0.3-0.9c0.1-0.3,0.5-0.4,0.9-0.3  c0.5,0.2,0.9,0.4,1.4,0.5c0.7,0.1,1.3,0.1,2,0.2c0.5,0,0.8,0.3,0.8,0.7c0,0.4-0.3,0.7-0.8,0.7c-0.9,0.1-1.8,0.1-2.6,0.3  c-1.9,0.6-2.9,2.1-3.2,3.9c-0.1,0.6-0.1,1.2-0.2,1.7c0,0.5-0.3,0.7-0.7,0.7c-0.4,0-0.7-0.3-0.7-0.7c0-1.1-0.2-2.3-0.7-3.3  c-0.7-1.6-2-2.3-3.6-2.6c-0.5-0.1-1.1-0.1-1.7-0.1c-0.5,0-0.8-0.3-0.8-0.7c0-0.4,0.3-0.6,0.8-0.7c0.8-0.1,1.7-0.1,2.5-0.3  c1.9-0.5,2.9-2,3.3-3.9c0.1-0.6,0.1-1.2,0.2-1.8c0-0.5,0.3-0.8,0.7-0.8c0.4,0,0.7,0.3,0.7,0.8c0,1.1,0.2,2.2,0.7,3.3  c0.2,0.5,0.1,0.8-0.3,1c-0.4,0.2-0.7,0-0.9-0.5c0-0.1-0.1-0.2-0.2-0.3c-0.7,1.4-1.6,2.5-3.1,3.2C16,37.5,17,38.6,17.6,40z"></path>
                        </g>
                    </svg>
                </div>
                <h1>Tailored Experiences</h1>
                <p>
                    We believe in personalized travel experiences that cater to your unique interests and preferences. Our itineraries are fully customizable, allowing you to choose the destinations, activities, and pace that suit you best. Whether you're an adventure seeker, a culture enthusiast, or a food lover, we'll design a trip that reflects your passions.
                </p>
            </div>
            <!-- 2 -->
            <div class="inner-card">
                <div class="svg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Calque_1" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #F0A500;
                            }
                        </style>
                        <g>
                            <path class="st0" d="M48.2,45.2c-0.3,0.4-0.7,0.5-1.2,0.4c-0.9-0.2-1.7-0.3-2.6-0.5c-0.3-0.1-0.5,0-0.7,0.2c-0.5,0.5-1,1-1.5,1.6  c-0.6,0.6-1.2,0.4-1.4-0.4c-0.4-1.6-0.9-3.1-1.3-4.7c0-0.2-0.1-0.3-0.2-0.5c-0.3,0.9-0.5,1.9-0.8,2.8c-0.2,0.8-0.4,1.6-0.6,2.3  c-0.2,0.8-0.8,1-1.4,0.4c-0.5-0.5-1-1-1.6-1.5c-0.1-0.1-0.4-0.2-0.6-0.2c-0.9,0.2-1.9,0.4-2.8,0.6c-0.8,0.2-1.2-0.3-0.9-1.1  c0.1-0.4,0.2-0.7,0.4-1.1c-0.2,0-0.4,0-0.6,0c-9,0-18.1,0-27.1,0c-1,0-1.2-0.2-1.2-1.1c0-2.9,0-5.9,0-8.8c0-1.6,0.7-2.8,2.2-3.6  c3.4-1.8,6.7-3.6,10.1-5.4c0.3-0.2,0.5-0.3,0.4-0.7c0-0.7,0-1.4,0-2.1c0-0.2-0.1-0.4-0.3-0.5c-1.8-1.4-2.7-3.3-2.7-5.6  c0-0.2,0-0.5,0-0.7c0-1.9,0-3.7-0.6-5.6c-0.3-0.8-0.3-1.8-0.1-2.7c0.3-2.3,2.4-3.6,4.7-3.1c0.2,0,0.4,0,0.6-0.1  c2.1-1.7,6.2-1.8,8.5,0.5c0.4,0.4,0.9,0.7,1.3,1c0.8,0.5,1.6,0.6,2.5,0.4c0.7-0.1,1.1,0.3,0.9,1c-0.5,1.8-1.3,3.4-2.7,4.8  c-0.1,0.1-0.2,0.4-0.2,0.6c0,1.3,0,2.6,0,4c0,2.3-0.9,4.1-2.7,5.5c-0.1,0.1-0.3,0.3-0.3,0.5c0,0.8,0,1.5,0,2.3  c0,0.1,0.1,0.4,0.2,0.4c2.1,1.2,4.3,2.4,6.5,3.5c0.1,0,0.1,0,0.2,0.1c0.1-0.3,0.1-0.5,0.2-0.7c1.2-4,5.1-6.6,9.2-6.3  c4.3,0.4,7.7,3.5,8.2,7.7c0,0.1,0.1,0.2,0.1,0.4c0,0.6,0,1.1,0,1.7c0,0.1-0.1,0.2-0.1,0.3c-0.3,2-1.1,3.7-2.5,5.2  c-0.2,0.2-0.3,0.4-0.2,0.7c0.9,2.4,1.7,4.8,2.6,7.3c0,0.1,0.1,0.2,0.2,0.4C48.2,44.8,48.2,45,48.2,45.2z M7.8,41.9  c0-0.2,0-0.3,0-0.4c0-1.1,0-2.2,0-3.3c0-0.5,0.3-0.8,0.8-0.8c0.4,0,0.7,0.3,0.7,0.8c0,0.2,0,0.3,0,0.5c0,1.1,0,2.1,0,3.2  c2,0,4,0,6,0c0-1.6,0.1-3.2,0-4.8c-0.1-1.5,0.2-2.7,1.2-3.8c0.1-0.1,0.1-0.1,0.1-0.2c0-0.1,0.1-0.2,0-0.3c-0.1-0.3-0.3-0.6-0.4-0.9  c-0.3,0.3-0.6,0.5-0.9,0.7c-0.6,0.5-1,0.5-1.5-0.3c-0.8-1.4-1.6-2.8-2.4-4.2c-0.1-0.1-0.2-0.3-0.2-0.4c-2.2,1.2-4.3,2.3-6.4,3.4  c-1,0.5-1.4,1.3-1.4,2.3c0,2.6,0,5.3,0,7.9c0,0.2,0,0.3,0,0.5C4.8,41.9,6.3,41.9,7.8,41.9z M30.2,41.9c0.3,0,0.5,0,0.7,0  c0.2,0,0.4-0.1,0.4-0.3c0.6-1.6,1.1-3.2,1.7-4.7c0-0.1,0-0.4-0.1-0.5c-1.5-1.5-2.5-3.4-2.6-5.5c0-1.1-0.5-1.5-1.4-1.9  c-0.7-0.3-1.4-0.7-2.1-1.1c-0.9,1.6-1.8,3.1-2.6,4.6c-0.4,0.6-0.8,0.7-1.4,0.3c-0.3-0.3-0.6-0.5-1-0.8c-0.1,0.2-0.2,0.4-0.3,0.5  c-0.3,0.4-0.3,0.7,0.1,1.1c0.3,0.3,0.5,0.7,0.7,1.1c0.2,0.3,0.3,0.6,0.3,0.9c0,2,0,4,0,5.9c0,0.2,0,0.3,0,0.5c2,0,4,0,6,0  c0-0.2,0-0.3,0-0.5c0-1,0-1.9,0-2.9c0-0.1,0-0.2,0-0.3c0-0.4,0.3-0.7,0.7-0.8c0.4,0,0.7,0.3,0.8,0.8C30.2,39.4,30.2,40.6,30.2,41.9  z M15.9,9.3c-0.9,0.7-1.8,1.4-2.7,2.2c-0.1,0.1-0.1,0.3-0.1,0.4c0,1.3,0,2.6,0,3.9c0,2.4,1.6,4.4,4,4.9c1,0.2,2,0.2,3,0.2  c2.3-0.1,4.4-1.7,4.8-3.9c0.3-1.5,0.2-3.1,0.3-4.7C21.3,13.4,18.4,12.1,15.9,9.3z M27.6,6.9c-1.7-0.2-2.6-0.6-4-1.9  c-1.8-1.7-5.4-1.7-7,0c-0.3,0.4-0.7,0.4-1.2,0.2c-1.1-0.6-2.7,0-3.1,1.2C12,7.5,12.3,8.7,12.7,10c1-0.8,1.8-1.5,2.8-2.2  C16,7.4,16.3,7.4,16.8,8c0.6,0.7,1.1,1.3,1.8,1.9c1.4,1.1,3,1.6,4.7,1.4C25.2,11,27.1,9,27.6,6.9z M46.7,29.9  c0-4.1-3.4-7.5-7.5-7.5c-4.1,0-7.4,3.4-7.4,7.4c0,4.1,3.3,7.5,7.4,7.5C43.3,37.4,46.7,34.1,46.7,29.9z M21.3,41.9  c0-1.8,0-3.5,0-5.2c0-0.9-0.2-1.6-0.7-2.3c-0.4-0.5-0.7-0.6-1.3-0.7c-1-0.1-1.7,0.2-2.1,1.2c-0.2,0.4-0.4,0.8-0.4,1.3  c0,1.8,0,3.5,0,5.3c0,0.2,0,0.3,0,0.5C18.3,41.9,19.7,41.9,21.3,41.9z M34.4,37.6c-0.7,2-1.5,4.1-2.2,6.2c0.8-0.2,1.5-0.3,2.2-0.4  c0.5-0.1,0.8,0,1.1,0.3c0.3,0.4,0.7,0.7,1.1,1.2c0.6-2.1,1.1-4.1,1.6-6C36.9,38.5,35.6,38.1,34.4,37.6z M41.8,45  c0.2-0.3,0.4-0.4,0.6-0.6c1.2-1.2,0.8-1,2.5-0.7c0.4,0.1,0.9,0.2,1.4,0.3c-0.8-2.2-1.5-4.2-2.2-6.2c-1.3,0.5-2.5,0.9-3.8,1.3  C40.7,40.9,41.3,42.9,41.8,45z M22,22.1c-2.5,0.5-3.5,0.5-5.9,0c-0.1,1.3-0.2,2.6,1.1,3.4c0.3,0.2,0.5,0.5,0.8,0.8  c0.3,0.4,0.7,0.8,1,1.2c1-1,2-2,2.9-2.9c0.1-0.1,0.1-0.2,0.1-0.3C22,23.5,22,22.8,22,22.1z M17.9,28.4c-0.9-0.9-1.8-1.8-2.8-2.8  c-0.8,0.4-1.7,0.9-2.6,1.4c0.8,1.3,1.5,2.6,2.3,4C15.8,30.1,16.9,29.3,17.9,28.4z M25.6,27.1c-0.9-0.5-1.8-1-2.6-1.4  c-1,1-1.9,1.9-2.8,2.8c1,0.8,2,1.7,3.1,2.6C24.1,29.7,24.8,28.4,25.6,27.1z M20.7,30.8c-0.6-0.5-1.1-0.9-1.7-1.4  c-0.6,0.5-1.1,0.9-1.7,1.4c0.5,1.4,0.5,1.4,1.8,1.4c0.2,0,0.4,0,0.6,0c0.1,0,0.3-0.1,0.4-0.2C20.4,31.6,20.5,31.2,20.7,30.8z"></path>
                            <path class="st0" d="M39.2,23.9c3.3,0,6,2.7,6,6c0,3.3-2.7,6-6,5.9c-3.3,0-6-2.7-6-6C33.2,26.6,35.9,23.9,39.2,23.9z M34.7,29.9  c0,2.4,2,4.5,4.4,4.5c2.5,0,4.5-1.9,4.6-4.4c0-2.5-1.9-4.5-4.4-4.6C36.8,25.4,34.7,27.4,34.7,29.9z"></path>
                            <path class="st0" d="M40,31.4c0.1,0,0.3,0.1,0.3,0.1c0.2,0.2,0.4,0.5,0.4,0.8c0,0.4-0.3,0.6-0.7,0.6c-0.5,0-1,0-1.4,0  c-0.4,0-0.7-0.2-0.8-0.6c-0.1-0.4,0.1-0.7,0.5-0.8c0.1,0,0.1-0.1,0.2-0.1c0-0.8,0-1.7,0-2.6c-0.1,0.1-0.2,0.1-0.2,0.2  c-0.4,0.3-0.8,0.3-1.1-0.1c-0.3-0.3-0.2-0.7,0.1-1.1c0.2-0.2,0.3-0.3,0.5-0.5c0.4-0.4,1.2-0.5,1.7-0.3c0.4,0.2,0.5,0.5,0.5,0.8  C39.9,29,40,30.2,40,31.4C40,31.3,40,31.4,40,31.4z"></path>
                        </g>
                    </svg>
                </div>
                <h1>Expert Guides</h1>
                <p>
                    Our team of passionate and knowledgeable guides is at the heart of our services. With years of experience and deep expertise in the destinations we cover, they will ensure you have an enriching and authentic travel experience. From historical insights to hidden gems, our guides will take you on a remarkable journey.
                </p>
            </div>
            <!-- 3 -->
            <div class="inner-card">
                <div class="svg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Calque_1" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #F0A500;
                            }
                        </style>
                        <g>
                            <path class="st0" d="M2.4,48.1c-0.5-0.4-0.5-0.6-0.3-1.2c2.2-5.8,4.4-11.5,6.6-17.3c0.1-0.4,0.3-0.6,0.7-0.8  c2.2-1.2,4.3-2.4,6.5-3.7c0.1-0.1,0.3-0.2,0.4-0.3c-0.5-0.8-1-1.6-1.5-2.3c-1-1.5-1.8-3-2.2-4.7C10.6,10.3,16,2.7,23.7,2  c6.8-0.7,12.9,4.1,14,10.8c0.5,3.2-0.1,6.2-1.8,8.9c-0.7,1.1-1.4,2.2-2.1,3.3c0.1,0.1,0.3,0.2,0.4,0.2c2.2,1.2,4.3,2.4,6.5,3.6  c0.4,0.2,0.6,0.5,0.8,0.9c2.2,5.7,4.3,11.4,6.5,17.1c0,0.1,0.1,0.2,0.2,0.4c0,0.3,0,0.6,0,0.9c-0.3,0-0.6,0-0.9,0  c0,0,0-0.1-0.1-0.1c-3.5-2-7.1-4-10.6-6c-0.3-0.1-0.4-0.1-0.7,0c-2.5,1.4-5,2.8-7.4,4.2c-1.1,0.6-2.1,1.2-3.1,1.8  c-0.2,0-0.4,0-0.5,0c-0.1,0-0.1-0.1-0.2-0.1c-3.5-2-7-3.9-10.5-5.9c-0.2-0.1-0.4-0.1-0.6,0c-1.5,0.8-3,1.7-4.5,2.5  c-2.1,1.2-4.1,2.4-6.2,3.5C2.7,48.1,2.5,48.1,2.4,48.1z M36.5,14.7c0-0.5-0.1-1-0.1-1.6c-0.8-6.3-6.8-10.7-13-9.8  c-8.1,1.2-12.5,10.2-8.3,17.2c3,5,6.2,9.8,9.3,14.7c0.4,0.6,0.9,0.6,1.3,0c3.1-4.9,6.2-9.8,9.3-14.8C36,18.8,36.5,16.8,36.5,14.7z   M17.5,27c0,0.2-0.1,0.2-0.1,0.3c-0.3,1.5-0.6,3.1-1,4.6c-0.1,0.5-0.5,0.7-0.8,0.6c-0.4-0.1-0.6-0.4-0.5-0.9  c0.1-0.7,0.3-1.4,0.4-2.1c0.2-1,0.4-1.9,0.6-2.9c-0.1,0-0.2,0-0.2,0.1c-1.9,1.1-3.9,2.2-5.8,3.3C10,30,9.8,30.2,9.8,30.4  c-1.9,5-3.8,10-5.7,15c0,0.1-0.1,0.3-0.1,0.4c0.1-0.1,0.2-0.1,0.2-0.1c2.9-1.7,5.9-3.3,8.8-5c0.2-0.1,0.3-0.3,0.3-0.5  c0.4-1.9,0.8-3.9,1.3-5.9c0.1-0.5,0.4-0.7,0.8-0.6c0.4,0.1,0.6,0.4,0.5,0.9c-0.4,1.9-0.8,3.7-1.2,5.5c-0.1,0.3,0,0.5,0.3,0.7  c3,1.6,5.9,3.3,8.8,5c0.2,0.1,0.3,0.2,0.5,0.3c0-0.1,0-0.2,0-0.2c0-2.9,0-5.8,0-8.8c0-0.1-0.1-0.3-0.2-0.4  c-0.3-0.3-0.7-0.6-0.9-0.9c-1.8-2.8-3.6-5.7-5.4-8.5C17.7,27.3,17.6,27.2,17.5,27z M25.7,46.2c0.2-0.1,0.3-0.1,0.4-0.2  c3-1.7,5.9-3.3,8.9-5c0.4-0.2,0.4-0.4,0.3-0.8c-0.7-3.3-1.4-6.7-2.1-10c-0.2-1-0.4-2.1-0.7-3.2c-0.2,0.2-0.2,0.4-0.3,0.5  c-1.8,2.8-3.5,5.6-5.3,8.4c-0.2,0.3-0.5,0.7-0.9,0.9c-0.3,0.2-0.3,0.4-0.3,0.6c0,2.8,0,5.5,0,8.3C25.7,45.9,25.7,46,25.7,46.2z   M46.1,45.9C46,45.7,46,45.6,46,45.5c-1.9-5.1-3.8-10.1-5.8-15.1c-0.1-0.2-0.2-0.4-0.4-0.5c-1.9-1.1-3.7-2.1-5.6-3.2  c-0.1-0.1-0.2-0.1-0.3-0.2c0,0.1,0,0.2,0,0.3c1,4.5,1.9,9,2.9,13.5c0,0.2,0.2,0.4,0.4,0.5c2.2,1.3,4.4,2.5,6.6,3.7  C44.5,45,45.2,45.4,46.1,45.9z"></path>
                            <path class="st0" d="M32.4,14.7c0,4.1-3.3,7.4-7.4,7.5c-4.1,0-7.5-3.3-7.5-7.4c0-4.1,3.3-7.4,7.4-7.5C29.1,7.3,32.4,10.6,32.4,14.7  z M31.1,14.7c0-3.4-2.8-6.1-6.1-6.1c-3.3,0-6.1,2.8-6,6.1c0,3.4,2.8,6.1,6.1,6C28.4,20.8,31.1,18.1,31.1,14.7z"></path>
                            <path class="st0" d="M29.7,14.8c-0.1,2.7-2.2,4.7-4.8,4.7c-2.6-0.1-4.7-2.2-4.6-4.8c0.1-2.7,2.2-4.7,4.8-4.7  C27.7,10.1,29.8,12.2,29.7,14.8z M28.4,14.7c0-1.9-1.5-3.4-3.4-3.4c-1.9,0-3.4,1.5-3.4,3.4c0,1.9,1.5,3.4,3.4,3.4  C26.9,18.1,28.4,16.6,28.4,14.7z"></path>
                        </g>
                    </svg>
                </div>
                <h1>Seamless Planning and Support</h1>
                <p>
                    We understand that planning a trip can be overwhelming. That's why we provide a hassle-free experience from start to finish. Our user-friendly website makes it easy to browse and book your travel arrangements. Plus, our dedicated support team is available to assist you at every step, ensuring a smooth and stress-free journey.
                </p>
            </div>
            <!-- 4 -->
            <div class="inner-card">
                <div class="svg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Calque_1" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #F0A500;
                            }
                        </style>
                        <path class="st0" d="M47.4,24.4c-0.5,0.5-1.1,1-1.6,1.5c-2.8,2.3-5.6,4.6-8.4,6.9c-0.3,0.3-0.6,0.4-1,0.3c-0.4-0.2-0.4-0.6-0.4-1 c0-1.3,0-2.7,0-4.1c-0.3,0.1-0.6,0.1-0.8,0.2c-3.7,0.9-6.4,4.3-6.4,8.1c0,3.3,0,6.7,0,10c0,0.5-0.1,0.8-0.5,1.1c-2.2,0-4.4,0-6.5,0 c-0.4-0.3-0.5-0.6-0.5-1.1c0-1.5,0.1-3.1-0.5-4.5c-1.1-3-3.1-5.1-6.2-6.1c-0.1,0-0.3-0.1-0.5-0.1c0,0.2,0,0.4,0,0.5 c0,1.2,0,2.3,0,3.5c0,0.4-0.1,0.7-0.5,0.9c-0.4,0.2-0.7,0-0.9-0.2c-3.2-2.7-6.4-5.3-9.6-8c-0.6-0.5-0.6-0.9,0-1.4 c3.2-2.7,6.4-5.3,9.6-8c0.3-0.2,0.6-0.4,0.9-0.2c0.4,0.2,0.5,0.5,0.5,0.9c0,1.3,0,2.6,0,3.9c0,0.2,0,0.3,0,0.5 c2.6,0.4,5,1.3,7.2,2.8c0-5.6,0-11.1,0-16.7c-0.2,0-0.5,0-0.7,0c-1.2,0-2.4,0-3.6,0c-0.3,0-0.6-0.1-0.8-0.4 c-0.2-0.3-0.1-0.6,0.2-0.9c2.7-3.3,5.4-6.5,8-9.8c0.1-0.2,0.3-0.3,0.5-0.4c0.1,0,0.2,0,0.4,0c0.2,0.1,0.3,0.2,0.5,0.4 c2.7,3.3,5.4,6.5,8,9.8c0.2,0.3,0.3,0.6,0.2,0.9c-0.2,0.3-0.5,0.4-0.8,0.4c-1.2,0-2.5,0-3.7,0c-0.2,0-0.4,0-0.6,0c0,3,0,5.9,0,8.9 c2.2-1.4,4.6-2.2,7.2-2.4c0-1.5,0-2.9,0-4.3c0-0.4,0-0.8,0.4-1c0.4-0.2,0.7,0,1,0.3c3.1,2.6,6.3,5.2,9.5,7.8 c0.2,0.2,0.4,0.4,0.5,0.6C47.4,24.1,47.4,24.3,47.4,24.4z M37.5,17.6c0,0.2,0,0.4,0,0.5c0,1,0,2,0,2.9c0,0.6-0.2,0.9-0.9,0.9 c-2.9,0.1-5.6,1.1-7.9,2.8C28.3,25,28,25.2,27.6,25c-0.4-0.2-0.4-0.5-0.4-0.9c0-3.6,0-7.1,0-10.7c0-0.7,0.2-0.9,1-1c1,0,1.9,0,2.9,0 c0.1,0,0.3,0,0.5,0c-2.2-2.7-4.4-5.4-6.6-8c-2.2,2.7-4.4,5.3-6.6,8c1.2,0,2.2,0,3.3,0c0.9,0,1.1,0.2,1.1,1.1c0,5.9,0,11.8,0,17.8 c0,0.4,0.1,0.6,0.4,0.8c0.9,1,1.9,2.1,2.7,3.2c0.5,0.7,0.9,1.5,1.4,2.3c0-0.4,0-0.8,0-1.1c0-0.7,0.1-1.5,0.2-2.2 c0.8-4.3,4.7-7.8,9-8c0.7,0,1,0.2,1,0.9c0,1,0,2,0,2.9c0,0.1,0,0.3,0,0.5c2.7-2.2,5.3-4.4,8-6.6C42.8,22,40.2,19.8,37.5,17.6z  M27.2,45.9c0-0.4,0-0.8,0-1.2c-0.1-4.7-1.9-8.5-5.4-11.6c-2.4-2.1-5.3-3.4-8.5-3.7c-0.6-0.1-0.8-0.3-0.8-0.9c0-0.5,0-1,0-1.4 c0-0.7,0-1.4,0-2.2c-2.7,2.3-5.4,4.4-8,6.6c2.7,2.2,5.3,4.4,8,6.6c0-1.1,0-2.2,0-3.2c0-1,0.3-1.2,1.2-1.1c4.6,0.8,8.4,4.8,8.9,9.5 c0.1,0.8,0.1,1.6,0.1,2.4C24.3,45.9,25.7,45.9,27.2,45.9z"></path>
                    </svg>
                </div>
                <h1>Unforgettable Memories</h1>
                <p>
                    We are committed to creating unforgettable memories that will stay with you long after your trip ends. From breathtaking landscapes to immersive cultural encounters, we curate experiences that will leave a lasting impression. Let us take care of the details so you can focus on making lifelong memories.
                </p>
            </div>
        </div>
    </div>


    <?php
    // include footer

    $file = 'block/footer.php';

    require($file);
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./files/js/main.js"></script>


</body>

</html>
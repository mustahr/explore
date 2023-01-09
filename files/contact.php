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
    <meta charset="UTF-8">
    <meta name="theme-color" content="#F0A500">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="../block/header_style.css">
    <link rel="stylesheet" href="../block/footer.css">
    <title>Explore Morocco - Contact team</title>
    <link rel="icon" href="../block/logo.png">

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

    <!-- lazy loading -->
    <link href="style.css" rel="stylesheet" media="all" />
    <link href="portrait.css" rel="stylesheet" media="(orientation:portrait)" />
    <link href="print.css" rel="stylesheet" media="print" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />


    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="img/favicon.svg" />

    <!-- Normalize CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />



</head>

<body>
    <?php
    // include header

    $logo = '../block/logo.png';
    $file = '../block/header.php';
    $index = '../';
    $trips = 'trips/trips.php';
    $categories =  'category/categories.php';
    $contact =  'contact.php';
    $about = 'about.php';
    $faq = 'faq.php';

    require($file);

    logo($logo, $index, $trips, $categories, $contact, $about, $faq);
    ?>


    <section class="sec_1">
        <div class="first">
            <div class="div_1" data-aos="fade-up">
                <h1>
                    GET IN TOUCH
                </h1>
                <p>
                    Explore Morocco 4X4 team can assist with answering questions, providing more information, or connecting you with a private trip planner.
                </p>
                <p>
                    Please don't hesitate to contact us: 
                    <br>
                    <br>
                    <a href="mailto:contact@exploremorocco4x4.com">contact@exploremorocco4x4.com</a>
                    <br>
                    +212 608-731353
                    <br>
                    +212 674-686567
                </p>
            </div>

            <div class="div_2"data-aos="fade-up">
                <p class="p">
                    Frequently asked questions
                </p>
                <p>
                    <a href="faq.php">FAQ</a>  about EXPLORE MORROCCO 4X4.
                </p>
            </div>
            <div class="div_2"data-aos="fade-up">
                <p class="p">
                    Mailing address
                </p>
                <p>
                    Explore Morocco 4x4.
                </p>
                <p>
                    Morocco
                </p>
                <p>
                    Marrakesh tanisft
                </p>
            </div>
        </div>

        <div class="second">
            <div class="sign" data-aos="fade-up">
                <div class="login-box">
                    <h3>Send us a message : </h3>
                    <form action="conf/message.php" method="post">
                        <div class="user-box">
                            <input type="text" name="email" required>
                            <label>Email Adresse</label>
                        </div>
                        <div class="user-box">
                            <textarea name="messages" id="" cols="30" rows="1"></textarea>
                            <label>Your message</label>
                        </div>
                        <div class="a">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <input type="submit" value="send" class="submit" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <?php
    // include footer

    $file = '../block/footer.php';

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
                    slidesPerView: 2,
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

        $('ul.qa li a.question').click(function() {
            $(this).toggleClass('active').siblings('.answer').stop().slideToggle(function() {
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>
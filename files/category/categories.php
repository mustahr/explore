<?php

require_once '../conf/connect.php';

$category = $db->query("SELECT * FROM category");

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

    <title>Explore Morocco - categories</title>
    <link rel="icon" href="../../block/logo.png">


    <!-- bootstrash -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- https://michalsnik.github.io/aos/ -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <!--Menu Modal -->
    <?php
    // include header

    $logo = '../../block/logo.png';
    $file = '../../block/header.php';
    $index = '../../';
    $trips = '../trips/trips.php';
    $categories =  'categories.php';
    $contact =  '../contact.php';
    $about = '../about.php';
    $faq = '../faq.php';

    require($file);

    logo($logo, $index, $trips, $categories, $contact, $about, $faq);
    ?>

    <!-- ----------------- categories -------------------- -->
    <section class="sec-0">
        <div class="title" data-aos="fade-up">
            <h1> See all categories</h1>
        </div>
        <div class="swiper mySwiper" data-aos="fade-up">
            <div class="swiper-wrapper">
                <?php while ($row = $category->fetch_assoc()) { ?>
                    <div class="swiper-slide">
                        <a href="./category.php?id_cat=<?php echo $row['id_cat']; ?>">
                            <div class="product-card">
                                <div class="product-card__images">
                                    <div class="product-card__img">
                                        <img class="img-1 lazy" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['category_image_thumbnail']); ?>" alt="traveling"/>
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
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php
    // include footer

    $file = '../../block/footer.php';


    require($file);

    footer($logo, $index, $about, $contact, $faq);
    ?>

    <script>
        $("#play_viedo").click(function() {
            $(".photo").css("display", "none");
            $(this).css("display", "none");
        });


        AOS.init({
            duration: 1100,
        });
    </script>

    <!-- lazy loading -->
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.2.0/dist/lazyload.min.js"></script>
    <script>
        new LazyLoad();
    </script>
</body>

</html>
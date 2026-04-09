<?php
session_start();
include("db_conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>DEEMART - Multipurpose E-Commerce Web Application</title>

    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/wolmart.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">

    <!-- Plugins CSS -->
    <!-- <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/demo1.min.css">

</head>

<body class="home">
    <div class="page-wrapper">
        <h1 class="d-none">DEE MART - Multipurpose E-Commerce Web Application</h1>

        <?php
        include("header.php");
        ?>


        <!-- Start of Main-->
        <main class="main">
            <section class="intro-section">
                <div class="swiper-container swiper-theme nav-inner pg-inner swiper-nav-lg animation-slider pg-xxl-hide nav-xxl-show nav-hide"
                    data-swiper-options="{
                    'slidesPerView': 1,
                    'autoplay': {
                        'delay': 8000,
                        'disableOnInteraction': false
                    }
                }">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide1"
                            style="background-color: #ebeef2;">
                            <div class="container">
                                <figure class="slide-image skrollable slide-animate">
                                    <img src="assets/images/demos/demo1/sliders/shoes.png" alt="Banner"
                                        data-bottom-top="transform: translateY(10vh);"
                                        data-top-bottom="transform: translateY(-10vh);" width="474" height="397">
                                </figure>
                                <div class="banner-content y-50 text-right">
                                    <h5 class="banner-subtitle font-weight-normal text-default ls-50 lh-1 mb-2 slide-animate"
                                        data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.2s'
                                }">
                                        Men’s <span class="p-relative d-inline-block">Custom</span>
                                    </h5>
                                    <h3 class="banner-title font-weight-bolder ls-25 lh-1 slide-animate"
                                        data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.4s'
                                }">
                                         SHOES
                                    </h3>
                                    <p class="font-weight-normal text-default slide-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.6s'
                                }">
                                    </p>

                                    <a href="shop.php"
                                        class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                                        data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.8s'
                                }">SHOP NOW<i class="w-icon-long-arrow-right"></i></a>

                                </div>
                                <!-- End of .banner-content -->
                            </div>
                            <!-- End of .container -->
                        </div>
                        <!-- End of .intro-slide1 -->

                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide2"
                            style="background-color: #ebeef2;">
                            <div class="container">
                                <figure class="slide-image skrollable slide-animate" data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'duration': '1s'
                                }">
                                    <img src="assets/images/demos/demo1/sliders/men.png" alt="Banner"
                                        data-bottom-top="transform: translateX(10vh);"
                                        data-top-bottom="transform: translateX(-10vh);" width="480" height="633">
                                </figure>
                                <div class="banner-content d-inline-block y-50">
                                    <h5 class="banner-subtitle font-weight-normal text-default ls-50 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '.2s'
                                    }">
                                        Limited<span class="text-secondary"> Collection</span>
                                    </h5>
                                    <h3 class="banner-title font-weight-bolder text-dark mb-0 ls-25 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '.4s'
                                    }">
                                       School Bag
                                    </h3>
                                    <p class="font-weight-normal text-default slide-animate" data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '.8s'
                                    }">

                                    </p>
                                    <a href="shop.php"
                                        class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '1s'
                                    }">
                                        SHOP NOW<i class="w-icon-long-arrow-right"></i>
                                    </a>
                                </div>
                                <!-- End of .banner-content -->
                            </div>
                            <!-- End of .container -->
                        </div>
                        <!-- End of .intro-slide2 -->

                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide3"
                            style="background-color: #f0f1f2;">
                            <div class="container">
                                <figure class="slide-image skrollable slide-animate" data-animation-options="{
                                    'name': 'fadeInDownShorter',
                                    'duration': '1s'
                                }">
                                    <img src="assets/images/demos/demo1/sliders/skate.png" alt="Banner"
                                        data-bottom-top="transform: translateY(10vh);"
                                        data-top-bottom="transform: translateY(-10vh);" width="310" height="444">
                                </figure>
                                <div class="banner-content text-right y-50">
                                    <p class="font-weight-normal text-default text-uppercase mb-0 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.6s'
                                    }">

                                    </p>
                                    <h5 class="banner-subtitle font-weight-normal text-default ls-25 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.4s'
                                    }">
                                        Trending Collection
                                    </h5>
                                    <h3 class="banner-title p-relative font-weight-bolder ls-50 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.2s'
                                    }"><span class="text-white mr-4">Original Head</span>-set
                                    </h3>
                                    <div class="btn-group slide-animate" data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.8s'
                                    }">
                                        <a href="shop-list.html"
                                            class="btn btn-dark btn-outline btn-rounded btn-icon-right">SHOP
                                            NOW<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                    <!-- End of .banner-content -->
                                </div>
                                <!-- End of .container -->
                            </div>
                        </div>
                        <!-- End of .intro-slide3 -->
                    </div>
                    <div class="swiper-pagination"></div>
                    <button class="swiper-button-next"></button>
                    <button class="swiper-button-prev"></button>
                </div>
                <!-- End of .swiper-container -->
            </section>
            <!-- End of .intro-section -->

            <div class="container">
                <div class="swiper-container appear-animate icon-box-wrapper br-sm mt-6 mb-6" data-swiper-options="{
                    'slidesPerView': 1,
                    'loop': false,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                        <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                            <span class="icon-box-icon icon-shipping">
                                <i class="w-icon-truck"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Shipping & Delivery</h4>
                                <p class="text-default">Delivery anywhere in the country.</p>
                            </div>
                        </div>

                        <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                            <span class="icon-box-icon icon-payment">
                                <i class="w-icon-bag"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Secure Payment</h4>
                                <p class="text-default">We ensure secure payment always.</p>
                            </div>
                        </div>

                        <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-money">
                            <span class="icon-box-icon icon-money">
                                <i class="w-icon-money"></i>
                            </span>

                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Quick Payment Confirmation</h4>
                                <p class="text-default">All payments gets confirmed in seconds.</p>
                            </div>   
                        </div>

                        <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-chat">
                            <span class="icon-box-icon icon-chat">
                                <i class="w-icon-chat"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Customer Support</h4>
                                <p class="text-default">Customer support available 24/7.

                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End of Iocn Box Wrapper -->

                <div class="row deals-wrapper appear-animate mb-8">
                    <div class="col-lg-9 mb-4">
                        <div class="single-product h-100 br-sm">
                            <h4 class="title-sm title-underline font-weight-bolder ls-normal">
                                Newly Uploaded Products
                            </h4>
                            <div class="swiper">
                                <div class="swiper-container swiper-theme nav-top swiper-nav-lg" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 1
                                }">

                                                           <?php
                            // GET PRODUCTS FROM DATABASE
                            $sql = $sql = "SELECT * FROM `product_table` ORDER BY `id` ASC";

                            $result = mysqli_query($conn, $sql);
                            ?>
                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                        <?php
     $sql = "SELECT * FROM  `product_table` ORDER BY id ASC";
     $result = mysqli_query($conn, $sql);
     if (mysqli_num_rows($result) > 0) {
         while ($row = mysqli_fetch_array($result)) {
     ?>
                                        <div class="swiper-slide">
                                            <div class="product product-single row">
                                                <div class="col-md-6">
                                                    <div class="product-gallery product-gallery-sticky product-gallery-vertical">
                                                        <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                                                            <div class="swiper-wrapper row cols-1 gutter-no">
                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="../dashboard/productupload/<?php echo $row['productimage']; ?>"
                                                                            data-zoom-image="../dashboard/productupload/<?php echo $row['productimage']; ?>"
                                                                            alt="Product Image" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>

                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="../dashboard/productupload/<?php echo $row['productimage']; ?>"
                                                                            data-zoom-image="../dashboard/productupload/<?php echo $row['productimage']; ?>"
                                                                            alt="Product Image" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>

                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="../dashboard/productupload/<?php echo $row['productimage']; ?>"
                                                                            data-zoom-image="../dashboard/productupload/<?php echo $row['productimage']; ?>"
                                                                            alt="Product Image" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>

                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="../dashboard/productupload/<?php echo $row['productimage']; ?>"
                                                                            data-zoom-image="../dashboard/productupload/<?php echo $row['productimage']; ?>"
                                                                            alt="Product Image" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <button class="swiper-button-next"></button>
                                                            <button class="swiper-button-prev"></button>
                                                            <div class="product-label-group">
                                                                
                                                            </div>
                                                        </div>

                                                        <div class="product-thumbs-wrap swiper-container"
                                                            data-swiper-options="{
                                                            'direction': 'vertical',
                                                            'breakpoints': {
                                                                '0': {
                                                                    'direction': 'horizontal',
                                                                    'slidesPerView': 4
                                                                },
                                                                '992': {
                                                                    'direction': 'vertical',
                                                                    'slidesPerView': 'auto'
                                                                }
                                                            }
                                                        }">

                                                            <div class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="../dashboard/productupload/<?php echo $row['productimage']; ?>"
                                                                        alt="Product thumb" width="60" height="68" />
                                                                </div>
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="../dashboard/productupload/<?php echo $row['productimage']; ?>"
                                                                        alt="Product thumb" width="60" height="68" />
                                                                </div>
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="../dashboard/productupload/<?php echo $row['productimage']; ?>"
                                                                        alt="Product thumb" width="60" height="68" />
                                                                </div>
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="../dashboard/productupload/<?php echo $row['productimage']; ?>"
                                                                        alt="Product thumb" width="60" height="68" />
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="product-details scrollable">
                                                        <h2 class="product-title mb-1"><a
                                                                href="product.php?uin=<?php echo $row['uin']; ?>"><?php echo $row['productname']; ?></a>
                                                            </h2>
                                                            

                                                        <hr class="product-divider">

                                                        <div class="product-price"><ins class="new-price ls-50">
                                                            &#8358;<?php
                                                            echo number_format($row['sellingprice'], 2);
                                                            ?>
                                                        </ins></div>


                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>

                                                        

                                                        <div class="product-form pt-4">
                                                            <div class="product-qty-form mb-2 mr-2">
                                                                <div class="input-group">
                                                                    <input class="quantity form-control" type="number"
                                                                        min="1" max="10000000">
                                                                    <button class="quantity-plus w-icon-plus"></button>
                                                                    <button
                                                                        class="quantity-minus w-icon-minus"></button>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary btn-cart">
                                                                <i class="w-icon-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>

                                                        <div class="social-links-wrapper mt-1">
                                                            <div class="social-links">
                                                                <div class="social-icons social-no-color border-thin">
                                                                    
                                                                    <a href="#"
                                                                        class="social-icon social-twitter w-icon-twitter"></a>
                                                                    
                                                                    <a href="#"
                                                                        class="social-icon social-whatsapp fab fa-whatsapp"></a>

                                                                    <a href="#"
                                                                        class="social-icon social-youtube fab fa-linkedin-in"></a>
                                                                </div>
                                                            </div>
                                                            
                                                            <span class="divider d-xs-show"></span>
                                                            <div class="product-link-wrapper d-flex">
                                                                <a href="#"
                                                                    class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php }} ?>

                                    </div>
                                    <button class="swiper-button-prev"></button>
                                    <button class="swiper-button-next"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="widget widget-products widget-products-bordered h-100">
                            <div class="widget-body br-sm h-100">
                                <h4 class="title-sm title-underline font-weight-bolder ls-normal mb-2">
                                    Top Products
                                </h4>

                                <div class="swiper">
                                    <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                        'slidesPerView': 1,
                                        'spaceBetween': 20,
                                        'breakpoints': {
                                            '576': {
                                                'slidesPerView': 2
                                            },
                                            '768': {
                                                'slidesPerView': 3
                                            },
                                            '992': {
                                                'slidesPerView': 1
                                            }
                                        }
                                    }">

                                        <div class="swiper-wrapper row cols-lg-1 cols-md-3">
                                            <?php
     $sql = "SELECT * FROM  `product_table` ORDER BY id ASC";
     $result = mysqli_query($conn, $sql);
     if (mysqli_num_rows($result) > 0) {
         while ($row = mysqli_fetch_array($result)) {
     ?>
                                            <div class="swiper-slide product-widget-wrap">
                                                <div class="product product-widget bb-no">
                                                    <figure class="product-media">
                                                        <a href="product.php?uin=<?php echo $row['uin']; ?>">
                                                            <img src="../dashboard/productupload/<?php echo $row['productimage']; ?>"
                                                                alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>

                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="product.php?uin<?php echo $row['uin']; ?>"><?php echo $row['productname']; ?></a>
                                                        </h4>

                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>

                                                        <div class="product-price">
                                                            <ins class="new-price">
                                                                &#8358;<?php
                                                            echo number_format($row['sellingprice'], 2);
                                                            ?>
                                                            </ins>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="product product-widget bb-no">
                                                    <figure class="product-media">
                                                        <a href="product.php?uin=<?php echo $row['uin']; ?>">
                                                            <img src="../dashboard/productupload/<?php echo $row['productimage']; ?>"
                                                                alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>

                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="product.php?uin=<?php echo $row['uin']; ?>"><?php echo $row['productname']; ?></a>
                                                        </h4>

                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>

                                                        <div class="product-price">
                                                            <ins class="new-price"> &#8358;<?php
                                                            echo number_format($row['sellingprice'], 2);?>
                                                            </ins>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="product.php?uin=<?php echo $row['uin']; ?>">
                                                            <img src="../dashboard/productupload/<?php echo $row['productimage']; ?>"
                                                                alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>

                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="product.php?uin=<?php echo $row['uin']; ?>"><?php echo $row['productname']; ?></a>
                                                        </h4>

                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>

                                                        <div class="product-price">
                                                            <ins class="new-price"> &#8358;<?php
                                                            echo number_format($row['sellingprice'], 2);?></ins>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                           <?php }} ?>

                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Deals Wrapper -->
            </div>

            <section class="category-section top-category bg-grey pt-10 pb-10 appear-animate">
                <div class="container pb-2">
                    <h2 class="title justify-content-center pt-1 ls-normal mb-5">Top Categories</h2>
                    <div class="swiper">
                        <div class="swiper-container swiper-theme pg-show" data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 5
                                },
                                '992': {
                                    'slidesPerView': 6
                                }
                            }
                        }">
                            <div class="swiper-wrapper row cols-lg-6 cols-md-5 cols-sm-3 cols-2">
                                <?php
     $sql = "SELECT * FROM  `product_table` WHERE category NOT IN ('Food') ORDER BY id ASC";
     $result = mysqli_query($conn, $sql);
     if (mysqli_num_rows($result) > 0) {
         while ($row = mysqli_fetch_array($result)) {
     ?>

                                <div
                                    class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                                    <a href="" class="category-media">
                                        <img src="../dashboard/productupload/<?php echo $row['productimage']; ?>" alt="Category"
                                            width="130" height="130">
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name"><?php echo $row['category']; ?></h4>
                                        <a href=""
                                            class="btn btn-primary btn-link btn-underline">Shop
                                            Now</a>
                                    </div>
                                </div>

                                <?php
         }}
                    ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of .category-section top-category -->

            <div class="container">

               
                <!-- <div class="row category-cosmetic-lifestyle appear-animate mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed category-banner-1 br-xs">
                            <figure>
                                <img src="assets/images/demos/demo1/categories/3-1.jpg" alt="Category Banner"
                                    width="610" height="200" style="background-color: #3B4B48;" />
                            </figure>
                            <div class="banner-content y-50 pt-1">
                                <h5 class="banner-subtitle font-weight-bold text-uppercase">Natural Process</h5>
                                <h3 class="banner-title font-weight-bolder text-capitalize text-white">Cosmetic
                                    Makeup<br>Professional</h3>
                                <a href="shop-banner-sidebar.html"
                                    class="btn btn-white btn-link btn-underline btn-icon-right">Shop Now<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed category-banner-2 br-xs">
                            <figure>
                                <img src="assets/images/demos/demo1/categories/3-2.jpg" alt="Category Banner"
                                    width="610" height="200" style="background-color: #E5E5E5;" />
                            </figure>
                            <div class="banner-content y-50 pt-1">
                                <h5 class="banner-subtitle font-weight-bold text-uppercase">Trending Now</h5>
                                <h3 class="banner-title font-weight-bolder text-capitalize">Women's
                                    Lifestyle<br>Collection</h3>
                                <a href="shop-banner-sidebar.html"
                                    class="btn btn-dark btn-link btn-underline btn-icon-right">Shop Now<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- End of Category Cosmetic Lifestyle -->


                <div class="product-wrapper-1 appear-animate mb-5">
                <div class="title-link-wrapper pb-1 mb-4">
                    <?php
                    $sql = "SELECT * FROM `product_table` WHERE category IN ('Fashion') ORDER BY id DESC LIMIT 0, 8";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                    ?>
                    <h2 class="title ls-normal mb-0"><?php echo $row['category']; ?></h2>
                    <a href="shop.php" class="font-size-normal font-weight-bold ls-25 mb-0">More Products
                        <i class="w-icon-long-arrow-right"></i>
                    </a>
                    <?php } ?>
                </div>

                    <div class="row">
                        <div class="col-lg-3 col-sm-4 mb-4">
                            <?php
                    $sql = "SELECT * FROM `product_table` WHERE category IN ('Fashion') ORDER BY id ASC LIMIT 0, 8";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                    ?>
                            <div class="banner h-100 br-sm" style="background-image: url(../dashboard/productupload/<?php echo $row['productimage']; ?>); 
                                background-color: #ebeced;">
                                <div class="banner-content content-top">
                                    <h5 class="banner-subtitle font-weight-normal mb-2">Cool Stuff</h5>
                                    <hr class="banner-divider bg-dark mb-2">
                                    <h3 class="banner-title font-weight-bolder ls-25 text-uppercase">
                                        New Arrival<br>
                                    </h3>
                                    <a href="shop.php"
                                        class="btn btn-dark btn-outline btn-rounded btn-sm">Shop Now</a>
                                </div>
                            </div>
                            <?php
                    }
                            ?>
                         
                        </div>
                        <!-- End of Banner -->

                        <div class="col-lg-9 col-sm-8">
                            <div class="swiper-container swiper-theme" data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '992': {
                                        'slidesPerView': 3
                                    },
                                    '1200': {
                                        'slidesPerView': 4
                                    }
                                }
                            }">
                                <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                     <?php
     $sql = "SELECT * FROM `product_table` WHERE category IN ('Fashion') ORDER BY id DESC LIMIT 0, 5";
     $result = mysqli_query($conn, $sql);
     if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
        ?>

                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="product.php?uin=<?php echo $row['uin']; ?>">
                                                    <img src="../dashboard/productupload/<?php echo $row['productimage']; ?>" alt="Product"
                                                        width="216" height="243">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>

                                                    <a href="" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>

                                                    <a href="" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    
                                                </div>
                                            </figure>

                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product.php?uin=<?php echo $row['uin']; ?>">
                                                    <?php echo $row['productname']; ?>
                                                </a>
                                                </h4>


                                                <div class="product-price">
                                                    <ins class="new-price">
                                                        &#8358;<?php
                                                            echo number_format($row['sellingprice'], 2); ?>
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <?php }} ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                    <?php
         
                    ?>

                </div>
                <!-- End of Product Wrapper 1 -->

                <div class="product-wrapper-1 appear-animate mb-8">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <?php
     $sql = "SELECT * FROM `product_table` WHERE category IN ('Gadgets')";
     $result = mysqli_query($conn, $sql);
     if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        ?>
                        <h2 class="title ls-normal mb-0"><?php echo $row['category']; ?></h2>
                        <a href="shop.php" class="font-size-normal font-weight-bold ls-25 mb-0">More
                            Products<i class="w-icon-long-arrow-right"></i></a>
                            <?php 
                            }
                            ?>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-sm-4 mb-4">
                            <div class="banner h-100 br-sm" style="background-image: url(assets/images/demos/demo1/banners/3.jpg); 
                            background-color: #252525;">
                                <div class="banner-content content-top">
                                    <h5 class="banner-subtitle text-white font-weight-normal mb-2">Sleek Gadgets</h5>
                                    <hr class="banner-divider bg-white mb-2">
                                    <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25">
                                        Laptops, iPhones, Headsets <br>
                                    </h3>
                                    <a href="shop-banner-sidebar.html"
                                        class="btn btn-white btn-outline btn-rounded btn-sm">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Banner -->

                        <div class="col-lg-9 col-sm-8">
                            <div class="swiper-container swiper-theme" data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '992': {
                                        'slidesPerView': 3
                                    },
                                    '1200': {
                                        'slidesPerView': 4
                                    }
                                }
                            }">

                                <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                    <?php
     $sql = "SELECT * FROM `product_table` WHERE category IN ('Gadgets') ORDER BY id DESC LIMIT 0, 5";
     $result = mysqli_query($conn, $sql);
     if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
        ?>
                                    
                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="product.php?uin=<?php echo $row['uin']; ?>">
                                                    <img src="../dashboard/productupload/<?php echo $row['productimage']; ?>"
                                                        alt="Product" width="216" height="243" />
                                                    <img src="../dashboard/productupload/<?php echo $row['productimage']; ?>"
                                                        alt="Product" width="216" height="243" />
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    
                                                </div>
                                            </figure>
                                            
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product.php?uin=<?php echo $row['uin']; ?>">
                                                    <?php echo $row['productname']; ?>
                                                </a></h4>
                                               
                                                <div class="product-price">
                                                    <ins class="new-price">
                                                        &#8358;<?php
                                                            echo number_format($row['sellingprice'], 2);?>
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <?php
                                         }}
                                        ?>

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- End of Produts -->
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrapper 1 -->

                <!-- <div class="banner banner-fashion appear-animate br-sm mb-9" style="background-image: url(assets/images/demos/demo1/banners/4.jpg);
                    background-color: #383839;">
                    <div class="banner-content align-items-center">
                        <div class="content-left d-flex align-items-center mb-3">
                            <div class="banner-price-info font-weight-bolder text-secondary text-uppercase lh-1 ls-25">
                                25
                                <sup class="font-weight-bold">%</sup><sub class="font-weight-bold ls-25">Off</sub>
                            </div>
                            <hr class="banner-divider bg-white mt-0 mb-0 mr-8">
                        </div>
                        <div class="content-right d-flex align-items-center flex-1 flex-wrap">
                            <div class="banner-info mb-0 mr-auto pr-4 mb-3">
                                <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25">For Today's
                                    Fashion</h3>
                                <p class="text-white mb-0">Use code
                                    <span
                                        class="text-dark bg-white font-weight-bold ls-50 pl-1 pr-1 d-inline-block">Black
                                        <strong>12345</strong></span> to get best offer.</p>
                            </div>
                            <a href="shop-banner-sidebar.html"
                                class="btn btn-white btn-outline btn-rounded btn-icon-right mb-3">Shop Now<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div> -->
                <!-- End of Banner Fashion -->

                <div class="product-wrapper-1 appear-animate mb-7">

                    <div class="title-link-wrapper pb-1 mb-4">
                        <?php
     $sql = "SELECT * FROM `product_table` WHERE category IN ('Shoes')";
     $result = mysqli_query($conn, $sql);
     if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        ?>
                        <h2 class="title ls-normal mb-0"><?php echo $row['category']; ?></h2>
                        <a href="shop.php" class="font-size-normal font-weight-bold ls-25 mb-0">More
                            Products<i class="w-icon-long-arrow-right"></i></a>
                            <?php } ?>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-3 col-sm-4 mb-4">
                            <?php
     $sql = "SELECT * FROM `product_table` WHERE category IN ('Shoes') ORDER BY id ASC LIMIT 0, 8";
     $result = mysqli_query($conn, $sql);
     if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        ?>
                            <div class="banner h-100 br-sm" style="background-image: url(../dashboard/productupload/<?php echo $row['productimage']; ?>); 
                            background-color: #EAEFF3;">
                                <div class="banner-content content-top">
                                    <h5 class="banner-subtitle font-weight-normal mb-2 text-white">New Kicks</h5>
                                    <hr class="banner-divider bg-dark mb-2">
                                    <h3 class="banner-title font-weight-bolder text-uppercase ls-25 text-white">
                                    Latest Kicks<br>
                                    </h3>
                                    <a href="shop.php"
                                        class="btn btn-dark btn-outline btn-rounded btn-sm text-white">Shop now</a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- End of Banner -->

                        <div class="col-lg-9 col-sm-8">
                            <div class="swiper-container swiper-theme" data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '992': {
                                        'slidesPerView': 3
                                    },
                                    '1200': {
                                        'slidesPerView': 4
                                    }
                                }
                            }">
                                <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                            <?php
                            $sql = "SELECT * FROM `product_table` WHERE category IN ('Shoes') ORDER BY id DESC";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="swiper-slide product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product.php?uin=<?php echo $row['uin']; ?>">
                                            <img src="../dashboard/productupload/<?php echo $row['productimage']; ?>" alt="Product"
                                                width="216" height="243" />
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                            <a href="" class="btn-product-icon btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                            <a href="" class="btn-product-icon btn-quickview w-icon-search" title="Quickview"></a>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <h4 class="product-name">
                                            <a href="product.php?uin=<?php echo $row['uin']; ?>">
                                                <?php echo $row['productname']; ?>
                                            </a>
                                        </h4>
                                        <div class="product-price">
                                            <ins class="new-price">
                                                &#8358;<?php echo number_format($row['sellingprice'], 2); ?>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- End of Produts -->
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrapper 1 -->

                <div class="post-wrapper appear-animate mb-4">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0">Our Blog</h2>
                        <a href="" class="font-weight-bold font-size-normal">View All Articles</a>
                    </div>
                    <div class="swiper">
                        <div class="swiper-container swiper-theme" data-swiper-options="{
                            'slidesPerView': 1,
                            'spaceBetween': 20,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 2
                                },
                                '768': {
                                    'slidesPerView': 3
                                },
                                '992': {
                                    'slidesPerView': 4
                                }
                            }
                        }">
                            <div class="swiper-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-1">
                                <?php
                            $sql = "SELECT * FROM `blog` ORDER BY id ASC";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <div class="swiper-slide post text-center overlay-zoom">
                                    <figure class="post-media br-sm">
                                        <a href="">
                                            <img src="../dashboard/blogupload/<?php echo $row['blogimage']; ?>" alt="Post" width="280"
                                                height="180" style="background-color: #4b6e91;" />
                                        </a>
                                    </figure>
                                    <div class="post-details">
                                        <div class="post-meta">
                                            by <a href="#" class="post-author"><?php echo $row['photocredit']; ?></a>
                                            - <a href="#" class="post-date mr-0"><?php echo $row['date']; ?></a>
                                        </div>
                                        <h4 class="post-title"><a href="">
                                            <?php echo $row['headline']; ?>
                                        </a>
                                        </h4>
                                        <a href="" class="btn btn-link btn-dark btn-underline">Read
                                            More<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                </div>

                                <?php }} ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!-- Post Wrapper -->

               
            </div>
            <!--End of Catainer -->
        </main>
        <!-- End of Main -->

        <?php
        include("footer.php");
        ?>

    </div>
    <!-- End of Page-wrapper-->

    <!-- Start of Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="index.php" class="sticky-link active">
            <i class="w-icon-home"></i>
            <p>Home</p>
        </a>
        <a href="shop.php" class="sticky-link">
            <i class="w-icon-category"></i>
            <p>Shop</p>
        </a>
        <a href="my-account.php" class="sticky-link">
            <i class="w-icon-account"></i>
            <p>Account</p>
        </a>
        <div class="cart-dropdown dir-up">
            <a href="cart.php" class="sticky-link">
                <i class="w-icon-cart"></i>
                <p>Cart</p>
            </a>
            <div class="dropdown-box">
                <div class="products">
                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="product.php">Beige knitted elas<br>tic
                                    runner shoes</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$25.68</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/cart/product-1.jpg" alt="product" height="84" width="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close" aria-label="button">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="product.php">Blue utility pina<br>fore
                                    denim dress</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$32.99</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/cart/product-2.jpg" alt="product" width="84" height="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close" aria-label="button">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="cart-total">
                    <label>Subtotal:</label>
                    <span class="price">$58.67</span>
                </div>

                <div class="cart-action">
                    <a href="cart.php" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                    <a href="checkout.php" class="btn btn-primary btn-rounded">Checkout</a>
                </div>
            </div>
            <!-- End of Dropdown Box -->
        </div>

        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="w-icon-search"></i>
                <p>Search</p>
            </a>
            <form action="shop.php" method="get" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                    required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- End of Sticky Footer -->

    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg
            version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
                r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
        </svg> </a>
    <!-- End of Scroll Top -->

    <!-- Start of Mobile Menu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay"></div>
        <!-- End of .mobile-menu-overlay -->

        <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
        <!-- End of .mobile-menu-close -->

        <div class="mobile-menu-container scrollable">
            <form action="shop.php" method="get" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                    required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <div class="tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#main-menu" class="nav-link active">Main Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#categories" class="nav-link">Categories</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="main-menu">
                    <ul class="mobile-menu">
                        <li><a href="index.php">Home</a></li>
                        <li>
                            <a href="shop.php">Shop</a>
                            <ul>
                                <li>
                                    <a href="shop.php">Shop Pages</a>
                                    <ul>
                                        <li><a href="shop.php">Fashion</a></li>
                                        <li><a href="shop.php">Gadgets</a></li>
                                        <li><a href="shop.php">Shoes</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="wishlist.php">Wishlist</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="my-account.php">My Account</a></li>
                    </ul>
                </div>
                <div class="tab-pane" id="categories">
                    <ul class="mobile-menu">
                        <li>
                            <a href="shop.php">
                                <i class="w-icon-tshirt2"></i>Fashion
                            </a>
                        </li>
                        <li>
                            <a href="shop.php">
                                <i class="w-icon-electronics"></i>Gadgets
                            </a>
                        </li>
                        <li>
                            <a href="shop.php">
                                <i class="w-icon-home"></i>Home & Garden
                            </a>
                        </li>
                        <li>
                            <a href="shop.php">
                                <i class="w-icon-heartbeat"></i>Health & Beauty
                            </a>
                        </li>
                        <li>
                            <a href="shop.php">
                                <i class="w-icon-gift"></i>Gift Ideas
                            </a>
                        </li>
                        <li>
                            <a href="shop.php">
                                <i class="w-icon-gamepad"></i>Toy & Games
                            </a>
                        </li>
                        <li>
                            <a href="shop.php">
                                <i class="w-icon-ice-cream"></i>Cooking
                            </a>
                        </li>
                        <li>
                            <a href="shop.php">
                                <i class="w-icon-ios"></i>Smart Phones
                            </a>
                        </li>
                        <li>
                            <a href="shop.php">
                                <i class="w-icon-camera"></i>Cameras & Photo
                            </a>
                        </li>
                        <li>
                            <a href="shop.php">
                                <i class="w-icon-ruby"></i>Accessories
                            </a>
                        </li>
                        <li>
                            <a href="shop.php"
                                class="font-weight-bold text-primary text-uppercase ls-25">
                                View All Categories<i class="w-icon-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Mobile Menu -->

    <!-- Start of Newsletter popup -->
    <div class="newsletter-popup mfp-hide">
        <div class="newsletter-content">
            <h4 class="text-uppercase font-weight-normal ls-25">Get Up to<span class="text-primary">25% Off</span></h4>
            <h2 class="ls-25">Sign up to DEE MART</h2>
            <p class="text-light ls-10">Subscribe to the DEE MART market newsletter to
                receive updates on special offers.</p>

            <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-round">
                <input type="email" class="form-control email font-size-md" name="email" id="email2"
                    placeholder="Your email address" required="">
                <button class="btn btn-dark" type="submit">SUBMIT</button>
            </form>

            <div class="form-checkbox d-flex align-items-center">
                <input type="checkbox" class="custom-checkbox" id="hide-newsletter-popup" name="hide-newsletter-popup"
                    required="">
                <label for="hide-newsletter-popup" class="font-size-sm text-light">Don't show this popup again.</label>
            </div>
        </div>
    </div>
    <!-- End of Newsletter popup -->

    <!-- Start of Quick View -->
    <div class="product product-single product-popup">
        <div class="row gutter-lg">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="product-gallery product-gallery-sticky">
                    <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                        <div class="swiper-wrapper row cols-1 gutter-no">
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/1-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/1-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/2-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/2-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/3-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/3-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/4-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/4-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                        </div>
                        <button class="swiper-button-next"></button>
                        <button class="swiper-button-prev"></button>
                    </div>
                    <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                        'navigation': {
                            'nextEl': '.swiper-button-next',
                            'prevEl': '.swiper-button-prev'
                        }
                    }">
                        <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/1-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/2-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/3-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/4-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                        </div>
                        <button class="swiper-button-next"></button>
                        <button class="swiper-button-prev"></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 overflow-hidden p-relative">
                <div class="product-details scrollable pl-0">
                    <h2 class="product-title">Electronics Black Wrist Watch</h2>
                    <div class="product-bm-wrapper">
                        <figure class="brand">
                            <img src="assets/images/products/brand/brand-1.jpg" alt="Brand" width="102" height="48" />
                        </figure>
                        <div class="product-meta">
                            <div class="product-categories">
                                Category:
                                <span class="product-category"><a href="shop.php">Electronics</a></span>
                            </div>
                            <div class="product-sku">
                                SKU: <span>MS46891340</span>
                            </div>
                        </div>
                    </div>

                    <hr class="product-divider">

                    <div class="product-price">$40.00</div>

                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width: 80%;"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                    </div>

                    <div class="product-short-desc">
                        <ul class="list-type-check list-style-none">
                            <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                            <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                            <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                        </ul>
                    </div>

                    <hr class="product-divider">

                    <div class="product-form product-variation-form product-color-swatch">
                        <label>Color:</label>
                        <div class="d-flex align-items-center product-variations">
                            <a href="#" class="color" style="background-color: #ffcc01"></a>
                            <a href="#" class="color" style="background-color: #ca6d00;"></a>
                            <a href="#" class="color" style="background-color: #1c93cb;"></a>
                            <a href="#" class="color" style="background-color: #ccc;"></a>
                            <a href="#" class="color" style="background-color: #333;"></a>
                        </div>
                    </div>
                    <div class="product-form product-variation-form product-size-swatch">
                        <label class="mb-1">Size:</label>
                        <div class="flex-wrap d-flex align-items-center product-variations">
                            <a href="#" class="size">Small</a>
                            <a href="#" class="size">Medium</a>
                            <a href="#" class="size">Large</a>
                            <a href="#" class="size">Extra Large</a>
                        </div>
                        <a href="#" class="product-variation-clean">Clean All</a>
                    </div>

                    <div class="product-variation-price">
                        <span></span>
                    </div>

                    <div class="product-form">
                        <div class="product-qty-form">
                            <div class="input-group">
                                <input class="quantity form-control" type="number" min="1" max="10000000">
                                <button class="quantity-plus w-icon-plus"></button>
                                <button class="quantity-minus w-icon-minus"></button>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-cart">
                            <i class="w-icon-cart"></i>
                            <span>Add to Cart</span>
                        </button>
                    </div>

                    <div class="social-links-wrapper">
                        <div class="social-links">
                            <div class="social-icons social-no-color border-thin">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                <a href="#" class="social-icon social-youtube fab fa-linkedin-in"></a>
                            </div>
                        </div>
                        <span class="divider d-xs-show"></span>
                        <div class="product-link-wrapper d-flex">
                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                            <a href="#"
                                class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Quick view -->

    <!-- Plugin JS File -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/zoom/jquery.zoom.js"></script>
    <script src="assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/skrollr/skrollr.min.js"></script>

    <!-- Swiper JS -->
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.min.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon='{"version":"2024.11.0","token":"ecd4920e43e14654b78e65dbf8311922","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9daa04e618a24813',t:'MTc3MzIyNjQ0NQ=='};var a=document.createElement('script');a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>

</html>
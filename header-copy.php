<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="refresh" content="600" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />

    <meta name="keywords" content="online news porta, news portal, news, portal, bangladesh, sheikh hasina, begum khaleda zia, hossain mohammad ershad, sakib al hasan, mustafizur rahman, cricket, coxsbazar, cox, bandarbon, sylhet tea garden, tea, garden, bangladesh best web design house, website desin, web development, s a faroque, webnewsdesign.com, webnewsdesign, nilgiri, news, news bangladesh, bangladesh viral news, viral video, 01915344418, faroque.computer@gmail.com, বাংলাদেশ, ক্রিকেট, সাকিব আল হাসান, মুস্তাফিজ, ক্রিকেট স্কোর, নিউজ পোর্টাল, নিউজ, পোর্টাল, নিউজপেপার ওয়েবসাইট, নিউজ পেপার, নিউজ পেপার ওয়েবসাইট, ওয়েবসাইট, বাংলা ওয়েবসাইট, খবর, বাংলাদেশের, খবর, প্রথম আলো, বাংলাদেশ প্রতিদিন, বিশ্বের খবরাখবর, নিউজ পোর্টাল তৈরি করতে চাই, একটা নিউজ পোর্টাল">

    <title> <?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?> </title>

    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Luckiest+Guy' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7CP67ZVVP2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7CP67ZVVP2');
    </script>

</head>

<body>
    <!--facebook likebox code-->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1032051876813616";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="container-fluid bg-brick mb-3">
        <div class="container">
            <div class="row p-2">
                <div class="col-md-8 col-12 h6 mb-0">
                    <i class="fa fa-phone-square text-white" aria-hidden="true"></i> <a class="text-white" href="tel:01915-344418"> 01915-344418 </a> &nbsp;
                    <i class="fa fa-envelope text-white" aria-hidden="true"></i> <a class="text-white" href="mailto:faroque.computer@gmail.com">faroque.computer@gmail.com</a> <span class="text-white"> | </span> <a class="text-white" href="mailto:info@webnewsdesign.com"> info@webnewsdesign.com </a>
                </div>
            </div>
        </div>
    </div>

    <div class="d-none d-sm-block">
        <!--wrap start-->
        <div class="container my-4">
            <div class="row">
                <div class="col-md-6">
                    <?php get_template_part('part/mainlogo'); ?>
                </div>

            </div>
        </div>

        <div class="container-fluid bg-brick mb-3">
            <div class="container">
                <ul class="sub-menu mb-0">
                    <?php wp_nav_menu(array(
                        'theme_location'        =>  'mainMenu'
                    )); ?>
                </ul>
            </div>
        </div>

    </div>

    <div class="cotainer-fluid d-block d-sm-none py-2 px-3">
        <div class="row mb-2 d-flex justify-content-center align-items-center">
            <div class="col-2">
                <div class="border border-dark text-center rounded cursorPointer" data-toggle="collapse" href="#searchMobileMenu" role="button" aria-expanded="false" aria-controls="searchMobileMenu"> <i class="fa fa-search" aria-hidden="true"></i> </div>
            </div>
            <div class="col-8 ">
                <?php get_template_part('part/mainlogo'); ?>
            </div>
            <div class="col-2 ">
                <div class="border border-dark text-center rounded cursorPointer" data-toggle="collapse" href="#mobileMenu" role="button" aria-expanded="false" aria-controls="mobileMenu"> <i class="fa fa-bars" aria-hidden="true"></i> </div>
            </div>
        </div>
        <div class="row collapse" id="searchMobileMenu">
            <nav class="navbar navbar-light bg-light">
                <form action="<?php echo home_url(); ?>" class="searchform form-inline d-flex flex-wrap" id="searchform" method="get" role="search">
                    <input class="form-control mr-sm-2" type="search" name="s" id="s" placeholder="<?php echo get_search_query(); ?>" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" id="searchsubmit" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>
            </nav>
        </div>
        <div class="row collapse" id="mobileMenu">
            <ul class="sub-menu mb-0 w-100 bg-brick">
                <?php wp_nav_menu(array(
                    'theme_location'        =>  'mainMenu'
                )); ?>
            </ul>
        </div>
    </div>
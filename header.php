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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">

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


    <style>
        body {
            background-image: url(<?php echo esc_url(get_template_directory_uri() . '/images/background-for-body.jpg') ?>);
        }

        .vig-bg-photo {
            background-image: url(<?php echo esc_url(get_template_directory_uri() . '/images/breadcrumb-background-image.png'); ?>);
            height: 300px;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .vig-bg-color {
            background-color: rgba(0, 0, 0, 0.5);
            height: 100%;
            width: 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>

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

    <div class="container-fluid bg-light mb-md-4 mb-2">
        <div class="container px-0">

            <nav class="navbar navbar-expand-lg navbar-light px-0">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/main-logo.png" alt="<?php bloginfo('name'); ?>" class="img-fluid">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'container'      => false,
                        'menu_class'     => 'navbar-nav',
                        'fallback_cb'    => false,
                        'depth'          => 2,
                    ));
                    ?>
                </div>
            </nav>

        </div>
    </div>
<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php bloginfo('name');
        wp_title(); ?></title>

    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light"
          rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/animate/animate.min.css">
    <link rel="stylesheet"
          href="<?php bloginfo('template_url'); ?>/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="<?php bloginfo('template_url'); ?>/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/theme-elements.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/theme-blog.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/theme-shop.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/circle-flip-slideshow/css/component.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/custom.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <!-- Head Libs -->
    <script src="<?php bloginfo('template_url'); ?>/vendor/modernizr/modernizr.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>
<div class="body">
    <header id="header"
            data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-57px', 'stickyChangeLogo': true}">
        <div class="header-body">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-logo">
                            <a href="<?php echo home_url();?>">
                                <?php
                                the_custom_logo();
                                if (!has_custom_logo()) {
                                    ?>
                                    <h1><?php bloginfo('name'); ?></h1>
                                    <?php
                                } ?>
                            </a>
                        </div>
                    </div>
                    <div class="header-column">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="hidden-xs">
                                        <a href="about"><i class="fa fa-angle-right"></i> About Us</a>
                                    </li>
                                    <li>
                                        <span class="ws-nowrap"><i
                                                    class="fa fa-phone"></i> <?php echo get_option('my_phone'); ?></span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-row">
                            <div class="header-nav">
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                        data-target=".header-nav-main">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                    <?php
                                    $walker = new mainMenuWalker3();
                                    wp_nav_menu(array(
                                        'container' => 'nav',
                                        'container_class' => '',
                                        'theme_location' => 'HeadMenu',
                                        'items_wrap' => '<ul class="nav nav-pills" id="mainNav">%3$s</ul>',
                                        'depth' => 1,
                                        'walker' => $walker
                                    )); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage MHP
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="xay dung minh hung phat long thanh dong nai">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Minh Hưng Phát - Kiến tạo tương lai | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Preloader -->
    <?php if (get_theme_mod('enable_loader', 0)) {?>
    <div id="preloader">
        <div class="south-load"></div>
    </div>
    <?php } ?>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                    <h6><img src="<?php echo get_template_directory_uri(); ?>/img/icons/envelope.png" alt=""><a href="mailto:mhp@gmail.com">mhp@gmail.com</a></h6>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/phone-call.png" alt="">
                    </div>

                    <div class="number">
                        <a href="tel:+45 677 8993000 223">+45 677 8993000 223</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <?php if(has_custom_logo()) { ?>
                    <!-- <a class="nav-brand" href="<?php //echo esc_url(home_url('/')); ?>"><img src="<?php //echo get_template_directory_uri(); ?>/img/core-img/logo.png" alt=""></a> -->
                    <?php the_custom_logo(); //echo bloginfo('name');?>
                    <!-- <a class="nav-brand" href="<?php //echo esc_url(home_url('/')); ?>"><?php //bloginfo('name'); ?></a> -->
                    <?php } ?>
                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                        <?php

                       	if ( has_nav_menu( 'mhp-menu' ) ) {
                            wp_nav_menu( array(
                                 'theme_location' => 'mhp-menu',
                                 //'menu_class'        => 'nav navbar-nav',
                                 //'container'         => 'div',
                                 //'container_class'   => 'collapse navbar-collapse',
                                 //'container_class'   => 'cn-dropdown-item has-down pr12',
                                 //'container_id'      => 'bs-example-navbar-collapse-1',
                                 'container' => false,
                                 'depth' => 2,
                                 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                 'walker' => new wp_bootstrap_navwalker() )
                                );
                         }
                        ?>
                        <?php if(  get_theme_mod( 'enable_search',1)  ){?>
                            <div class="south-search-form">
                                <?php //get_search_form(); ?>
                                <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
                                    <input type="search" name="s" id="search" placeholder="Nhập từ khóa ...">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Search Button -->
                            <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
                            <?php } ?>
                        </div>
                       
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <?php 
            $title = array("Xây dựng nhà", "Giá cả hợp lý", "Đảm bảo chất lượng");
           
            for ($i = 0; $i < 3; $i++) {
            ?>
            <div class="single-hero-slide bg-img" style="background-image: url(<?php echo get_template_directory_uri() ."/img/bg-img/hero".($i+1).".jpg"; ?>)">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms"><?php 
                                if (is_page()) {
                                    echo the_title();
                                } else {
                                    echo $title[$i]; 
                                }
                                ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
           
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

   
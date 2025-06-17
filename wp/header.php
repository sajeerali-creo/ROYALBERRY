<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>

    <!-- CSS frame work -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- main-stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <!-- icon font -->
    <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" rel="stylesheet" />

    <!-- scroll animation -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="page-loader">
        <div class="loading">
            <div class="moving">
            </div>
        </div>
    </div>

    <header class="lg-header d-none d-lg-block" id="dynamic">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="/">
                <img src="img/logo.svg" class="logo-m" alt="">
            </a>
            <ul class="menus">
                <li>
                    <a href="#" class="active">HOME</a>
                </li>
                <li>
                    <a href="#">ABOUT US</a>
                </li>
                <li>
                    <a href="#">SERVICES</a>
                </li>
                <li>
                    <a href="#">TESTIMONIALS</a>
                </li>
                <li>
                    <a href="#">GALLERY</a>
                </li>
                <li>
                    <a href="#">CONTACT US</a>
                </li>
            </ul>

            <a href="/profile.pdf" class="btn-primary border-gradient border-gradient-green">
                <span>Download Profile</span>
                <i class="ti ti-arrow-right"></i>
            </a>
        </div>
    </header>
    <div class="sm-header d-lg-none">
        <div class="head-r d-flex justify-content-between align-items-center">
            <a href="/">
                <img src="img/logo.svg" class="logo" alt="">
            </a>
            <a class="btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample" aria-controls="offcanvasRight">
                <i class="ti ti-menu-3"></i>
            </a>
        </div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-body">
            <ul class="menus">
                <li>
                    <a href="#" class="active">HOME</a>
                </li>
                <li>
                    <a href="#">ABOUT US</a>
                </li>
                <li>
                    <a href="#">SERVICES</a>
                </li>
                <li>
                    <a href="#">TESTIMONIALS</a>
                </li>
                <li>
                    <a href="#">GALLERY</a>
                </li>
                <li>
                    <a href="#">CONTACT US</a>
                </li>
            </ul>
            <div>
                <a href="/profile.pdf" class="btn-primary border-gradient border-gradient-green">
                    <span>Download Profile</span>
                    <i class="ti ti-arrow-right"></i>
                </a>
                <a data-bs-dismiss="offcanvas" aria-label="Close" class="close2"><i
                        class="ti ti-square-rounded-x"></i>&nbsp;Close</a>
            </div>
        </div>
    </div>

    <div class="whatsap">
        <a href="#" class="pulse"><i class="ti ti-brand-whatsapp"></i></a>
    </div>
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


    <!-- scroll animation -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css">

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


    <!-- 	event modal -->
    <!-- 	<div id="myModal" class="modal-ev">
        <div class="modal-content">
            <span class="close-2">&times;</span>
            <img src="https://royalberrycatering.com/wp-content/uploads/2025/03/087A9436.webp" class="img-fluid">
        </div>
    </div> -->

    <!--     <div class="page-loader">
        <div class="loading">
            <div class="moving">
            </div>
        </div>
    </div> -->

    <header class="lg-header d-none d-lg-block">
        <div class="border-bottom-white">
            <div class="d-flex d-flex justify-content-between align-ietms-center text-white container">
                <a href="/">
                    <?php
                    // Define the query
                    $args = array(
                        'post_type' => 'brand-logo', // Change to your custom post type or category
                        'posts_per_page' => 1,      // Fetch all logos
                    );

                    $logos_query = new WP_Query($args);

                    if ($logos_query->have_posts()):
                        ?>
                        <?php
                        while ($logos_query->have_posts()):
                            $logos_query->the_post();
                            $header_logo = get_field('header_logo');
                            ?>
                            <img src="<?php echo esc_url($header_logo); ?>" alt="<?php echo esc_attr($header_logo); ?>"
                                class="logo-m">

                            <?php
                        endwhile;
                        ?>
                        <?php
                    endif;

                    // Reset the post data
                    wp_reset_postdata();
                    ?>
                </a>
                <div class="d-flex gap-2 mt-2 mt-lg-0">
                    <a href="tel:+971 56 396 4859" target="_blank">
                        <img src="/wp-content/uploads/2025/04/call.svg" height="32" alt="">
                    </a>
                    <a href="https://www.linkedin.com/company/intercat-hospitality/" target="_blank">
                        <img src="/wp-content/uploads/2025/04/insta-2.svg" height="32" alt="">
                    </a>
                    <a href="https://www.facebook.com/people/Royalberry-by-Purpleberry/61565707981213/" target="_blank">
                        <img src="/wp-content/uploads/2025/04/fb-2.svg" height="32" alt="">
                    </a>
                    <a href="https://www.instagram.com/royalberrybypurpleberry?igsh=eWN2YmR1Y2I5bHdw&utm_source=qr"
                        target="_blank">
                        <img src="/wp-content/uploads/2025/04/instagram-s.svg" height="32" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-between align-items-center">

            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'menu' => 'Primary',
                'menu_class' => 'menus',
            ));
            ?>
            <div class="d-flex">
                <a href="https://royalberrycatering.com/wp-content/uploads/2025/02/RB_Company-profile-2024_F003_compressed_A.pdf"
                    download target="_blank" class="btn-primary border-gradient border-gradient-green">
                    <span>Visit Our Company Profile</span>
                </a>
            </div>
        </div>
    </header>
    <div class="sm-header d-lg-none">
        <div class="head-r d-flex justify-content-between align-items-center">
            <a href="/">
                <?php
                // Define the query
                $args = array(
                    'post_type' => 'brand-logo', // Change to your custom post type or category
                    'posts_per_page' => 1,      // Fetch all logos
                );

                $logos_query = new WP_Query($args);

                if ($logos_query->have_posts()):
                    ?>
                    <?php
                    while ($logos_query->have_posts()):
                        $logos_query->the_post();
                        $header_logo = get_field('header_logo');
                        ?>
                        <img src="<?php echo esc_url($header_logo); ?>" alt="<?php echo esc_attr($header_logo); ?>"
                            class="logo">

                        <?php
                    endwhile;
                    ?>
                    <?php
                endif;

                // Reset the post data
                wp_reset_postdata();
                ?>
            </a>
            <a class="btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample" aria-controls="offcanvasRight">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 6l16 0" />
                    <path d="M4 12l16 0" />
                    <path d="M4 18l16 0" />
                </svg>
            </a>
        </div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-body">
            <ul class="menus">

                <li>
                    <a href="/about-us/">ABOUT US</a>
                </li>
                <li>
                    <a href="/services/">SERVICES</a>
                </li>
                <li>
                    <a href="/testimonials/">TESTIMONIALS</a>
                </li>
                <li>
                    <a href="/gallery/">GALLERY</a>
                </li>
                <li>
                    <a href="/blogs/">BLOGS</a>
                </li>
                <li>
                    <a href="/contact-us/">CONTACT US</a>
                </li>
            </ul>
            <div>
                <a href="https://royalberrycatering.com/wp-content/uploads/2025/02/RB_Company-profile-2024_F003_compressed_A.pdf"
                    target="_blank" class="btn-primary border-gradient border-gradient-green">
                    <span>Visit Our Company Profile</span>

                </a>

                <a data-bs-dismiss="offcanvas" aria-label="Close" class="close2"><i
                        class="ti ti-square-rounded-x"></i>&nbsp;Close</a>
            </div>
        </div>
    </div>

    <div class="whatsap flex-row-reverse">
        <a href="https://wa.me/971563964859" target="_blank" class="pulse">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_172_1761)">
                    <path
                        d="M3 21L4.65 17.2C3.38766 15.408 2.82267 13.217 3.06104 11.0381C3.29942 8.85915 4.32479 6.84211 5.94471 5.36549C7.56463 3.88887 9.66775 3.05418 11.8594 3.01807C14.051 2.98195 16.1805 3.7469 17.8482 5.16934C19.5159 6.59179 20.6071 8.57395 20.9172 10.7438C21.2272 12.9137 20.7347 15.1222 19.5321 16.9547C18.3295 18.7873 16.4994 20.118 14.3854 20.6971C12.2713 21.2762 10.0186 21.0639 8.05 20.1L3 21Z"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M9 10C9 10.1326 9.05268 10.2598 9.14645 10.3536C9.24021 10.4473 9.36739 10.5 9.5 10.5C9.63261 10.5 9.75979 10.4473 9.85355 10.3536C9.94732 10.2598 10 10.1326 10 10V9C10 8.86739 9.94732 8.74021 9.85355 8.64645C9.75979 8.55268 9.63261 8.5 9.5 8.5C9.36739 8.5 9.24021 8.55268 9.14645 8.64645C9.05268 8.74021 9 8.86739 9 9V10ZM9 10C9 11.3261 9.52678 12.5979 10.4645 13.5355C11.4021 14.4732 12.6739 15 14 15M14 15H15C15.1326 15 15.2598 14.9473 15.3536 14.8536C15.4473 14.7598 15.5 14.6326 15.5 14.5C15.5 14.3674 15.4473 14.2402 15.3536 14.1464C15.2598 14.0527 15.1326 14 15 14H14C13.8674 14 13.7402 14.0527 13.6464 14.1464C13.5527 14.2402 13.5 14.3674 13.5 14.5C13.5 14.6326 13.5527 14.7598 13.6464 14.8536C13.7402 14.9473 13.8674 15 14 15Z"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                    <clipPath id="clip0_172_1761">
                        <rect width="24" height="24" fill="white" />
                    </clipPath>
                </defs>
            </svg>

        </a>
        <span>Request a Quote</span>
    </div>
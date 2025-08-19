<?php
/* Template Name: home */
?>
<?php get_header(); ?>

<!-- <div class="home">
<div class="container box text-center">
        <h1 class="h1 text-gradient">Welcome to the
            Exquisite World of Royalberry & Cateriya
            by Intercat Hospitality</h1>
    </div>
<video muted loop autoplay>
<source src="https://assets.codepen.io/6093409/river.mp4" type="video/mp4">
</video>
</div> -->

<!-- BANNER -->
<section class="main-banner">
    <div class="container">

        <?php
        // Define the query
        $args = array(
            'post_type' => 'web_content', // Change to your custom post type or category
            'posts_per_page' => 1,      // Fetch all logos
        );

        $logos_query = new WP_Query($args);

        if ($logos_query->have_posts()):
            ?>
            <?php
            while ($logos_query->have_posts()):
                $logos_query->the_post();
                $banner_title = get_field('banner_title');
                ?>
                <h1 class="h1 text-gradient"><?php echo $banner_title; ?></h1>
                <?php
            endwhile;
            ?>
            <?php
        endif;

        // Reset the post data
        wp_reset_postdata();
        ?>
    </div>
</section>
<!-- END BANNER -->

<!-- WHO WE ARE -->
<section class="padding-top padding-bottom bg-section text-center text-lg-start">
    <div class="container">
        <div class="row">
            <?php
            // Define the query
            $args = array(
                'post_type' => 'web_content', // Change to your custom post type or category
                'posts_per_page' => 1,      // Fetch all logos
            );

            $logos_query = new WP_Query($args);

            if ($logos_query->have_posts()):
                ?>
                <?php
                while ($logos_query->have_posts()):
                    $logos_query->the_post();
                    $banner_title = get_field('banner_title');
                    $who_we_are_title = get_field('who_we_are_title');
                    $who_we_are_sub_title = get_field('who_we_are_sub_title');
                    $who_we_are_paragraph = get_field('who_we_are_paragraph');
                    $who_we_are_button = get_field('who_we_are_button');
                    $who_we_are_image_1 = get_field('who_we_are_image_1');
                    $who_we_are_image_2 = get_field('who_we_are_image_2');
                    ?>
                    <div class="col-lg-7">
                        <h2 class="h2 text-pink"><?php echo $who_we_are_title; ?></h2>
                        <p class="text-white"><?php echo $who_we_are_sub_title; ?></p>
                        <p class="text-brown"><?php echo $who_we_are_paragraph; ?></p>
                        <div class="d-flex mt-4 justify-content-center justify-content-lg-start">
                            <a href="/about-us/" class="btn-light"><?php echo $who_we_are_button; ?></a>
                        </div>

                    </div>
                    <div class="col-lg-5 d-flex gap-4 mt-4 mt-lg-0">
                        <div class="box-img">
                            <!-- <img src="/wp-content/uploads/2025/02/who_we_are_1_2x.webp" alt=""> -->
                            <img src="<?php echo esc_url($who_we_are_image_1); ?>"
                                alt="<?php echo esc_attr($who_we_are_image_1); ?>">
                        </div>
                        <div class="box-img">
                            <!-- <img src="/wp-content/uploads/2025/02/who_we_are_2_2x.webp" alt=""> -->
                            <img src="<?php echo esc_url($who_we_are_image_2); ?>"
                                alt="<?php echo esc_attr($who_we_are_image_2); ?>">
                        </div>
                    </div>
                    <?php
                endwhile;
                ?>
                <?php
            endif;

            // Reset the post data
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<!-- WHO WE ARE -->

<!-- TEAM -->
<!-- <section class="padding-bottom padding-top bg-gradient3 extra-b-padding1">
    <div class="container text-center pb-5">
        <h2 class="h2 text-pink">Meet Our Team</h2>
        <div class="devider-img mt-4">
            <img src="/wp-content/uploads/2025/02/devider.svg" alt="">
        </div>
    </div>

    <div class="container">
        <?php
        // Define the query
        $args = array(
            'post_type' => 'meet_our_team', // Change to your custom post type or 'post' for default posts
            'posts_per_page' => -1,     // Number of posts to display
        );

        $team_query = new WP_Query($args);

        if ($team_query->have_posts()):
            ?>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <?php
                    $index = 0;
                    while ($team_query->have_posts()):
                        $team_query->the_post();
                        $active_class = ($index === 0) ? 'active' : '';
                        ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="<?php echo $index; ?>" class="<?php echo $active_class; ?>"
                            aria-label="Slide <?php echo $index + 1; ?>"></button>
                        <?php
                        $index++;
                    endwhile;
                    ?>
                </div>
                <div class="carousel-inner">
                    <?php
                    $index = 0;
                    while ($team_query->have_posts()):
                        $team_query->the_post();
                        $active_class = ($index === 0) ? 'active' : '';
                        $image_url = get_field('image_url');
                        $name = get_the_title();
                        $position = get_field('position'); // Assuming you're using ACF for the position field
                        $description = get_field('description');
                        ?>
                        <div class="carousel-item <?php echo $active_class; ?>">
                            <div class="row g-0"  >
                                <div class="col-lg-5">
                                    <div class="team-pic">
                                        <img src="<?php echo $image_url; ?>" alt="<?php echo $name; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="white-box d-flex flex-column justify-content-center">
                                        <h3><?php echo $name; ?></h3>
                                        <span class="fs-24 mb-4 d-flex"><?php echo $position; ?></span>
                                        <p><?php echo $description; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $index++;
                    endwhile;
                    ?>
                </div>
            </div>
            <?php
        else:
            echo '<p class="w-100 d-flex justify-content-center">No team members found.</p>';
        endif;

        // Reset the post data
        wp_reset_postdata();
        ?>
    </div>


</section> -->
<!-- TEAM -->

<!-- HERO -->
<section class="padding-bottom padding-top bg-here d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">
        <div class="loading mb-4">
            <div class="moving">
            </div>
        </div>
        <?php
        // Define the query
        $args = array(
            'post_type' => 'web_content', // Change to your custom post type or category
            'posts_per_page' => 1,      // Fetch all logos
        );

        $logos_query = new WP_Query($args);

        if ($logos_query->have_posts()):
            ?>
            <?php
            while ($logos_query->have_posts()):
                $logos_query->the_post();
                $hero_title = get_field('hero_title');
                ?>
                <h2 class="text-gradient text-center">
                    <?php echo $hero_title; ?>
                    <!-- Celebrate your special day with a feast fit for royalty, where global flavors blend into a culinary
                    masterpiece to enchant and delight. -->
                </h2>
                <?php
            endwhile;
            ?>
            <?php
        endif;

        // Reset the post data
        wp_reset_postdata();
        ?>
    </div>
</section>
<!-- HERO -->

<!-- Experience Excellence With Us -->
<section class="padding-bottom padding-top bg-gradient3 extra-b-padding">
    <div class="container text-center pb-5">
        <h2 class="h2 text-pink">Experience Excellence With Us</h2>
        <div class="devider-img mt-4">
            <img src="/wp-content/uploads/2025/02/devider.svg" alt="">
        </div>
    </div>
    <div class="container">
        <?php
        // Define the query
        $args = array(
            'post_type' => 'services_royal', // Change to your custom post type or 'post' for default posts
            'posts_per_page' => -1,         // Fetch all posts
        );

        $services_query = new WP_Query($args);

        if ($services_query->have_posts()):
            ?>
            <div class="row">
                <?php
                while ($services_query->have_posts()):
                    $services_query->the_post();
                    $image_url = get_field('image_url');
                    $title = get_the_title();
                    $description = get_the_content();
                    $image_1 = get_field('image_1');
                    $link = get_permalink(); // Link to the service details page
                    ?>
                    <div class="col-lg-4 col-sm-6 col-12 mb-4">
                        <div class="box-service">
                            <img src="<?php echo $image_1; ?>" alt="<?php echo $title; ?>">
                            <div class="box-title">
                                <h4 class="text-gradient"><?php echo $title; ?></h4>
                            </div>
                            <div class="overlay-box flex-column align-items-baseline justify-content-between">
                                <div>
                                    <h4 class="text-gradient"><?php echo $title; ?></h4>
                                    <div class="content-s">
                                        <p>
                                            <?php echo wp_trim_words(get_the_content(), 35); ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="contents w-100">
                                    <div class="action-s d-flex justify-content-end w-100">
                                        <a href="/services/" class="btn-action pulse2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M5 12l14 0" />
                                                <path d="M13 18l6 -6" />
                                                <path d="M13 6l6 6" />
                                            </svg>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>
            <?php
        else:
            echo '<p class="w-100 d-flex justify-content-center">No services found.</p>';
        endif;

        // Reset the post data
        wp_reset_postdata();
        ?>
    </div>
</section>
<!-- Experience Excellence With Us -->

<!-- GALLERY -->
<section class="padding-bottom padding-top bg-gallery">
    <div class="container text-center pb-5">
        <h2 class="h2 text-white">Our Gallery</h2>
        <div class="devider-img mt-4">
            <img src="/wp-content/uploads/2025/02/devider.svg" alt="">
        </div>
    </div>
    <div class="container">
        <?php
        $args = array(
            'post_type' => 'gallery_images',
            'posts_per_page' => 6, // get all posts
        );

        $gallery_query = new WP_Query($args);

        if ($gallery_query->have_posts()):
            ?>
            <div class="gallery">
                <?php
                $index = 1;
                while ($gallery_query->have_posts()):
                    $gallery_query->the_post();

                    $image_thumb = get_field('image_thumb');
                    $alt_text = get_the_title();

                    if ($image_thumb):
                        ?>
                        <div class="gallery-item">
                            <img src="<?php echo esc_url($image_thumb); ?>" alt="<?php echo esc_attr($alt_text); ?>"
                                onclick="openLightbox('gallery'); currentSlide(<?php echo $index; ?>, 'gallery')">
                        </div>
                        <?php
                        $index++;
                    endif;
                endwhile;
                ?>
            </div>

            <!-- Lightbox -->
            <div id="lightbox-gallery" class="lightbox" style="display: none;">
                <span class="close" onclick="closeLightbox('gallery')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M18 6l-12 12" />
                        <path d="M6 6l12 12" />
                    </svg>
                </span>

                <div class="lightbox-content">
                    <?php
                    // Reset the loop to rebuild lightbox slides
                    $gallery_query->rewind_posts();
                    while ($gallery_query->have_posts()):
                        $gallery_query->the_post();

                        $image_details = get_field('image_details');
                        $alt_text = get_the_title();

                        if ($image_details):
                            ?>
                            <div class="lightbox-slide">
                                <img src="<?php echo esc_url($image_details); ?>" alt="<?php echo esc_attr($alt_text); ?>">
                            </div>
                            <?php
                        endif;
                    endwhile;
                    ?>
                </div>

                <a class="prev" onclick="changeSlide(-1, 'gallery')">
                    <div class="box-control">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l14 0" />
                            <path d="M5 12l6 6" />
                            <path d="M5 12l6 -6" />
                        </svg>
                    </div>

                </a>
                <a class="next" onclick="changeSlide(1, 'gallery')">
                    <div class="box-control">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l14 0" />
                            <path d="M13 18l6 -6" />
                            <path d="M13 6l6 6" />
                        </svg>
                    </div>
                </a>
            </div>

            <?php
        else:
            echo '<p class="w-100 d-flex justify-content-center">No gallery items found.</p>';
        endif;

        wp_reset_postdata();
        ?>

    </div>
    <div class="d-flex mt-5 justify-content-center">
        <a href="/luxury-indian-catering-in-dubai/" class="btn-primary border-gradient border-gradient-green">
            <span>Explore More</span>
        </a>
    </div>
</section>
<!-- GALLERY -->

<!-- TESTIMONIALS -->
<!-- <section class="padding-bottom padding-top bg-gradient3 testimonial extra-b-padding1">
    <div class="container text-center pb-5">
        <h2 class="h2 text-pink">Testimonials</h2>
        <div class="devider-img mt-4">
            <img src="/wp-content/uploads/2025/02/devider.svg" alt="">
        </div>
    </div>

    <div class="container">
        <?php
        // Define the query
        $args = array(
            'post_type' => 'testimonials_royal', // Change to your custom post type or category
            'posts_per_page' => 3,            // Fetch all testimonials
        );

        $testimonials_query = new WP_Query($args);

        if ($testimonials_query->have_posts()):
            ?>

            <div class="row">

                <?php
                $index = 0;
                while ($testimonials_query->have_posts()):
                    $testimonials_query->the_post();
                    $testimonial_content = get_field('testimonial_content');
                    $testimonial_author = get_the_title();
                    $testimonial_role = get_field('role'); // Assuming you're using ACF for the role field
                    $testimonial_image = get_field('testimonial_image');
                    $active_class = ($index % 3 === 0) ? 'active' : '';

                    if ($index % 3 === 0):
                        echo ($index > 0) ? '</div></div>' : ''; // Close previous slide if not the first
                        echo '<div class="carousel-item ' . $active_class . '"><div class="row">';
                    endif;
                    ?>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="box-testimonial">
                            <div class="d-flex gap-1 starts mb-3">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <img src="/wp-content/uploads/2025/02/star.webp" alt="Star">
                                <?php endfor; ?>
                            </div>
                            <div>
                                <p><?php echo esc_html($testimonial_content); ?></p>
                            </div>
                            <div class="d-flex mt-3 gap-3 align-items-center">
                                <div class="image-testi">
                                    <img src="<?php echo esc_url($testimonial_image); ?>"
                                        alt="<?php echo esc_attr($testimonial_author); ?>">
                                </div>
                                <div>
                                    <h5 class="m-0"><?php echo esc_html($testimonial_author); ?></h5>
                                    <span><?php echo esc_html($testimonial_role); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $index++;
                endwhile;
                echo '</div></div>'; // Close the last slide
                ?>
                <?php
        else:
            echo '<p>No testimonials found.</p>';
        endif;

        // Reset the post data
        wp_reset_postdata();
        ?>
        </div>

    </div>
</section> -->
<!-- TESTIMONIALS -->

<section class="padding-bottom padding-top">
    <?php
    // Define the query
    $args = array(
        'post_type' => 'web_content', // Change to your custom post type or category
        'posts_per_page' => 1,      // Fetch all logos
    );

    $logos_query = new WP_Query($args);

    if ($logos_query->have_posts()):
        ?>
        <?php
        while ($logos_query->have_posts()):
            $logos_query->the_post();
            $what_are_you_looking_title = get_field('what_are_you_looking_title');
            $intercat_title = get_field('intercat_title');
            $intercat_logo = get_field('intercat_logo');
            $intercat_paragraph = get_field('intercat_paragraph');
            $cateria_title = get_field('cateria_title');
            $cateria_logo = get_field('cateria_logo');
            $cateria_paragraph = get_field('cateria_paragraph');
            ?>
            <div class="container text-center pb-5">
                <h2 class="h2 text-pink"><?php echo $what_are_you_looking_title; ?></h2>
                <div class="devider-img mt-4">
                    <img src="/wp-content/uploads/2025/02/devider.svg" alt="">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="intercat d-flex justify-content-center align-items-center bg-intercat">
                            <a href="https://intercat-hospitality.com/"
                                class="w-100 h-100 d-flex flex-column justify-content-center" target="_blank">
                                <img src="<?php echo esc_url($intercat_logo); ?>" alt="" class="mb-4">
                                <h2><?php echo $intercat_title; ?></h2>
                                <p><?php echo $intercat_paragraph; ?></p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cateria d-flex justify-content-center align-items-center bg-cateria">
                            <a href="https://intercat-hospitality.com/cateriya-homepage/"
                                class="w-100 h-100 d-flex flex-column justify-content-center" target="_blank">
                                <img src="<?php echo esc_url($cateria_logo); ?>" alt="" class="mb-4">
                                <h2><?php echo $cateria_title; ?></h2>
                                <p><?php echo $cateria_paragraph; ?></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        endwhile;
        ?>
        </div>
        <?php
    endif;

    // Reset the post data
    wp_reset_postdata();
    ?>
</section>
<!-- LOGO SLIDER -->
<section class="padding-bottom padding-top bg-gradient3">
    <div class="container text-center padding-bottom">
        <h2 class="h2 text-pink">Our Clients</h2>
        <div class="devider-img mt-4">
            <img src="/wp-content/uploads/2025/02/devider.svg" alt="">
        </div>
    </div>

    <div class="container">
        <div class="owl-carousel owl-theme">

            <?php
            // Define the query
            $args = array(
                'post_type' => 'our_clients', // Change to your custom post type or category
                'posts_per_page' => -1,      // Fetch all logos
            );

            $logos_query = new WP_Query($args);

            if ($logos_query->have_posts()):
                ?>
                <?php
                while ($logos_query->have_posts()):
                    $logos_query->the_post();
                    $logo_url = get_field('logo_url');
                    $logo_alt = get_the_title();
                    ?>
                    <div class="item">


                        <div class="logo">
                            <img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr($logo_alt); ?>">
                        </div>


                    </div>
                    <?php
                endwhile;
                ?>
                <?php
            endif;

            // Reset the post data
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<!-- LOGO SLIDER -->


<?php get_footer(); ?>
<?php
/* Template Name: about */
?>
<?php get_header(); ?>
<!-- BANNER -->
<section class="main-banner inner">
    <div
        class="container d-flex flex-column flex-lg-row justify-content-center align-items-center justify-content-lg-between">
        <h1 class="h1 text-gradient">About Us</h1>
        <div class="d-flex align-items-center breadcums gap-2">
            <a href="/">Home</a>
            <i>/</i>
            <a href="#" class="active">About Us</a>
        </div>
    </div>
</section>
<!-- END BANNER -->

<!-- TESTIMONIALS -->
<section class="padding-bottom padding-top testimonial">
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
                $about_title = get_field('about_title');
                $about_paragraph = get_field('about_paragraph');
                $about_image = get_field('about_image');
                ?>
                <div class="row flex-column-reverse flex-lg-row align-items-center">
                    <div class="col-lg-7">
                        <h2 class="h2 text-pink mb-4 mb-lg-5"  ><?php echo $about_title; ?></h2>
                        <p class="mb-3"><?php echo $about_paragraph; ?></p>
                    </div>
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <img src="<?php echo esc_url($about_image); ?>" alt="" class="img-fluid">
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


</section>
<!-- TESTIMONIALS -->

<section class="padding-bottom padding-top bg-gradient3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
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
                        $our_mission_title = get_field('our_mission_title');
                        $our_mission_paragraph = get_field('our_mission_paragraph');
                        ?>

                        <div class="v-box bg-none">
                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="icon-box-2">
                                    <img src="/wp-content/uploads/2025/02/mission.svg" alt="">
                                </div>
                                <div>
                                    <h4 class="h3 text-pink"><?php echo $our_mission_title; ?></h4>
                                </div>
                            </div>
                            <p>
                                <?php echo $our_mission_paragraph; ?>
                            </p>
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
            <div class="col-lg-6">
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
                        $our_vision_title = get_field('our_vision_title');
                        $our_vision_paragraph = get_field('our_vision_paragraph');
                        ?>
                        <div class="v-box bg-none h-100">
                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="icon-box-2">
                                    <img src="/wp-content/uploads/2025/02/vission.svg" alt="">
                                </div>
                                <div>
                                    <h4 class="h3 text-pink"><?php echo $our_vision_title; ?></h4>
                                </div>
                            </div>
                            <p>
                                <?php echo $our_vision_paragraph; ?>
                            </p>
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
    </div>
</section>

<section class="padding-bottom padding-top bg-gallery">
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
            $our_values_title = get_field('our_values_title');
            $our_values_box_title_1 = get_field('our_values_box_title_1');
            $our_values_box_paragraph_1 = get_field('our_values_box_paragraph_1');
            $our_values_box_title_2 = get_field('our_values_box_title_2');
            $our_values_box_paragraph_2 = get_field('our_values_box_paragraph_2');
            $our_values_box_title_3 = get_field('our_values_box_title_3');
            $our_values_box_paragraph_3 = get_field('our_values_box_paragraph_3');
            $our_values_box_title_4 = get_field('our_values_box_title_4');
            $our_values_box_paragraph_4 = get_field('our_values_box_paragraph_4');

            ?>
            <div class="container text-center pb-5">
                <h2 class="h2 text-gradient"  ><?php echo $our_values_title; ?></h2>
                <div class="devider-img mt-4"  >
                    <img src="/wp-content/uploads/2025/02/devider.svg" alt="">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="box-gr p-4">
                            <h3 class="text-gradient mb-3 h4"><?php echo $our_values_box_title_1; ?></h3>
                            <p><?php echo $our_values_box_paragraph_1; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box-gr p-4">
                            <h3 class="text-gradient mb-3 h4"><?php echo $our_values_box_title_2; ?></h3>
                            <p><?php echo $our_values_box_paragraph_2; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box-gr p-4">
                            <h3 class="text-gradient mb-3 h4"><?php echo $our_values_box_title_3; ?></h3>
                            <p><?php echo $our_values_box_paragraph_3; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box-gr p-4">
                            <h3 class="text-gradient mb-3 h4"><?php echo $our_values_box_title_4; ?></h3>
                            <p><?php echo $our_values_box_paragraph_4; ?></p>
                        </div>
                    </div>
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
</section>

<!-- <section class="padding-bottom padding-top">
    <div class="container text-center pb-5">
        <h2 class="h2 text-pink"  >Meet Our Team</h2>
        <div class="devider-img mt-4"  >
            <img src="/wp-content/uploads/2025/02/devider.svg" alt="">
        </div>
    </div>
    <div class="container">
        <?php
        // Define the query
        $args = array(
            'post_type' => 'meet_our_team', // Change to your custom post type or category
            'posts_per_page' => -1,      // Fetch all logos
        );

        $logos_query = new WP_Query($args);

        if ($logos_query->have_posts()):
            ?>
            <div class="row">
                <?php
                while ($logos_query->have_posts()):
                    $logos_query->the_post();
                    $image_url = get_field('image_url');
                    $name = get_the_title();
                    $position = get_field('position'); // Assuming you're using ACF for the position field
                    $description = get_field('description');
                    ?>

                    <div class="col-lg-4 mb-4">
                        <div class="team-avatar">
                            <img src="<?php echo $image_url; ?>" alt="<?php echo $name; ?>" alt="">
                        </div>
                        <div class="p-4 up-box">
                            <div class="team-details p-3"  >
                                <h5 class="m-0"><?php echo $name; ?></h5>
                                <p class="m-0"><?php echo $position; ?></p>
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
    </div>
</section> -->

<section class="padding-bottom padding-top bg-gradient3 extra-b-padding1">
    <div class="container text-center pb-5">
        <h2 class="h2 text-pink"  >Meet Our Team</h2>
        <div class="devider-img mt-4"  >
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


</section>

<section class="padding-bottom padding-top bg-white">
    <div class="container text-center pb-5">
        <h2 class="h2 text-pink"  >Our Operations & Global Network</h2>
        <div class="devider-img mt-4"  >
            <img src="/wp-content/uploads/2025/02/devider.svg" alt="">
        </div>
    </div>
    <div class="container">
        <section class="abt-tabs">
            <div class="tabs">
                <input type="radio" name="tab" id="tab1" checked>
                <label for="tab1">
                    <img src="https://royalberrycatering.com/wp-content/uploads/2025/04/australia_2x.webp" alt="">
                </label>

                <input type="radio" name="tab" id="tab2">
                <label for="tab2">
                    <img src="https://royalberrycatering.com/wp-content/uploads/2025/04/europe_2x.webp" alt="">
                </label>

                <input type="radio" name="tab" id="tab3">
                <label for="tab3">
                    <img src="https://royalberrycatering.com/wp-content/uploads/2025/04/thailand_2x.webp" alt="">
                </label>

                <input type="radio" name="tab" id="tab4">
                <label for="tab4">
                    <img src="https://royalberrycatering.com/wp-content/uploads/2025/04/nepal_2x.webp" alt="">
                </label>

                <input type="radio" name="tab" id="tab5">
                <label for="tab5">
                    <img src="https://royalberrycatering.com/wp-content/uploads/2025/04/usa_2x.webp" alt="">
                </label>

                <input type="radio" name="tab" id="tab6">
                <label for="tab6">
                    <img src="https://royalberrycatering.com/wp-content/uploads/2025/04/egypt_2x.webp" alt="">
                </label>

                <input type="radio" name="tab" id="tab7">
                <label for="tab7">
                    <img src="https://royalberrycatering.com/wp-content/uploads/2025/04/turkey_2x.webp" alt="">
                </label>

                <input type="radio" name="tab" id="tab8">
                <label for="tab8">
                    <img src="https://royalberrycatering.com/wp-content/uploads/2025/04/baku_2x.webp" alt="">
                </label>

                <input type="radio" name="tab" id="tab9">
                <label for="tab9">
                    <img src="https://royalberrycatering.com/wp-content/uploads/2025/04/sri_lanka_2x.webp" alt="">
                </label>

                <input type="radio" name="tab" id="tab10">
                <label for="tab10">
                    <img src="https://royalberrycatering.com/wp-content/uploads/2025/04/vietnam_2x.webp" alt="">
                </label>

                <input type="radio" name="tab" id="tab11">
                <label for="tab11">
                    <img src="https://royalberrycatering.com/wp-content/uploads/2025/04/uae_2x.webp" alt="">
                </label>

                <!-- Content Sections -->
                <div class="tab-content2" id="content1">
                    <h2 class="d-flex mb-4">Australia</h2>
                    <ul>
                        <li>
                            W Hotel Darling Harbor – Sydney
                        </li>
                        <li>
                            Sofitel Darling Harbor – Sydney
                        </li>
                        <li>
                            Hyatt – Melbourne
                        </li>
                        <li>
                            JW Marriot’s – Gold coast
                        </li>
                        <li>
                            Hilton – Queens Town – NZ
                        </li>
                        <li>
                            The Sky View Tower Hotel – Auckland
                        </li>
                    </ul>
                </div>

                <div class="tab-content2" id="content2">
                    <h2 class="d-flex mb-4">Europe</h2>
                    <ul>
                        <li>
                            Kempinski – Budapest
                        </li>
                        <li>
                            Corinthia Hotel – Budapest
                        </li>
                        <li>
                            Hilton Vienna – Austria
                        </li>
                        <li>
                            Sheraton – Milan
                        </li>
                        <li>
                            Hyatt Regency – Paris
                        </li>
                    </ul>
                </div>
                <div class="tab-content2" id="content3">
                    <h2 class="d-flex mb-4">Thailand</h2>
                    <ul>
                        <li>
                            Sheraton – Hua Hin
                        </li>
                        <li>
                            Dusit Thani – Hua Hin

                        </li>
                        <li>
                            Royal cliff – Pattaya
                        </li>
                        <li>
                            Avani – Khao Lak
                        </li>
                        <li>
                            Marriot’s – Phuket
                        </li>
                    </ul>
                </div>
                <div class="tab-content2" id="content4">
                    <h2 class="d-flex mb-4">Nepal</h2>
                    <ul>
                        <li>
                            Hyatt Regency – Katmandu
                        </li>
                    </ul>
                </div>
                <div class="tab-content2" id="content5">
                    <h2 class="d-flex mb-4">USA</h2>
                    <ul>
                        <li>
                            W Hotel – Hollywood
                        </li>
                        <li>
                            Bellagio Hotel – Las Vegas
                        </li>
                    </ul>
                </div>
                <div class="tab-content2" id="content6">
                    <h2 class="d-flex mb-4">Egypt</h2>
                    <ul>
                        <li>
                            Rixos – Shamel Sheikh
                        </li>
                    </ul>
                </div>
                <div class="tab-content2" id="content7">
                    <h2 class="d-flex mb-4">Turkey</h2>
                    <ul>
                        <li>Mardan Palace – Antalya</li>
                        <li>Regnum – Antalya</li>
                        <li>Be Premium – Bodrum</li>
                    </ul>
                </div>
                <div class="tab-content2" id="content8">
                    <h2 class="d-flex mb-4">Baku</h2>
                    <ul>
                        <li>JW Marriot’s</li>
                        <li>Ritz Carlton</li>
                    </ul>
                </div>
                <div class="tab-content2" id="content9">
                    <h2 class="d-flex mb-4">Sri Lanka</h2>
                    <ul>
                        <li> Shangri-La – Hambantota</li>
                        <li>Hilton – Colombo</li>
                    </ul>
                </div>
                <div class="tab-content2" id="content10">
                    <h2 class="d-flex mb-4">Vietnam</h2>
                    <ul>
                        <li>Marriot’s – Danang</li>
                        <li>Vinpearl Landmark Hotel – Ho chin Minh city</li>
                    </ul>
                </div>
                <div class="tab-content2" id="content11">
                    <h2 class="d-flex mb-4">UAE</h2>
                    <ul>
                        <li>
                            Waldorf Astoria – RAK</li>
                        <li>Intercontinental Hotel – RAK</li>
                        <li>Intercontinental – Fujihara</li>
                        <li>Fairmount – Abu Dhabi</li>
                        <li>Emirates Palace – Abu Dhabi</li>
                        <li>Taj Exotica – Palm Dubai</li>
                        <li>Raffles – Palm Dubai</li>
                        <li>Le Meriden – Dubai</li>
                        <li>Zabeel Sharia – Dubai</li>
                        <li>Atlantis – Palm Dubai</li>
                        <li>Cesar Palace – Dubai</li>
                        <li>Fairmont – Ajman</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    </div>
</section>
<!-- LOGO SLIDER -->
<section class="padding-bottom padding-top bg-gradient3">
    <div class="container text-center padding-bottom">
        <h2 class="h2 text-pink"  >Our Clients</h2>
        <div class="devider-img mt-4"  >
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
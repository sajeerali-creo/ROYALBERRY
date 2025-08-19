<?php
/* Template Name: services */
?>
<?php get_header(); ?>

<!-- BANNER -->
<section class="main-banner inner">
    <div
        class="container d-flex flex-column flex-lg-row justify-content-center align-items-center justify-content-lg-between">
        <h1 class="h1 text-gradient"  >Services</h1>
        <div class="d-flex align-items-center breadcums gap-2">
            <a href="/">Home</a>
            <a href="#" class="active">/ Services</a>
        </div>
    </div>
</section>
<!-- END BANNER -->

<!-- TESTIMONIALS -->
<section class="padding-bottom padding-top">
    <div class="container">
        <div class="row">

            <?php
            // Define the query
            $args = array(
                'post_type' => 'services_royal', // Change to your custom post type or 'post' for default posts
                'posts_per_page' => -1,         // Fetch all posts
            );

            $services_query = new WP_Query($args);

            if ($services_query->have_posts()):
                ?>

                <?php
                while ($services_query->have_posts()):
                    $services_query->the_post();
                    $image_url = get_field('image_url');
                    $title = get_the_title();
                    $description = get_the_content();
                    $menu_download = get_field('menu_download');
                    ?>

                    <div class="col-lg-6 mb-4"  >
                        <div class="service-box">
                            <div class="service-image mb-4">
                                <?php
                                // Get images from ACF (all return type: URL)
                                $image_1 = get_field('image_1');
                                $image_2 = get_field('image_2');
                                $image_3 = get_field('image_3');
                                $image_4 = get_field('image_4');

                                // Filter out empty ones
                                $images = array_filter([$image_1, $image_2, $image_3, $image_4]);

                                // Unique carousel ID for each post
                                $carousel_id = 'carousel-' . get_the_ID();
                                ?>

                                <?php if (!empty($images)): ?>
                                    <div id="<?php echo $carousel_id; ?>" class="carousel slide" data-bs-ride="carousel">

                                        <!-- Indicators -->
                                        <div class="carousel-indicators">
                                            <?php foreach ($images as $index => $img): ?>
                                                <button type="button" data-bs-target="#<?php echo $carousel_id; ?>"
                                                    data-bs-slide-to="<?php echo $index; ?>"
                                                    class="<?php echo $index === 0 ? 'active' : ''; ?>"
                                                    aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                                                    aria-label="Slide <?php echo $index + 1; ?>">
                                                </button>
                                            <?php endforeach; ?>
                                        </div>

                                        <!-- Slides -->
                                        <div class="carousel-inner">
                                            <?php foreach ($images as $index => $img): ?>
                                                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                                    <img src="<?php echo esc_url($img); ?>" class="d-block w-100"
                                                        alt="Slide <?php echo $index + 1; ?>">
                                                </div>
                                            <?php endforeach; ?>
                                        </div>

                                        <!-- Controls -->
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#<?php echo $carousel_id; ?>" data-bs-slide="prev">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#<?php echo $carousel_id; ?>" data-bs-slide="next">
                                           <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M13 18l6 -6" /><path d="M13 6l6 6" /></svg>
                                        </button>

                                    </div>
                                <?php endif; ?>


                            </div>
                            <h3 class="h4 text-pink"><?php echo $title; ?></h3>
                            <p>
                                <?php echo get_the_content(); ?>
                            </p>
                            <div class="d-flex mt-4 gap-2">
                                <a href="https://wa.me/+971563964859" target="_blank"
                                    class="btn-primary border-gradient border-gradient-green">
                                    <span>Request a Quote</span>
                                </a>
                                <a href="<?php echo $menu_download; ?>" target="_blank" download
                                    class="btn-primary border-gradient border-gradient-green">
                                    <span>Download Menu</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                ?>
                <?php
            else:
                echo '<p class="w-100 d-flex justify-content-center">No services found.</p>';
            endif;

            // Reset the post data
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<!-- TESTIMONIALS -->
<!-- GALLERY -->
<section class="padding-bottom padding-top bg-gallery">
    <div class="container text-center pb-5">
        <h2 class="h2 text-white"  >Our Gallery</h2>
        <div class="devider-img mt-4"  >
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
                        <div class="gallery-item"  >
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
        <a href="/gallery" class="btn-primary border-gradient border-gradient-green">
            <span>Explore More</span>
        </a>
    </div>
</section>
<!-- GALLERY -->
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
<?php
/* Template Name: testimonilas */
?>
<?php get_header(); ?>

<!-- BANNER -->
<section class="main-banner inner">
    <div
        class="container d-flex flex-column flex-lg-row justify-content-center align-items-center justify-content-lg-between">
        <h1 class="h1 text-gradient"  >Testimonials</h1>
        <div class="d-flex align-items-center breadcums gap-2">
            <a href="/">Home</a>
           <i>/</i>
            <a href="#" class="active">Testimonials</a>
        </div>
    </div>
</section>
<!-- END BANNER -->




<section class="padding-bottom padding-top">
<div class="container text-center pb-5">
        <h2 class="h2 text-pink"  >Real Success Stories of Transformation!</h2>
        <div class="devider-img mt-4"  >
            <img src="/wp-content/uploads/2025/02/devider.svg" alt="">
        </div>
    </div>
    <div class="container">
        <div class="testimonial-wrapper">
            <button class="slider-btn prev" onclick="slideTestimonials(-1)"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l4 4" /><path d="M5 12l4 -4" /></svg></button>

            <div class="testimonial-slider" id="testimonialSlider">
                <?php
                $query = new WP_Query([
                    'post_type' => 'testimonials_royal',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                ]);
                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post();
                        $author = get_the_title();
                        $role = get_field('role');
                        $content = get_field('testimonial_content');
                        $image = get_field('testimonial_image');
                        ?>
                        <div class="testimonial-card">
                            <?php
                            // Get images from ACF (all return type: URL)
                            $image_1 = get_field('image_1');
                            $image_2 = get_field('image_2');
                            $image_3 = get_field('image_3');
                            $image_4 = get_field('image_4');
                            $service_url = get_field('service_url');
                            $button_label = get_field('button_label');

                            // Filter out empty ones
                            $images = array_filter([$image_1, $image_2, $image_3, $image_4]);

                            // Unique carousel ID for each post
                            $carousel_id = 'carousel-' . get_the_ID();
                            ?>

                            <?php if (!empty($images)): ?>
                                <div id="<?php echo $carousel_id; ?>" class="carousel slide" data-bs-ride="carousel">


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
                            <div class="content"><?php echo esc_html($content); ?></div>
                            <div class="author">
                                <?php if ($image): ?>
                                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($author); ?>">
                                <?php endif; ?>
                                <div>
                                    <strong><?php echo esc_html($author); ?></strong><br>
                                    <small><?php echo esc_html($role); ?></small>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="<?php echo esc_html($service_url); ?>" target="_blank"
                                    class="btn-primary border-gradient border-gradient-green">
                                    <span><?php echo esc_html($button_label); ?></span>

                                </a>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>

            <button class="slider-btn next" onclick="slideTestimonials(1)"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M15 16l4 -4" /><path d="M15 8l4 4" /></svg></button>
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
<?php
/* Template Name: blog */
?>
<?php get_header(); ?>

<!-- BANNER -->
<section class="main-banner inner">
    <div
        class="container d-flex flex-column flex-lg-row justify-content-center align-items-center justify-content-lg-between">
        <h1 class="h1 text-gradient"  >Blogs</h1>
        <div class="d-flex align-items-center breadcums gap-2">
            <a href="/">Home</a>
            <i>/</i>
            <a href="/testimonials" class="active">Blogs</a>
        </div>
    </div>
</section>
<!-- END BANNER -->

<!-- TESTIMONIALS -->
<section class="padding-bottom padding-top testimonial extra-b-padding1">
    <div class="container pb-5">
        <div class="row">

            <?php
            $args = array('post_type' => 'blog_post');
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()): ?>
                <?php while ($the_query->have_posts()):
                    $the_query->the_post(); ?>

                    <div class="col-lg-4 col-md-6 mb-4"  >
                        <div class="blog-box p-4 d-flex gap-3 flex-column">
                            <a href="<?php the_permalink(); ?>">

                                <?php the_post_thumbnail('full', array("class" => "blog-image rounded-3")); ?>

                                <h3 class="h5 text-dark mt-3"  ><?php echo get_the_title(); ?></h3>

                                <!-- <p class="content-blog"><?php echo wp_trim_words(get_the_content(), 20); ?></p> -->
                                <a href="<?php the_permalink(); ?>"
                                    class="btn-primary border-gradient border-gradient-green">more</a>
                            </a>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p>
                    <?php _e('Sorry, no posts matched your criteria.'); ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- TESTIMONIALS -->

<?php get_footer(); ?>
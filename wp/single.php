<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
<?php get_header(); ?>

<!-- BANNER -->
<section class="main-banner inner">
    <div
        class="container d-flex flex-column flex-lg-row justify-content-center align-items-center justify-content-lg-between">
        <h1 class="h1 text-gradient"  >Blog Details</h1>
        <div class="d-flex align-items-center breadcums gap-2">
            <a href="/">Home</a>
            <i>/</i>
            <a href="/blog">Blog</a>
            <i>/</i>
            <a href="#" class="active">Details</a>
        </div>
    </div>
</section>

<section class="pt-4 pt-lg-5 padding-bottom">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <span
                    class="text-gradient-small fs-16 mt-4 d-block font-weight-600"><?php echo get_post_meta($post->ID, 'label', true); ?></span>
                <h4 class="fs-2 font-weight-600 mt-2 text-dark"><?php echo get_the_title(); ?></h4>
                <span class="text-dark fs-16 opacity-75 d-block"><?php the_time('j F, Y') ?></span>
            </div>
            <div class="row mx-0 px-0">
                <div class="col-lg-12 mb-5">
                    <div class="fs-16 mt-3 blog-desc">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
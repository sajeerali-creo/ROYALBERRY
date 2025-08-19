<?php
/* Template Name: projects */
?>
<?php get_header(); ?>

 <!-- Banner -->
 <section class="css-selector inner-banner">
        <div class="container-xxl text-center">
            <h1 class="text-white">Success Projects</h1>
            <h4 class="h5 text-white opacity-50"  >Here are some of my selected works I have done lately. Feel free to
                check them out.</h4>
        </div>
    </section>


    <!-- projects -->
    <section class="padding-top padding-bottom">
        <div class="container-xxl">
            <div class="row">
                <?php 
                     $args = array( 'post_type' => 'projects');
                    $the_query = new WP_Query( $args ); 
                ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-lg-4 col-md-6 mb-5"  >
                        <?php echo get_post_meta($post->ID,'behance_iframe',true);?>
                        <h4 class="h5 font-weight-600 head"  ><?php echo get_the_title(); ?></h4>
                        <p class="h5 fs-6 text-black-50"  ><?php echo get_post_meta($post->ID,'location',true);?></p>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else:  ?>
                    <p>
                        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                    </p>
                <?php endif; ?>

            </div>
           
        </div>
    </section>


<?php get_footer(); ?>
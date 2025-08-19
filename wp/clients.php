<?php
/* Template Name: clients */
?>
<?php get_header(); ?>

 <!-- Banner -->
 <section class="css-selector inner-banner">
        <div class="container-xxl text-center">
            <h1 class="text-white">My Satisfied Clients</h1>
            <h4 class="h5 text-white opacity-50"  >20 Clients transform their businesses with Timelino</h4>
        </div>
    </section>


  <!-- projects -->
  <section class="padding-top padding-bottom">
        <div class="container-xxl">
            <div class="d-flex flex-wrap gap-5 justify-content-center">
                

                <?php 
                $args = array( 'post_type' => 'clients');
                $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="w-auto">
                <?php $image = get_field('client_image');?>
                <img src="<?php echo $image;?>">
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
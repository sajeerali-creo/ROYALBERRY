<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<footer class="padding-top text-center text-lg-start">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 mb-4 mb-lg-0 d-flex flex-column align-items-center align-items-lg-start">
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
                    $footer_logo = get_field('footer_logo');
                    $footer_secondary_logo = get_field('footer_secondary_logo');
                    ?>
                
                    <img src="<?php echo esc_url($footer_logo); ?>" alt="<?php echo esc_attr($footer_logo); ?>" class="w-70 mb-4">
                    <img src="<?php echo esc_url($footer_secondary_logo); ?>" alt="<?php echo esc_attr($footer_secondary_logo); ?>" class="w-50">
                        
                    <?php
                endwhile;
                ?>
                <?php
            endif;

            // Reset the post data
            wp_reset_postdata();
            ?>

            </div>

            <div class="col-lg-2">
                <h5 class="text-gradient mb-4">Quick Links</h5>
                <div class="d-flex flex-column menu-footer gap-2">
                    <a href="/">Home</a>
                    <a href="/about-us/">About Us</a>
                    <a href="/services/">Services</a>
                    <a href="/testimonials/">Testimonials</a>
                    <a href="/gallery/">Gallery</a>
                    <a href="/contact-us/">Contact Us</a>
                </div>
            </div>
            <div class="col-lg-2">
                <h5 class="text-gradient mb-4">Address</h5>
                <div class="d-flex flex-column menu-footer gap-2">
                    <h6 class="text-gradient mb-2">UAE</h6>
                    <span>Pyramid Center Office 205</span>
                    <span>Oud Metha, Dubai</span>
                    <span>Harbour Inn Club</span>
                    <span>Jebel Ali Free Zone, Dubai</span>
                    <h6 class="text-gradient mb-2">INDIA</h6>
                    <span>Khasra No. 90/24/2</span>
                    <span>Opp. Mannco Complex</span>
                    <span>Ghitorni, New Delhi-110030</span>
                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="text-gradient mb-4">Contact Details</h5>
                <div class="d-flex flex-column menu-footer gap-2">
                    <span class="d-flex gap-1 justify-content-center justify-content-lg-start">
                        <img src="/wp-content/uploads/2025/02/email.svg" alt="">
                        <a href="mailto:royalberrycatering@intercat-hospitality.com">
                            <span>royalberrycatering@intercat-hospitality.com</span>
                        </a>
                    </span>
                    <span class="d-flex gap-1 justify-content-center justify-content-lg-start">
                        <img src="/wp-content/uploads/2025/02/phone.svg" alt="">
                        <a href="tel:+971 56 396 4859">
                            +971 56 396 4859
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="strip mt-5">
        <div class="container d-flex flex-column flex-lg-row justify-content-between align-items-center">
            <div class="fs-14">Copyright © 2025 - All rights reserved. Designed by Creotopi</div>
            <div class="d-flex gap-2 mt-2 mt-lg-0">
                <a href="https://www.instagram.com/royalberrybypurpleberry?igsh=eWN2YmR1Y2I5bHdw&utm_source=qr"
                    target="_blank">
                    <img src="/wp-content/uploads/2025/02/insta.svg" alt="">
                </a>
                <a href="https://www.facebook.com/people/Royalberry-by-Purpleberry/61565707981213/" target="_blank">
                    <img src="/wp-content/uploads/2025/03/fb.svg" alt="">
                </a>
				 <a href="https://www.linkedin.com/company/intercat-hospitality/"
                        target="_blank">
                        <img src="/wp-content/uploads/2025/04/linkedin.svg"  alt="">
                    </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<!-- Bootstrap & jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/gallery.js"></script>
<!-- AOS for scroll animations -->
<script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
<script>
    AOS.init();
</script>

<!-- Owl Carousel JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>

<!-- ✅ Your Custom JS -->
<script>
    $(document).ready(function () {
        // Page loader fade out
        $(window).on('load', function () {
            setTimeout(function () {
                $('.page-loader').fadeOut('slow');
            }, 500);
        });

        // Sticky header
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#dynamic').addClass('fixed-head');
            } else {
                $('#dynamic').removeClass('fixed-head');
            }
        });

        // Owl Carousel init
        $('.owl-carousel').owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: true,
                    loop: true
                },
                600: {
                    items: 3,
                    nav: false,
                    loop: true
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: true
                }
            }
        });
    });
	
</script>

<script>
function slideTestimonials(direction) {
  const slider = document.getElementById('testimonialSlider');
  const card = slider.querySelector('.testimonial-card');
  const cardWidth = card.offsetWidth + 16; // 16px gap
  slider.scrollBy({ left: direction * cardWidth * 1, behavior: 'smooth' });
}
</script>


</body>

</html>
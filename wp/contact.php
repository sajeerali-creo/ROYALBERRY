<?php
/* Template Name: contact */
?>
<?php get_header(); ?>

<!-- BANNER -->
<section class="main-banner inner">
    <div
        class="container d-flex flex-column flex-lg-row justify-content-center align-items-center justify-content-lg-between">
        <h1 class="h1 text-gradient"  >Contact Us</h1>
        <div class="d-flex align-items-center breadcums gap-2">
            <a href="/">Home</a>
            <i>/</i>
            <a href="/testimonials" class="active">Contact Us</a>
        </div>
    </div>
</section>
<!-- END BANNER -->

<!-- TESTIMONIALS -->
<section class="padding-bottom padding-top testimonial extra-b-padding1">
    <div class="container pb-5">
        <h2 class="h2 text-pink"  >Send us a message</h2>
        <p>Prefer to write? Use the form below, and we’ll respond promptly.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- <div class="box-form p-4 p-lg-5 mb-3">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        [text* name class:form-control]
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        [email* email-674 class:form-control]
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Subject</label>
                        [text* subject class:form-control]
                    </div>
                    <div class="mb-3">
                        <label class="form-label">message</label>
                        [textarea message class:form-control]
                    </div>
                    <div class="d-flex">
                        <button class="btn-primary">
                        [submit class:btn-primary "Send Message"]
                        </button>
                    </div>
                </div> -->
                <?php
        // Embed the Contact Form 7 form
        echo do_shortcode('[contact-form-7 id="199cc1f" title="contact-main"]');
        ?>
            </div>
            <div class="col-lg-6">
                <div class="d-flex gap-3 align-items-center">
                    <div class="icon-c">
                        <a href="mailto:royalberrycatering@intercat-hospitality.com">
                            <img src="/wp-content/uploads/2025/02/email-icon.svg" alt="">
                        </a>
                    </div>
                    <div>
                        <h6 class="h4 m-0">Email Us</h6>
                        <p>royalberrycatering@intercat-hospitality.com</p>
                    </div>
                </div>
                <div class="py-2">
                    <hr>
                </div>
                <div class="d-flex gap-3 align-items-center">
                    <div class="icon-c">
                        <a href="tel:+971 56 396 4859">
                            <img src="/wp-content/uploads/2025/02/phone-icon.svg" alt="">
                        </a>
                    </div>
                    <div>
                        <h6 class="h4 m-0">Call Us</h6>
                        <p>+971 56 396 4859</p>
                    </div>
                </div>
                <div class="py-2">
                    <hr>
                </div>
                <h6 class="h4 mb-4">Social Media</h6>
                <div class="d-flex gap-2">
                    <a href="https://www.instagram.com/royalberrybypurpleberry?igsh=eWN2YmR1Y2I5bHdw&utm_source=qr"
                        target="_blank">
                        <img src="/wp-content/uploads/2025/02/iocn-insta.svg" alt="">
                    </a>
                    <a href="https://www.facebook.com/people/Royalberry-by-Purpleberry/61565707981213/" target="_blank">
                        <img src="/wp-content/uploads/2025/03/fbs.svg" alt="">
                    </a>
                    <a href="https://www.linkedin.com/company/intercat-hospitality/" target="_blank">
                        <img src="/wp-content/uploads/2025/02/icon-linkedin.svg" alt="">
                    </a>
                </div>
                <div class="office-box p-4 mt-4 mb-4 mb-lg-0">
                    <h6 class="h4 mb-4">Office Address</h6>
                    <div class="d-flex gap-2">
                        <div class="icon-box">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" /></svg>
                        </div>
                        <div>
                            Pyramid Center Office 205, Oud Metha, Dubai
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <div class="icon-box">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" /></svg>
                        </div>
                        <div>
                            Harbour Inn Club, Jebel Ali Free Zone,Dubai
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <div class="icon-box">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clock-hour-3"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 12h3.5" /><path d="M12 7v5" /></svg>
                        </div>
                        <div>
                            Monday to Friday: 9:00 AM – 6:00 PM
                        </div>
                    </div>
                    <a href="https://www.google.com/maps/dir//Pyramid+Centre+65+Umm+Hureir+Road+Oud+Metha+-+Dubai/@25.2408711,55.308906,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x3e5f42d3e1ec0277:0x170a27d4d6ca4eef"
                        target="_blank" class="d-flex align-items-center mt-4 text-dark">Get directions&nbsp;<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M15 16l4 -4" /><path d="M15 8l4 4" /></svg></a>
                </div>
            </div>
            <div class="col-lg-12">
                <h6 class="h4 mb-4">Location Map</h6>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.8826894483577!2d55.304035091414555!3d25.240875872396842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f42d3e1ec0277%3A0x170a27d4d6ca4eef!2sPyramid%20Centre%20-%2065%20Umm%20Hureir%20Road%20-%20Oud%20Metha%20-%20Dubai!5e0!3m2!1sen!2sae!4v1740115291819!5m2!1sen!2sae"
                        width="100%" height="405" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TESTIMONIALS -->

<?php get_footer(); ?>
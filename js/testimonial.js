let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.testimonial-card');
    const dots = document.querySelectorAll('.dot');

    // Hide all slides
    slides.forEach((slide) => {
        slide.classList.remove('active');
    });

    // Remove active class from all dots
    dots.forEach((dot) => {
        dot.classList.remove('active');
    });

    // Show the selected slide
    slides[index].classList.add('active');
    dots[index].classList.add('active');

    currentSlide = index;
}

// Auto-slide functionality (optional)
setInterval(() => {
    const slides = document.querySelectorAll('.testimonial-card');
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}, 5000); // Change slide every 5 seconds
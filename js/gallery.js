let slideIndex = 1;

function openLightbox() {
    document.getElementById('lightbox').style.display = 'block';
    showSlide(slideIndex);
}

function closeLightbox() {
    document.getElementById('lightbox').style.display = 'none';
}

function changeSlide(n) {
    showSlide(slideIndex += n);
}

function currentSlide(n) {
    showSlide(slideIndex = n);
}

function showSlide(n) {
    const slides = document.getElementsByClassName('lightbox-slide');
    if (n > slides.length) { slideIndex = 1; }
    if (n < 1) { slideIndex = slides.length; }

    // Remove active class from all slides
    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove('active', 'prev', 'next');
    }

    // Add classes for smooth transitions
    slides[slideIndex - 1].classList.add('active');
    if (n > 1) {
        slides[slideIndex - 2].classList.add('prev');
    } else {
        slides[slides.length - 1].classList.add('prev');
    }
    if (n < slides.length) {
        slides[slideIndex].classList.add('next');
    } else {
        slides[0].classList.add('next');
    }
}
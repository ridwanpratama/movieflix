let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    const slides = document.getElementsByClassName("slides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 3000);
}

window.addEventListener('scroll', function () {
    var header = document.querySelector('header');
    var scrollTop = window.scrollY || document.documentElement.scrollTop;

    if (scrollTop > 0) {
        header.style.background = 'var(--color-primary)';
        header.style.opacity = 0.9;
    } else {
        header.style.background = 'linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2))';
    }
});
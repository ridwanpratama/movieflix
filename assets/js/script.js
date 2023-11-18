document.addEventListener("DOMContentLoaded", function() {
    showSlides();
    initAccordion();
});

let slideIndex = 0;

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
    const header = document.querySelector('header');
    const scrollTop = window.scrollY || document.documentElement.scrollTop;

    if (scrollTop > 0) {
        header.style.background = 'var(--color-primary)';
        header.style.opacity = 0.9;
    } else {
        header.style.background = 'linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2))';
    }
});

function initAccordion() {
    const acc = document.getElementsByClassName("accordion");
    let i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
    
            let panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
                this.style.borderRadius = "8px";
            } else {
                panel.style.display = "block";
                this.style.borderRadius = "8px 8px 0 0";
            }
        });
    }
}
document.addEventListener("DOMContentLoaded", function () {
    showSlides();
    initAccordion();
    registerEvent();
});

let slideIndex = 0;

function registerEvent() {
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

    document.querySelector('.main-search-button').addEventListener('click', function () {
        var searchInput = document.querySelector('.main-search-input').value;
        console.log(searchInput);
        var results = searchMovieByAltTitle(searchInput);

        document.querySelectorAll('.movie-card').forEach(function (card) {
            card.style.display = 'none';
        });

        results.forEach(function (image) {
            image.closest('.movie-card').style.display = 'block';
        });
    });
}

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

function searchMovieByAltTitle(searchTerm) {
    var movieImages = document.querySelectorAll('.movie-card img');

    var filteredImages = Array.from(movieImages).filter(function (image) {
        return image.alt.toLowerCase().includes(searchTerm.toLowerCase());
    });

    return filteredImages;
}
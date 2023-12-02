document.addEventListener("DOMContentLoaded", function() {
    registerEvent();
});

function registerEvent() {
    const hour = document.getElementsByClassName("hour");
    let i;
    for (i = 0; i < hour.length; i++) {
        hour[i].addEventListener("click", function() {
            const dataValue = this.getAttribute("data-value");
            window.location.href = "movie-seat.php?hour=" + dataValue;
        });
    }
}
document.addEventListener("DOMContentLoaded", function () {
    registerEvent();
});

function registerEvent() {
    // const hour = document.getElementsByClassName("hour");
    // let i;
    // for (i = 0; i < hour.length; i++) {
    //     hour[i].addEventListener("click", function () {
    //         const dataValue = this.getAttribute("data-value");
    //         window.location.href = "movie-seat.php?hour=" + dataValue;
    //     });
    // }

    document.querySelector('.change-location').addEventListener('click', function () {
        var selectedValue = document.querySelector('.select-address').value;
        var options = document.querySelector('.select-address').options;
        
        for (var i = 0; i < options.length; i++) {
            var value = options[i].value;
            var element = document.getElementById(value);
            if (element) {
                element.style.display = (value === selectedValue) ? 'block' : 'none';
            }
        }
    });
}


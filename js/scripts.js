function loadImage(source) {
    var destination = document.getElementById("big");
    if(destination !== null) {
        destination.src = source;
    }
}

$(document).ready(function() {
    $(".km-range").ionRangeSlider();

    
    $(".price-range").ionRangeSlider();

    
    $(".year-range").ionRangeSlider();
});

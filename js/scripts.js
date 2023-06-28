$(document).ready(function() {

    $(".km-range, .price-range, .year-range").ionRangeSlider({
        onFinish: function(data) {
            applyFilter();
        }
    });
    
});

function loadImage(source) {
    var destination = document.getElementById("big");
    if(destination !== null) {
        destination.src = source;
    }
}

function applyFilter() {
    var kmRange = $(".km-range").val().split(";");
    var priceRange = $(".price-range").val().split(";");   
    var yearRange = $(".year-range").val().split(";");

    var fromKm = kmRange[0];
    var toKm =kmRange[1];

    var fromPrice = priceRange[0];
    var toPrice = priceRange[1];
    
    var fromYear = yearRange[0];
    var toYear = yearRange[1];
    
    $.post('/filters.php', 
    {
        fromKm: fromKm, 
        toKm: toKm,
        fromPrice: fromPrice,
        toPrice: toPrice,
        fromYear: fromYear,
        toYear: toYear
    }, function(data){ 
        $('#vehicles').html(data);
    });
}

function resetFilter() {
    let kmRange = $(".km-range").data("ionRangeSlider");
    let priceRange = $(".price-range").data("ionRangeSlider");
    let yearRange = $(".year-range").data("ionRangeSlider");

    kmRange.reset();
    priceRange.reset();
    yearRange.reset();
    
    $.ajax( "/filters.php" )
    .done(function(data) {
        $('#vehicles').html(data);
    });

}
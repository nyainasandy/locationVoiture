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

function loadImageToUpload(input) {

    if(input.files && input.files[0]) {
        $('.'+input.id).attr('src', window.URL.createObjectURL(input.files[0]));
    }
    
}

function clearInput(id) {
    $('#' + id + " input[type=time]").each(function() {
        $(this).removeAttr('value');
    });
}

function saveOpeningChange(id) {
    var fromAm = $('#' + id + " #morning_0").val();
    var toAm = $('#' + id + " #morning_1").val();
    var fromPm = $('#' + id + " #afternoon_0").val();
    var toPm = $('#' + id + " #afternoon_1").val();

    console.log("AM (" + fromAm + " - " + toAm + ") - PM(" + fromPm + " - " + toPm + ")");

    $.post('/opening.php', 
    {
        id: id,
        fromAm: fromAm, 
        toAm: toAm,
        fromPm: fromPm,
        toPm: toPm
    })
    .done(function(data) {
        $('#success').html("La modification a été prise en compte !!");
    })
    .fail(function(xhr, status, error) {
        $('#error').html("Une erreur inattendue est survenue lors de l'enregistrement du (" + id + ") !! (status : " + status + ") " + error);
    });
}
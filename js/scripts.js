$(document).ready(function() {

    $(".km-range, .price-range, .year-range").ionRangeSlider({
        onFinish: function(data) {
            applyFilter();
        }
    });

    $('#deleteModalConfirmation').on('show.bs.modal', function (event) {
        let id = $(event.relatedTarget).data('service-id');
        let label = $(event.relatedTarget).data('service-label');
        let price = $(event.relatedTarget).data('service-price');
        
        $(this).find('.modal-body input').val(id);
        $(this).find('.modal-body div#label').html("Label : " + label);
        $(this).find('.modal-body div#price').html("Prix : " + price + " &euro;");
      })
    
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

function sendMessage() {
    
    var username = $('input#username').val();
    var telephone = $('input#telephone').val();
    var email = $('input#email').val();
    var message = $('input#messasge').val();

    $.post('/SendMail.php', 
    {
        username: username,
        telephone: telephone, 
        email: email,
        message: message
    })
    .done(function(data) {
        $('#success').html("Votre message a été envoyé");
        $('a#send').remove();

        $('input#username').val();
        $('input#telephone').val();
        $('input#email').val();
        $('input#messasge').val();
    })
    .fail(function(xhr, status, error) {
        $('#error').html("Une erreur inattendue est survenue lors de l'envoi de votre message !! (status : " + status + ") " + error);
    });
}

function saveOpeningChange(id) {
    var fromAm = $('#' + id + " input#am_0_" + id).val();
    var toAm = $('#' + id + " input#am_1_" + id).val();
    var fromPm = $('#' + id + " input#pm_0_" + id).val();
    var toPm = $('#' + id + " input#pm_1_" + id).val();

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

function deleteService() {
    var id = $("input#serviceId").val();

    $.post('/deleteService.php', { id: id })
    .done(function(data) {
        $("tr#" + id).remove();
        $('#success').html("Le service a été supprimé avec succès !!");
    })
    .fail(function(xhr, status, error) {
        $('#error').html("Une erreur inattendue est survenue lors de la suppression du service (id : " + id + ") !! (status : " + status + ") " + error);
    });
}

function updateService(id) {
    
    console.table($("tr#" + id));
    console.table($("tr#" + id + " > td > input#price.form-control"));

    var label = $("tr#" + id + " > td > input#label.form-control").val();
    var price = $("tr#" + id + " > td > input#price.form-control").val();
    

    $.post('/updateService.php', 
    { 
        id: id,
        label: label,
        price: price
    })
    .done(function(data) {
        $('#success').html("Le service a été supprimé avec succès !!");
    })
    .fail(function(xhr, status, error) {
        $('#error').html("Une erreur inattendue est survenue lors de la suppression du service (id : " + id + ") !! (status : " + status + ") " + error);
    });
}
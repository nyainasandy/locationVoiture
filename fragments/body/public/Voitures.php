<?php
    require_once("data/Voitures.class.php");

    $voitures = new Voitures();

    $marque = null;
    $allVoitures = null;
    if(isset($_GET['marque'])) {
        $marque = $_GET['marque'];
        $allVoitures = $voitures->getFromBrand($marque);
    } else {
        $allVoitures = $voitures->findAll(); 
    }
    ?>

<div class='container border mb-3'>

    <h3 class="h3 mt-3 text-center">Filtre de recherche</h3>
    
    <div class="row">
        <div class="col-lg-4 form-group my-2 text-center">
            <label for="km">Kilométrage</label> 
            <input 
                type="text" 
                class="km-range form-control" 
                name="km" 
                value="" 
                data-type="double"
                data-min="8000"
                data-max="220000"
                data-from="8000"
                data-to="220000"
                data-grid="true" />
        </div> 
        <div class="col-lg-4 form-group my-2 text-center">
            <label for="price">Prix</label> 
            <input 
                type="text" 
                class="price-range form-control" 
                name="price" 
                value="" 
                data-type="double"
                data-min="9000"
                data-max="90000"
                data-from="9000"
                data-to="90000"
                data-grid="true" />
        </div> 
        <div class="col-lg-4 form-group my-2 text-center">
            <label for="year">Années</label> 
            <input 
                type="text" 
                class="year-range form-control" 
                name="year" 
                value="" 
                data-type="double"
                data-min="2010"
                data-max="2022"
                data-from="2010"
                data-to="2022"
                data-grid="true" />
        </div> 
    </div>

    <div class='row p-3'>
        <div class="offset-sm-6 col-lg-6 d-flex flex-row-reverse">
            <button class="btn btn-danger" onclick="resetFilter()">Supprimer filtre</button>
        </div>
    </div>
    
</div>

<div id="vehicles">
    <?php require("filters.php"); ?>
</div>


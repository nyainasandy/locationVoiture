<?php
    require_once("data/Brands.class.php");
    require_once("data/Warranties.class.php");
    require_once("data/Energies.class.php");
    require_once("data/Fundings.class.php");

    $brands = new Brands();
    $allBrands = $brands->findAll();

    $warranties = new Warranties();
    $allWarranties = $warranties->findAll();

    $energies = new Energies();
    $allEnergies = $energies->findAll();

    $fundings = new Fundings();
    $allFundings = $fundings->findAll();
?>

<form method="POST" action="Create.php" enctype="multipart/form-data" class="p-5">

    <!-- tab header -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#caracteristiques" class="nav-link active" data-bs-toggle="tab">Caractéristiques</a>
        </li>
        <li class="nav-item">
            <a href="#photos" class="nav-link" data-bs-toggle="tab">Photos</a>
        </li>
        <li class="nav-item">
            <a href="#financements" class="nav-link" data-bs-toggle="tab">Financements</a>
        </li>
    </ul>

    <!-- tab contents -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="caracteristiques">
            <?php require("Caracteristiques.php"); ?>
        </div>

        <div class="tab-pane fade" id="photos">
            <?php require("Photos.php"); ?>
        </div>

        <div class="tab-pane fade" id="financements">
            <?php require("Financements.php"); ?>
        </div>
    </div>

    <div class="form-group text-end">
        <button name="submit" type="submit" class="btn btn-primary btn-lg">Ajouter</button>
    </div>
    
</form>
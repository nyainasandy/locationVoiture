<?php
    require_once("data/Voitures.class.php");
    require_once("data/Fundings.class.php");
    require_once("data/Photos.class.php");
    require_once("data/Avis.class.php");

    $id_voiture = $_GET['id'];

    $voitures = new Voitures();
    $allVoiture = $voitures->getFromId($id_voiture);

    if(count($allVoiture) > 0) {

        $voiture = $allVoiture[0];

        $date_circulation = date_create($voiture['mise_en_circulation']);

        $fundings = new Fundings();
        $allFundings = $fundings->findByVehicleId($id_voiture);

        $photos = new Photos();
        $allPhotos = $photos->findByVehicleId($id_voiture);

        $avis= new Avis();
        $allAvis = $avis->findByVehicleId($id_voiture);

        require("view/Header.php");
        require("view/Photos.php");
        require("view/Financement.php"); 
?>

<div class="row">
    <div class="col-lg-9">
        <?php require("view/Description.php"); ?>
    </div>
    
    <div class="col-lg-2 pt-5 text-center me-1">
        <div class="d-sm-none">
            <img src="/images/pub-audi.png" alt="" />
        </div>
        
    </div>
</div>

<div class="row">
    <div class="col-lg-9">
        <?php 
        require("view/Financements.php"); 
        require("view/Avis.php"); 
        ?>
    </div>
    
    <div class="col-lg-2 pt-5 text-center d-none d-sm-block me-1">
        <img src="/images/pub-toyota.png" alt="" />
    </div>
</div>

<?php } else { 
    require("view/Header.php");
}

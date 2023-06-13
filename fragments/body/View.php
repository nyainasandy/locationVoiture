<?php
    require_once("data/Voitures.class.php");
    require_once("data/Fundings.class.php");
    require_once("data/Photos.class.php");
    require_once("data/Avis.class.php");

    $id_voiture = $_GET['id'];

    $voitures = new Voitures();
    $allVoiture = $voitures->getFromId($id_voiture);

    $voiture = $allVoiture[0];

    $date_circulation = date_create($voiture['mise_en_circulation']);

    $fundings = new Fundings();
    $allFundings = $fundings->findByVehicleId($id_voiture);

    $photos = new Photos();
    $allPhotos = $photos->findByVehicleId($id_voiture);

    $avis= new Avis();
    $allAvis = $avis->findByVehicleId($id_voiture);
?>

    <div class="row navbar-light bg-light me-3 pt-3 mb-4 rounded border">
        
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item"><a href="/?marque=<?php echo $voiture['nom']; ?>"><?php echo $voiture['nom']; ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $voiture['model']; ?></li>
            </ol>
        </nav>
    
    </div>

<?php
    require("view/Header.php");
    require("view/Photos.php");
    require("view/Financement.php"); 
?>

<div class="row">
    <div class="col-lg-9">
        <?php require("view/Description.php"); ?>
    </div>
    
    <div class="col-lg-2 pt-5 text-end me-1">
        <img src="/images/pub-audi.png" alt="" />
    </div>
</div>

<div class="row">
    <div class="col-lg-9">
        <?php 
        require("view/Financements.php"); 
        require("view/Avis.php"); 
        ?>
    </div>
    
    <div class="col-lg-2 pt-5 text-end me-1">
        <img src="/images/pub-toyota.png" alt="" />
    </div>
</div>

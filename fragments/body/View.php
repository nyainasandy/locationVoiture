<?php
    require_once("data/Voitures.class.php");

    $id_voitures = $_GET['id'];

    $voitures = new Voitures();
    $allVoiture = $voitures->getFromId($id_voitures);

    $voiture = $allVoiture[0];

    $date_circulation = date_create($voiture['mise_en_circulation']);
?>

<div class="row"> 
    <div class="col-lg-9">
        <div class="h4">
            <?php echo $voiture['nom']." ".$voiture['model']; ?>
        </div>
        <div>
            <span class="border-end pe-3"><?php echo date_format($date_circulation,"d/m/Y"); ?></span>
            <span class="border-end pe-3"><?php echo number_format($voiture['kilometrage'], '0', ',', ' '); ?> km</span>
            <?php echo $voiture['energie']; ?>
        </div>
        
    </div>

    <div class="col-lg-3 text-end pe-5">
        <div>
            <span class="h1"><?php echo number_format($voiture['prix'], '0', ',', ' '); ?> &euro;</span> TTC
        </div>
        <div>
            <span class="me-3 pe-3 border-end">Financement</span> Assurance
        </div>
    </div>
    
</div>

<div class="row mt-2">
    <img src="<?php echo $voiture['photo']; ?>" class="img-fluid" alt="" id="big" />
</div>

<div class="row mt-2">
    <?php 
        
        $photos = $voiture['photos'];
        if(isset($photos) && $photos != null) {
        
            $photos = explode(",", $photos);
            $number_photo = min(count($photos), 4);
            ?> 
            <div class="col-lg-8"> 
            <?php
            for($i=0;$i<$number_photo;$i++) {?>
                <img src="<?php echo $photos[$i]; ?>" alt="" class="me-2 miniature" onclick="javascript: loadImage(this.src)" />
            <?php 
            } 
            ?>
            </div>
            <div class="col-lg-4 d-flex flex-row-reverse mt-4">
                <div class="btn-group h-50 pe-4" role="group">
                    <a class="btn btn-outline-secondary"><i class="fa fa-share-nodes pt-1"></i></a>
                    <a class="btn btn-outline-secondary"><i class="fa fa-bell pt-1"></i></a>
                    <a class="btn btn-outline-secondary"><i class="fa fa-heart pt-1"></i></a>
                </div>
            </div>

        <?php 
        } else { 
        ?>
            <div class="col-lg-8 mt-4">Aucune photo trouvée !!</div>
            <div class="col-lg-4 d-flex flex-row-reverse mt-4">
                <div class="btn-group pe-4" role="group">
                    <a class="btn btn-outline-secondary"><i class="fa fa-share-nodes pt-1"></i></a>
                    <a class="btn btn-outline-secondary"><i class="fa fa-bell pt-1"></i></a>
                    <a class="btn btn-outline-secondary"><i class="fa fa-heart pt-1"></i></a>
                </div>
            </div>
        <?php 
        }
    ?>
    
</div>

<div class="row mt-2 d-flex align-items-center me-3 border">
    <div class= "col-lg-8 my-3 ps-3">
        <h4 class="text-primary">À partir de <span class="fw-bold">519 €</span> / mois</h4>
         Crédit classique
    </div> 

    <div class="col-lg-4 mt-3 text-end">
        <button class="btn btn-outline-primary fw-bold ">
            € simuler votre mensualité
        </button>
    </div>
</div>

<div class="row mt-2 tabs">
    <ul class="nav nav-tabs border">
        <li class="nav-item">
            <a class="nav-link active" href="#">DESCRIPTION</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">MOTEUR & CHASSIS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">EQUIPEMENTS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">VENDEUR</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">CREDIT CLASSIQUE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">LIVRAISON</a>
        </li>
    </ul>

</div>
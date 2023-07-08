<?php

    $fromKm = 0;
    $toKm = 0;

    $fromPrice = 0;
    $toPrice = 0;

    $fromYear = 0;
    $toYear = 0;

    if(isset($_POST["fromKm"])) {

        $fromKm = htmlspecialchars($_POST["fromKm"]);
        $toKm = htmlspecialchars($_POST["toKm"]);
        
        $fromPrice = htmlspecialchars($_POST["fromPrice"]);
        $toPrice = htmlspecialchars($_POST["toPrice"]);
        
        $fromYear = htmlspecialchars($_POST["fromYear"]);
        $toYear = htmlspecialchars($_POST["toYear"]);
        
    }

    require_once("data/Voitures.class.php");

    $voitures = new Voitures();
    $allVoitures = null;

    if($fromKm > 0 && $toKm > 0) {
        $allVoitures = $voitures->quickFilter($fromKm, $toKm, $fromPrice, $toPrice, $fromYear, $toYear);
    
    } else if(isset($_GET['marque'])) {
        $marque = $_GET['marque'];
        $allVoitures = $voitures->getFromBrand($marque);
    
    } else {
        $allVoitures = $voitures->findAll(); 
    } ?>
    
    <div class='row fw-bold m-0 mb-2 p-2' id="number-vehicles">
        <?php echo count($allVoitures)." annonces trouvées"; ?>
    </div>

    <div class='row g-2'>
        <?php
        foreach($allVoitures as $voiture) {
        ?>

            <div class='col-lg-4 mt-1 p-1'>

                <div class='border fiche p-2'>

                    <?php
                        if(isset($voiture['photos']) && $voiture['photos'] != null) {
                            $photos = explode(",", $voiture['photos']);
                            echo "<img src='$photos[0]' class='apercu' />";
                        } else {
                            echo "<img src=\"images/No_Image_Available.jpg\" class='apercu'/>";
                        }
                    ?>
                    
                    <div class='row my-3 px-2'>
                        <div class='col-lg-8'>
                            <div class='type'>Occasion</div>
                            <div class='label'><?php echo $voiture['nom']." ".$voiture['model']; ?></div>
                        </div>
                        <div class='col-lg-4 text-end py-2 px-2'>
                            <span class='p-2 bg-orange text-white fw-bold'>
                                &euro; <?php echo number_format($voiture['prix'], 2, ',', ' '); ?>
                            </span>
                        </div>
                    </div>


                    <div class='row mt-1'>
                        <div class='col-lg-4'>
                            Année 
                        </div>
                        <div class='col-lg-8 ps-2'>
                            <?php $voiture['annee']; ?>
                        </div>
                    </div>


                    <div class='row mt-1'>
                        <div class='col-lg-4'>
                            Carburant
                        </div>
                        <div class='col-lg-8 ps-2'>
                            <?php echo $voiture['energie']; ?>
                        </div>
                    </div>

                    <div class='row mt-1'>
                        <div class='col-lg-4'>
                            Kilometrage
                        </div>
                        <div class='col-lg-8 ps-2'>
                            <?php echo number_format($voiture['kilometrage'], 0, ',', ' '); ?>
                        </div>
                    </div>
                    
                    <div class="mt-2 text-end">
                        <a class="btn btn btn-outline-primary" href="?view&id=<?php echo $voiture['id_voiture']; ?>">voir le detail</a>
                    </div>

                </div>

            </div>
        <?php
        }
    ?>
    </div>

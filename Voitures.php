<?php
    require_once("data/Voitures.class.php");

    $voitures = new Voitures();
    $allVoitures = $voitures->findAll();

    if($allVoitures != null) {

        foreach($allVoitures as $voiture) {
            
            echo "<div class='col-lg-4'>";
                
            echo "    <img src='/VenteVoiture".$voiture['photo']."' class='img-fluid' />";
            echo "    <div class='row mt-3'>";
            echo "        <div class='col-lg-8'>";
            echo "            <div class='type'>Certified used 2021</div>";
            echo "            <div class='label'>".$voiture['nom']." ".$voiture['model']."</div>";
            echo "        </div>";
            echo "        <div class='col-lg-4 text-end py-2 px-2'>".$voiture['prix']."</div>";
            echo "    </div>";

            echo "</div>";

        }
    }
?>
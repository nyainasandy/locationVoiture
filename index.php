<?php
    require_once("data/Voitures.class.php");

    $voitures = new Voitures();
    $allVoitures = $voitures->getAll();

    if($allVoitures != null) {

        foreach($allVoitures as $voiture) {
            print $voiture['id_voiture']." - ".$voiture['nom']." - ".$voiture['model']." - ".$voiture['financements']."<br/>";
            echo "<img src=\"/locationVoiture".$voiture['photo']."\" /><br/>";
        }
    }
?>
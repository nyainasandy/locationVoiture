<?php
    require_once("data/Voitures.class.php");

    $voitures = new Voitures();
    $allVoitures = $voitures->findAll();

    if($allVoitures != null) {

        echo "<div class='row'>";
        foreach($allVoitures as $voiture) {
            
            echo "<div class='col-lg-4 fiche m-2'>";
                
            echo "    <img src='/VenteVoiture".$voiture['photo']."' class='img-fluid' />";
            echo "    <div class='row mt-3'>";
            echo "        <div class='col-lg-8'>";
            echo "            <div class='type'>Certified used 2021</div>";
            echo "            <div class='label'>".$voiture['nom']." ".$voiture['model']."</div>";
            echo "        </div>";
            echo "        <div class='col-lg-4 text-end py-2 px-2'>";
            echo "            <span class='p-2 bg-orange text-white fw-bold'>";
            echo "                &euro; ".number_format($voiture['prix'], 2, ',', ' ');
            echo "            </span>";
            echo "        </div>";
            echo "    </div>";

            
            echo "    <div class='row mt-1'>";
            echo "        <div class='col-lg-4'>";
            echo "            Année ";
            echo "        </div>";
            echo "        <div class='col-lg-8 ps-2'>";
            echo "            ".$voiture['annee'];
            echo "        </div>";
            echo "    </div>";

            
            echo "    <div class='row mt-1'>";
            echo "        <div class='col-lg-4'>";
            echo "            Carburant";
            echo "        </div>";
            echo "        <div class='col-lg-8 ps-2'>";
            echo "            ".$voiture['energie'];
            echo "        </div>";
            echo "    </div>";

            
            echo "    <div class='row mt-1'>";
            echo "        <div class='col-lg-4'>";
            echo "            Kilometrage";
            echo "        </div>";
            echo "        <div class='col-lg-8 ps-2'>";
            echo "            ".$voiture['kilometrage'];
            echo "        </div>";
            echo "    </div>";

            echo "</div>";

        }
        echo "</div>";
    }
?>
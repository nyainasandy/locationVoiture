<?php

    require_once("data/CarData.class.php");
    require_once("data/Voitures.class.php");
    require_once("data/Fundings.class.php");
    require_once("data/Photos.class.php");

    if(isset($_POST["submit"])) {

        $marque = $_POST["marque"];
        $modele = $_POST["modele"];
        $annee = $_POST["annee"];
        $mise_en_circulation = $_POST["mise_en_circulation"];
        $nombre_porte = $_POST["nombre_porte"];
        $nombre_place = $_POST["nombre_place"];
        $puissance_fiscale = $_POST["puissance_fiscale"];
        $puissance = $_POST["puissance"];
        $kilometrage = $_POST["kilometrage"];
        $prix = $_POST["prix"];
        $couleur = $_POST["couleur"];
        $crit_air = $_POST["crit_air"];
        $emission_co2 = $_POST["emission_co2"];
        $premiere_main = isset($_POST["premiere_main"]) ? $_POST["premiere_main"] : 0;
        $volume_coffre = $_POST["volume_coffre"];

        $garantie = $_POST["garantie"];
        $energie = $_POST["energie"];

        print "marque : $marque $modele<br/>";
        print "année : $annee - mise en circulation : $mise_en_circulation<br/>";
        print "nombre de porte : $nombre_porte - nombre place : $nombre_place<br/>";
        print "garantie : $garantie<br/>";
        print "energie : $energie<br/>";
        print "première main : $premiere_main<br/>";

        $carData = new CarData();

        $carData->setIdMarque($marque);
        $carData->setModel($modele);
        $carData->setAnnee($annee);
        $carData->setMiseEnCirculation($mise_en_circulation);
        $carData->setNombrePorte($nombre_porte);
        $carData->setNombrePlace($nombre_place);
        $carData->setPuissanceFiscale($puissance_fiscale);
        $carData->setPuissance($puissance);
        $carData->setKilometrage($kilometrage);
        $carData->setPrix($prix);
        $carData->setCouleur($couleur);
        $carData->setCritair($crit_air);
        $carData->setEmissionCo2($emission_co2);
        $carData->setPremiereMain($premiere_main);
        $carData->setVolumeCoffre($volume_coffre);

        $carData->setIdGarantie($garantie);
        $carData->setIdEnergie($energie);

        $voitures = new Voitures();
        $voiture_id = $voitures->create($carData);

        /*echo '<pre>';
        var_dump($_FILES);
        echo '</pre>';*/
        
        $fundings = new Fundings();
        $photos = new Photos();

        $maxSize = 700000;

        for($i=0; $i<5; $i++) {

            if($i < 4 && isset($_POST["financement$i"])) {
                $id_financement = $_POST["financement$i"];
                $nombre_mois = $_POST["nombre_mois$i"];
                $mensualite = $_POST["mensualite$i"];
                
                echo "CREATE FUNDING : $voiture_id - $id_financement";
                $fundings->create($voiture_id, $id_financement, $nombre_mois, $mensualite);
            } 
            
            if (isset($_FILES["photo$i"])) {
                    
                $tmpName = $_FILES["photo$i"]['tmp_name'];
                $name = $_FILES["photo$i"]['name'];
                $size = $_FILES["photo$i"]['size'];

                $directory = "./images/$voiture_id";
                $uploaded_name = "$directory/$name";
                if($size <= $maxSize) {
                    
                    if(!file_exists($directory)) {
                        echo "DIRECTORY $directory not exist, create new one!!";
                        mkdir($directory);
                    }

                    echo "UPLOAD FILE : $uploaded_name";
                    move_uploaded_file($tmpName, $uploaded_name);
                    $photos->create($uploaded_name, $voiture_id);
                }
            }

        }

        header("location:/?new&cs=ok");
    }
?>
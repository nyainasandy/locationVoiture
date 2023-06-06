<?php

    require_once("data/CarData.class.php");
    require_once("data/Voitures.class.php");
    require_once("data/Fundings.class.php");

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

        $photo = "/images/".$_FILES["photo"]["name"];

        print "marque : $marque $modele<br/>";
        print "année : $annee - mise en circulation : $mise_en_circulation<br/>";
        print "nombre de porte : $nombre_porte - nombre place : $nombre_place<br/>";
        print "garantie : $garantie<br/>";
        print "energie : $energie<br/>";
        print "première main : $premiere_main<br/>";
        print "photo : $photo";

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

        $carData->setPhoto($photo);

        $voitures = new Voitures();
        $last_insert_id = $voitures->create($carData);

        $id_financement = $_POST["financement"];
        $nombre_mois = $_POST["nombre_mois"];
        $interets = $_POST["interets"];
        $montant_total = $_POST["montant_total"];

        $fundings = new Fundings();
        $fundings->create($last_insert_id, $id_financement, $nombre_mois, $interets, $montant_total);
        $fundings->generateQueryToCreateNewRecord();
        
        var_dump($_FILES);
        $tmpName = $_FILES['photo']['tmp_name'];
        $name = $_FILES['photo']['name'];
        $size = $_FILES['photo']['size'];

        $maxSize = 700000;

        if($size <= $maxSize) {
            move_uploaded_file($tmpName, './images/'.$name);
            header("location:/?new&cs=ok");
        } else {
            header("location:/?new&cs=ko&si=tb");
        }
    }
?>
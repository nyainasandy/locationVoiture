<?php

    require_once("./database/Database.php");
    require_once("./database/Query.php");

    $database = new Database();
    $database->connect();

    if(!$database->isConnected()) {
        print 'Unable to connect to database !!';
        exit();
    }

    $query = new Query();
    $voitures = $query->executeQuery($database->getConnection(), "SELECT v.id_voiture, m.nom, v.model, v.photo, GROUP_CONCAT(f.type) as financements
                                        FROM voiture v
                                    INNER JOIN voiture_financement vf
                                        ON vf.id_voiture = v.id_voiture
                                    INNER JOIN financement f
                                        ON vf.id_financement = f.id_financement
                                    INNER JOIN marque m
                                        ON m.id_marque = v.id_marque
                                    GROUP BY v.id_voiture, m.nom, v.model, v.photo;");

    foreach($voitures as $voiture) {
        print $voiture['id_voiture']." | ".$voiture['nom']." | ".$voiture['model']."<br/>";
        echo "<img src=\"/VenteVoiture".$voiture['photo']."\" />";
    }

    $database->close();

?>
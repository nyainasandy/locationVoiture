<?php

    require_once("database/QueryExecutor.class.php");
    require_once("data/CarData.class.php");

    class Voitures {

        public function findAll() {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCollectAllCars();
            return $queryExecutor->select($sql);
        }

        public function create($carData) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCreateNewRecord($carData);
            return $queryExecutor->insert($sql);
        }

        private function generateQueryToCollectAllCars() {
            return "SELECT v.id_voiture, m.nom, v.model, v.photo, v.prix, v.annee, v.kilometrage, e.type as energie, GROUP_CONCAT(f.type) as financements
                        FROM voiture v
                    INNER JOIN voiture_financement vf
                        ON vf.id_voiture = v.id_voiture
                    INNER JOIN financement f
                        ON vf.id_financement = f.id_financement
                    INNER JOIN marque m
                        ON m.id_marque = v.id_marque
                    INNER JOIN energie e
                        ON v.id_energie = e.id_energie
                    GROUP BY v.id_voiture, m.nom, v.model, v.photo, v.prix, v.annee, v.kilometrage;";
        }

        
        private function generateQueryToCreateNewRecord($carData) {

            $photo = $carData->getPhoto();
            $annee = $carData->getAnnee();
            $kilometrage = $carData->getKilometrage();
            $prix = $carData->getPrix();
            $modele = $carData->getModel();
            $couleur = $carData->getCouleur();
            $nombre_porte = $carData->getNombrePorte();
            $nombre_place = $carData->getNombrePlace();
            $puissance_fiscale = $carData->getPuissanceFiscale();
            $puissance = $carData->getPuissance();
            $crit_air = $carData->getCritAir();
            $emission_co2 = $carData->getEmissionCo2();
            $mise_en_circulation = $carData->getMiseEnCirculation();
            $premiere_main = $carData->getPremiereMain();
            $volume_coffre = $carData->getVolumeCoffre();
            $id_marque = $carData->getIdMarque();
            $id_energie = $carData->getIdEnergie();
            $id_garantie = $carData->getIdGarantie();

            return "INSERT INTO voiture 
                        (id_voiture, photo, annee, kilometrage, prix, model, couleur, nombre_de_porte, nombre_de_place, puissance_fiscal, puissance, crit_air,
                        emission_co2, mise_en_circulation, premier_main, volume_coffre, id_marque, id_energie, id_garantie)
                    VALUES (NULL, '$photo', $annee, $kilometrage, $prix, '$modele', '$couleur', $nombre_porte, $nombre_place, $puissance_fiscale, $puissance, $crit_air,
                        $emission_co2, '$mise_en_circulation', $premiere_main, $volume_coffre, $id_marque, $id_energie, $id_garantie)";
        }
    
    }
?>
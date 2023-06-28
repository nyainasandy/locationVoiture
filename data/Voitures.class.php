<?php

    require_once("database/QueryExecutor.class.php");
    require_once("data/CarData.class.php");

    class Voitures {

        public function findAll() {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCollectAll();
            return $queryExecutor->select($sql);
        }

        public function getFromId($id_voiture) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCollectFromId($id_voiture);
            return $queryExecutor->select($sql);
        }

        public function getFromBrand($marque) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCollectFromBrand($marque);
            return $queryExecutor->select($sql);
        }

        public function create($carData) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCreateNewRecord($carData);
            return $queryExecutor->insert($sql);
        }

        public function quickFilter($minKm, $maxKm, $minPrice, $maxPrice, $minYear, $maxYear) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryFilter($minKm, $maxKm, $minPrice, $maxPrice, $minYear, $maxYear);
            return $queryExecutor->select($sql);
        }

        private function generateQueryToCollectAll() {
            return "SELECT v.id_voiture, m.nom, v.model, v.photo, v.prix, v.annee, v.kilometrage, e.type as energie
                        , GROUP_CONCAT(DISTINCT chemin) as photos
                        FROM voiture v
                    INNER JOIN marque m
                        ON m.id_marque = v.id_marque
                    INNER JOIN energie e
                        ON v.id_energie = e.id_energie
                    LEFT JOIN voiture_photo vp
                        ON vp.id_voiture = v.id_voiture
                    LEFT JOIN photo p
                        ON p.id_photo = vp.id_photo
                    GROUP BY v.id_voiture, m.nom, v.model, v.photo, v.prix, v.annee, v.kilometrage;";
        }

        private function generateQueryToCollectFromBrand($marque) {
            return "SELECT v.id_voiture, m.nom, v.model, v.photo, v.prix, v.annee, v.kilometrage, e.type as energie
                        , GROUP_CONCAT(DISTINCT chemin) as photos
                        FROM voiture v
                    INNER JOIN marque m
                        ON m.id_marque = v.id_marque
                    INNER JOIN energie e
                        ON v.id_energie = e.id_energie
                    LEFT JOIN voiture_photo vp
                        ON vp.id_voiture = v.id_voiture
                    LEFT JOIN photo p
                        ON p.id_photo = vp.id_photo
                        WHERE m.nom = '$marque'
                    GROUP BY v.id_voiture, m.nom, v.model, v.photo, v.prix, v.annee, v.kilometrage;";
        }

        private function generateQueryToCollectFromId($id_voiture) {
            return "SELECT v.id_voiture, m.nom, v.model, v.photo, v.prix, v.mise_en_circulation, v.annee, v.kilometrage, e.type as energie, 
                        GROUP_CONCAT(DISTINCT chemin) as photos, bv.type, v.couleur, v.nombre_de_porte,
                        v.nombre_de_place, v.puissance_fiscal, v.puissance, v.premier_main, crit_air, emission_co2, volume_coffre
                        FROM voiture v
                    INNER JOIN marque m
                        ON m.id_marque = v.id_marque

                    INNER JOIN energie e
                        ON v.id_energie = e.id_energie

                    LEFT JOIN voiture_boite_vitesse vbv
                        ON v.id_voiture = vbv.id_voiture
                    LEFT JOIN boite_de_vitesse bv
                        ON bv.id_boite_vitesse = vbv.id_boite_vitesse

                    LEFT JOIN voiture_photo vp
                        ON vp.id_voiture = v.id_voiture
                    LEFT JOIN photo p
                        ON p.id_photo = vp.id_photo

                    WHERE v.id_voiture = $id_voiture
                    GROUP BY v.id_voiture, m.nom, v.model, v.photo, v.prix, v.mise_en_circulation, v.annee, v.kilometrage, bv.type, v.couleur, v.nombre_de_porte,
                    v.nombre_de_place, v.puissance_fiscal, v.puissance ;";
        }

        private function generateQueryFilter($minKm, $maxKm, $minPrice, $maxPrice, $minYear, $maxYear) {
            return "SELECT v.id_voiture, m.nom, v.model, v.photo, v.prix, v.annee, v.kilometrage, e.type as energie, GROUP_CONCAT(DISTINCT chemin) as photos
                        FROM voiture v
                    INNER JOIN marque m
                        ON m.id_marque = v.id_marque
                    INNER JOIN energie e
                        ON v.id_energie = e.id_energie
                    LEFT JOIN voiture_photo vp
                        ON vp.id_voiture = v.id_voiture
                    LEFT JOIN photo p
                        ON p.id_photo = vp.id_photo
                    WHERE v.kilometrage BETWEEN $minKm AND $maxKm
                    AND v.prix BETWEEN $minPrice AND $maxPrice
                    AND v.annee BETWEEN $minYear AND $maxYear
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
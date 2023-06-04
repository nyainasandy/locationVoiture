<?php

    require_once("database/QueryExecutor.class.php");

    class Voitures {

        public function findAll() {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCollectAllCars();
            return $queryExecutor->execute($sql);
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
    
    }
?>
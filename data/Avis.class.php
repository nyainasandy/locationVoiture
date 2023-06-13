<?php

    require_once("database/QueryExecutor.class.php");
    require_once("data/CarData.class.php");

    class Avis {
        public function findByVehicleId($id_voiture) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToGetReviewsFromIdVehicle($id_voiture);
            return $queryExecutor->select($sql);
        }

        private function generateQueryToGetReviewsFromIdVehicle( $id_voiture) {

            return "SELECT vd.nom, a.commentaire, a.date, a.intitule, a.note, a.nom_client
                        FROM vendeur vd
                    INNER JOIN voiture v
                        ON vd.id_vendeur = v.id_vendeur
                    INNER JOIN avis a
                        ON vd.id_vendeur = a.id_vendeur
                     WHERE v.id_voiture = $id_voiture;";
        }

    }
?>
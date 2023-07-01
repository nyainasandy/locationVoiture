<?php

    require_once("database/QueryExecutor.class.php");
    require_once("data/CarData.class.php");
    require_once("data/OpeningData.class.php");

    class Opening {

        public function findAll() {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCollectAll();
            return $queryExecutor->select($sql);
        }

        public function save($openingData) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToSaveChange($openingData);
            return $queryExecutor->select($sql);

        }

        private function generateQueryToSaveChange($openingData) {

            $id = $openingData->getId();
            $am = $openingData->getAm();
            $pm = $openingData->getPm();

            return "UPDATE ouverture_magasin
                    SET am = '$am', pm = '$pm' 
                    WHERE id_ouverture_magasin = $id;";

        }

        private function generateQueryToCollectAll() {

            return "SELECT o.id_ouverture_magasin as id, o.jour, o.am, o.pm
                    FROM ouverture_magasin o
                    ORDER BY o.id_ouverture_magasin ASC;";
        }

    }
?>
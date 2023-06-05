<?php

    require_once("database/QueryExecutor.class.php");

    class Brands {

        public function findAll() {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCollectAllBrands();
            return $queryExecutor->select($sql);
        }

        private function generateQueryToCollectAllBrands() {
            return "SELECT m.id_marque, m.nom as marque
                        FROM marque m
                        ORDER BY m.nom ASC;";
        }
    
    }
?>
<?php

    require_once("database/QueryExecutor.class.php");

    class Warranties {

        public function findAll() {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCollectAllWarranties();
            return $queryExecutor->select($sql);
        }

        private function generateQueryToCollectAllWarranties() {
            return "SELECT g.id_garantie, g.nombre_de_mois
                        FROM garantie g;";
        }
    
    }
?>
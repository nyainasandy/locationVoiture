<?php

    require_once("database/QueryExecutor.class.php");

    class Energies {

        public function findAll() {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCollectAllEnergies();
            return $queryExecutor->execute($sql);
        }

        private function generateQueryToCollectAllEnergies() {
            return "SELECT e.id_energie, e.type as energie
                        FROM energie e;";
        }
    
    }
?>
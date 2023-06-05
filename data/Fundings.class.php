<?php
    require_once("database/QueryExecutor.class.php");

    class Fundings {
        public function findAll() {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCollectAllFundings();
            return $queryExecutor->select($sql);
        }

        public function create($id_voiture, $id_financement, $nombre_mois, $interet, $montant_total) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCreateNewRecord($id_voiture, $id_financement, $nombre_mois, $interet, $montant_total);
            return $queryExecutor->insert($sql);
        }

        private function generateQueryToCollectAllFundings() {
            return "SELECT f.id_financement, f.type
                        FROM financement f;";
        }
        
        private function generateQueryToCreateNewRecord($id_voiture, $id_financement, $nombre_mois, $interet, $montant_total) {
            return "INSERT INTO voiture_financement 
                        (id_voiture, id_financement, nombre_mois, interet, montant_total)
                    VALUES ($id_voiture, $id_financement, $nombre_mois, $interet, $montant_total)";
        }
    
    }
?>
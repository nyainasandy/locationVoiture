<?php
    require_once("database/QueryExecutor.class.php");

    class Fundings {

        public function findAll() {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCollectAllFundings();
            return $queryExecutor->select($sql);
        }

        public function findByVehicleId($id_voiture) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToGetFundsFromIdVehicle($id_voiture);
            return $queryExecutor->select($sql);
        }

        public function create($id_voiture, $id_financement, $nombre_mois, $mensualite) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCreateNewRecord($id_voiture, $id_financement, $nombre_mois, $mensualite);

            echo "FUNDING : $sql<br/>";
            return $queryExecutor->insert($sql);
        }

        private function generateQueryToCollectAllFundings() {
            return "SELECT f.id_financement, f.type
                        FROM financement f;";
        }
        
        private function generateQueryToCreateNewRecord($id_voiture, $id_financement, $nombre_mois, $mensualite) {
            return "INSERT INTO voiture_financement 
                        (id_voiture, id_financement, nombre_mois, mensualite)
                    VALUES ($id_voiture, $id_financement, $nombre_mois, $mensualite)";
        }
        
        private function generateQueryToGetFundsFromIdVehicle($id_voiture) {
            return "SELECT vf.nombre_mois, vf.mensualite
                    FROM financement f
                    INNER JOIN voiture_financement vf
                        ON vf.id_financement = f.id_financement
                    INNER JOIN voiture v
                        ON v.id_voiture = vf.id_voiture
                    WHERE v.id_voiture = $id_voiture
                    ORDER BY vf.mensualite ASC";
        }
    
    
    }
?>
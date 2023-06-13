<?php
    require_once("database/QueryExecutor.class.php");

    class Photos {

        public function findAll() {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCollectAll();
            return $queryExecutor->select($sql);
        }

        public function findByVehicleId($id_voiture) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToGetPhotoFromIdVehicle($id_voiture);
            return $queryExecutor->select($sql);
        }

        private function generateQueryToCollectAll() {
            return "SELECT p.id_photo, p.chemin
                        FROM photo p;";
        }
        
        private function generateQueryToGetPhotoFromIdVehicle($id_voiture) {
            return "SELECT p.chemin
                    FROM photo p
                    INNER JOIN voiture_photo vp
                        ON vp.id_photo = p.id_photo
                    INNER JOIN voiture v
                        ON v.id_voiture = vp.id_voiture
                    WHERE v.id_voiture = $id_voiture";
        }
    
    
    }
?>
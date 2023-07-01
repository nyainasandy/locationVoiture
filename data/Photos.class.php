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
        
        public function create($chemin, $id_voiture) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCreateNewRecord($chemin);
            $id_photo = $queryExecutor->insert($sql);

            $sql = $this->generateQueryToJoinToRecord($id_voiture, $id_photo);
            $queryExecutor->insert($sql);
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
    
        private function generateQueryToCreateNewRecord($chemin) {
            return "INSERT INTO photo (id_photo, chemin) VALUES (NULL, '$chemin')";
        }
    
        private function generateQueryToJoinToRecord($id_voiture, $id_photo) {
            return "INSERT INTO voiture_photo (id_voiture, id_photo) VALUES ($id_voiture, $id_photo)";
        }
    
    }
?>
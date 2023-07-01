<?php

    require_once("database/QueryExecutor.class.php");
    class Service {
        
        public function findAll() {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCollectAll();
            return $queryExecutor->select($sql);
        }

        public function findById($id_voiture) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToGetPhotoFromId($id_voiture);
            return $queryExecutor->select($sql);
        }

        private function generateQueryToCollectAll() {
            return "SELECT s.id_service, s.nom, s.prix
                        FROM `service` s;";
        }
        
        public function create($label, $price) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCreateNewRecord($label, $price);
            $queryExecutor->insert($sql);
        }

        private function generateQueryToCreateNewRecord($label, $price) {
            return "INSERT INTO service (id_service, nom, prix) VALUES (NULL, '$label', $price)";
        }
    
    }
?>
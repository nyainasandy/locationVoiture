<?php

    require_once("database/QueryExecutor.class.php");
    class Service {
        
        public function findAll() {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCollectAll();
            return $queryExecutor->select($sql);
        }

        public function create($label, $price) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCreateNewRecord($label, $price);
            $queryExecutor->insert($sql);
        }

        public function delete($id) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToDeleteFromId($id);
            $queryExecutor->insert($sql);
        }

        public function update($id, $nom, $prix) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToUpdate($id, $nom, $prix);
            $queryExecutor->insert($sql);
        }

        private function generateQueryToCollectAll() {
            return "SELECT s.id_service, s.nom, s.prix
                        FROM `service` s;";
        }
        
        private function generateQueryToCreateNewRecord($label, $price) {
            return "INSERT INTO service (id_service, nom, prix) VALUES (NULL, '$label', $price)";
        }
    
        private function generateQueryToDeleteFromId($id) {
            return "DELETE FROM service WHERE id_service = $id";
        }

        private function generateQueryToUpdate($id, $nom, $prix) {
            return "UPDATE `service` 
                    SET nom = '$nom', prix = $prix
                    WHERE id_service = $id;";
        }
    
    }
?>
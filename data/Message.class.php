<?php
    require_once("database/QueryExecutor.class.php");
    require_once("data/MessageData.class.php");

    class Message {

        public function findAll() {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCollectAll();
            return $queryExecutor->select($sql);
        }

        public function findById($id_message) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToGetPhotoFromId($id_message);
            return $queryExecutor->select($sql);
        }

        public function create($messageData) {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCreateNewRecord($messageData);
            $queryExecutor->insert($sql);
        }

        private function generateQueryToCollectAll() {
            return "SELECT m.id_message, m.nom, m.telephone, m.mail, m.message, m.date
                        FROM `message` m;";
        }
        
        private function generateQueryToGetPhotoFromId($id_message) {
            return "SELECT m.id_message, m.nom, m.telephone, m.mail, m.message, m.date
                        FROM `messsage` m
                    WHERE m.id_message = $id_message";
        }
    
        private function generateQueryToCreateNewRecord($messageData) {
            $nom = $messageData->getNom();
            $telephone = $messageData->getTelephone();
            $mail = $messageData->getMail();
            $date = $messageData->getDate();
            $message = $messageData->getMessage();
            $date = date("Y-m-d");

            return "INSERT INTO `message` (id_message, nom, telephone, mail, `message`, `date`) 
                    VALUES (NULL, '$nom', '$telephone', '$mail', '$message', '$date')";
        }
    
    }
?>
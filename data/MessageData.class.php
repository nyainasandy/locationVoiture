<?php
    class MessageData {
        private $nom;
        private $telephone;
        private $mail;
        private $message;
        private $date;

        public function setNom($nom) {
            $this->nom = $nom;
        }
        
        public function getNom() {
            return $this->nom;
        }
        
        public function setTelephone($telephone) {
            $this->telephone = $telephone;
        }
        
        public function getTelephone() {
            return $this->telephone;
        }
        
        public function setMail($mail) {
            $this->mail = $mail;
        }
        
        public function getMail() {
            return $this->mail;
        }
        
        public function setMessage($message) {
            $this->message = $message;
        }
        
        public function getMessage() {
            return $this->message;
        }
        
        public function setDate($date) {
            $this->date = $date;
        }
        
        public function getDate() {
            return $this->date;
        }
    }
?>
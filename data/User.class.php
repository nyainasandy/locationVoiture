<?php

    class User {
        
        public function isConnected() {
            return $this->getUserName() != null && $this->getFullName() != null && $this->getRole() != null;
        }

        public function getUserName() {
            if(isset($_SESSION["utilisateur"]) && $_SESSION["utilisateur"] != null) {
                return $_SESSION["utilisateur"];
            }

            return null;
        }

        public function getLastName() {
            if(isset($_SESSION["nom"]) && $_SESSION["nom"] != null) {
                return $_SESSION["nom"];
            }

            return null;
        }

        public function getName() {
            if(isset($_SESSION["prenom"]) && $_SESSION["prenom"] != null) {
                return $_SESSION["prenom"];
            }

            return null;
        }

        public function getFullName() {
            $name = $this->getName();
            $lastName = $this->getLastName();

            if($name != null && $lastName != null) {
                return "$lastName $name";
            }

            return null;
        }

        public function isAdmin() {
            return $this->getFirstRole() == 'Administrateur';
        }

        public function isEmployees() {
            return $this->getFirstRole() == 'Employes';
        }

        public function isSailor() {
            return $this->getFirstRole() == 'vendeurs';
        }

        private function getFirstRole() {
            $role = explode(",", $this->getRole());
            return $role[0];
        }

        public function getRole() {
            if(isset($_SESSION["role"]) && $_SESSION["role"] != null) {
                return $_SESSION["role"];
            }

            return null;
        }

    }
?>
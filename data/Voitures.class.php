<?php

    require_once("database/Database.class.php");
    require_once("database/Query.class.php");

    class Voitures {

        private $database = null;

        public function getAll() {

            $this->connectToDatabase();
            if($this->database == null || !$this->database->isConnected()) {
                print 'Unable to connect to database !!';
                return null;
            }

            $query = new Query();
            $connection = $this->database->getConnection();
            $sql = $this->generateQueryToCollectAllCars();

            $voitures = $query->executeQuery($connection, $sql);

            $this->database->close();

            return $voitures;
        }

        private function connectToDatabase() {
            $this->database = new Database();
            $this->database->connect();
        }

        private function generateQueryToCollectAllCars() {
            return "SELECT v.id_voiture, m.nom, v.model, v.photo, GROUP_CONCAT(f.type) as financements
                        FROM voiture v
                    INNER JOIN voiture_financement vf
                        ON vf.id_voiture = v.id_voiture
                    INNER JOIN financement f
                        ON vf.id_financement = f.id_financement
                    INNER JOIN marque m
                        ON m.id_marque = v.id_marque
                    GROUP BY v.id_voiture, m.nom, v.model, v.photo;";
        }
    
    }
?>
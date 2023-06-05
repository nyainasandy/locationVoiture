<?php
    require_once("Database.class.php");
    require_once("Query.class.php");

    class QueryExecutor {

        private $database = null;

        public function select($sql) {

            $this->connectToDatabase();
            if($this->database == null || !$this->database->isConnected()) {
                print 'Unable to connect to database !!';
                return null;
            }

            $query = new Query();
            $connection = $this->database->getConnection();
            
            $results = $query->selectQuery($connection, $sql);

            $this->database->close();

            return $results;
        }

        public function insert($sql) {

            $this->connectToDatabase();
            if($this->database == null || !$this->database->isConnected()) {
                print 'Unable to connect to database !!';
                return null;
            }

            $query = new Query();
            $connection = $this->database->getConnection();
            
            $query->insertQuery($connection, $sql);

            $lastInsertId = $connection->lastInsertId();
            $this->database->close();

            return $lastInsertId;
        }

        private function connectToDatabase() {
            $this->database = new Database();
            $this->database->connect();
        }

    }

?>
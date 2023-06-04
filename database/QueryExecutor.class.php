<?php
    require_once("Database.class.php");
    require_once("Query.class.php");

    class QueryExecutor {

        private $database = null;

        public function execute($sql) {

            $this->connectToDatabase();
            if($this->database == null || !$this->database->isConnected()) {
                print 'Unable to connect to database !!';
                return null;
            }

            $query = new Query();
            $connection = $this->database->getConnection();
            
            $results = $query->executeQuery($connection, $sql);

            $this->database->close();

            return $results;
        }

        private function connectToDatabase() {
            $this->database = new Database();
            $this->database->connect();
        }

    }

?>
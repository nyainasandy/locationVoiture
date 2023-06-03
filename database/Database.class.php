<?php

class Database {

    private $servername = 'localhost';
    private $username = 'bo';
    private $password = 'akFW@5j9Bg*lOX49';

    private $connection = null;

    public function connect() {
        try {
            //On établit la connexion
            $this->connection = new PDO("mysql:host=$this->servername;dbname=vente", $this->username, $this->password);
            //On définit le mode d'erreur de PDO sur Exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        }
        
        // On capture les exceptions si une exception est levée
        catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
            $this->connection = null;
        }
    }

    public function isConnected() {
        return $this->connection != null;
    }

    public function close() {
        $this->connection = null;
    }

    public function getConnection() {
        return $this->connection;
    }

}

?>
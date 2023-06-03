<?php
class Query {

    public function executeQuery($connection, $sql) {
        $query = $connection->prepare($sql);
        $query->execute();
        
        // On récupère les données sous forme de tableau
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>
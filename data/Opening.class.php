<?php

    require_once("database/QueryExecutor.class.php");
    require_once("data/CarData.class.php");

    class Opening {

        public function findAll() {
            $queryExecutor = new QueryExecutor();
            $sql = $this->generateQueryToCollectAll();
            return $queryExecutor->select($sql);
        }

        private function generateQueryToCollectAll() {

            return "SELECT o.id_ouverture_magasin as id, o.jour, o.am, o.pm, o.ferme
                        FROM ouverture_magasin o
                        ORDER BY o.id_ouverture_magasin ASC;";
        }

    }
?>
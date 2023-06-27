<?php

    require_once("database/QueryExecutor.class.php");
    
        class Connection {
            
            public function findByUsernameAndPassword($user, $password) {
                $queryExecutor = new QueryExecutor();
                $sql = $this->generateQueryToGetUsernameAndPassword($user, $password);
                return $queryExecutor->select($sql);
            }
                
            private function generateQueryToGetUsernameAndPassword($user, $password) {
                return "SELECT u.nom_utilisateur, u.nom, u.prenom, r.nom as role
                        FROM user u
                        INNER JOIN user_role ur
                            ON u.id_user = ur.id_user
                        INNER JOIN `role` r
                            ON r.id_role = ur.id_role
                        WHERE (u.mail = '$user' OR u.nom_utilisateur = '$user')
                        AND u.mot_de_passe = '$password';";

            }
        
        }
    
    
?>
<?php 

    require_once("data/User.class.php");
    $user = new User();
    if($user->isConnected()) {

        if(isset($_GET["profile"])) {
            require("Profile.php");
        } else {
            include("fragments/body/public/Aiguillage.php");
        }
        
    }

?>
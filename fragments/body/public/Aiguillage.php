<?php 
if(isset($_GET['new'])) {

//cs=ko&si=tb -> creation status (ok, ko) - size image (tb : too big)
    echo "<h1 class='h1 pb-3 mb-5 border-bottom'>New</h1>";
    require("fragments/body/public/New.php");

} else if(isset($_GET['view']) && isset($_GET['id'])) {
    require("fragments/body/public/View.php");

} else if(isset($_GET['login'])) {
    require("fragments/body/public/Login.php");

} else {
    require("fragments/body/public/Voitures.php");
} 

?>
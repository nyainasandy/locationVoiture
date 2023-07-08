<?php 
    require_once("data/Service.class.php");

    if(isset($_POST["label"])) {
            
        $label = $_POST["label"];
        $price = $_POST["price"];

        $service = new Service();
        echo $service->create($label, $price);
        
    } 
?>
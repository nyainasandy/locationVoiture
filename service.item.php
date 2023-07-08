<?php

    require_once("data/ServiceItem.class.php");

    $id = null;
    $label = null;
    $price = null;

    if(isset($service["id_service"])) {
        $id = $service["id_service"];
        $label = $service["nom"];
        $price = $service["prix"];
        
    } else if(isset($_GET["id"]) && isset($_GET["nom"]) && isset($_GET["prix"])) {
        $id = $_GET["id"];
        $label = $_GET["nom"];
        $price = $_GET["prix"];
    }

    if(!is_null($id)) {
        $serviceItem = new ServiceItem();
        echo $serviceItem->generate($id, $label, $price);
    }
?>
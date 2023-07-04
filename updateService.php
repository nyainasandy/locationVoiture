<?php 
    require_once("data/Service.class.php");

    if(isset($_POST["id"])) {
        
        $id = $_POST["id"];
        $label = $_POST["label"];
        $price = $_POST["price"];

        $service = new Service();
        $service->update($id, $label, $price);

        http_response_code(200);
        
    } else {
        http_response_code(500);
    }
?>
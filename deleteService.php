<?php 
    require_once("data/Service.class.php");

    if(isset($_POST["id"])) {
            
        $id = $_POST["id"];

        $service = new Service();
        $service->delete($id);

        http_response_code(200);
        
    } else {
        http_response_code(500);
    }
?>
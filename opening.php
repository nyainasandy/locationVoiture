<?php

    require_once("data/Opening.class.php");
    require_once("data/OpeningData.class.php");

    if(isset($_POST["id"])) {

        $id = $_POST["id"];
        $fromAm = $_POST["fromAm"];
        $toAm = $_POST["toAm"];
        $fromPm = $_POST["fromPm"];
        $toPm = $_POST["toPm"];
    
        $opening = new Opening();
        $openingData = new OpeningData();

        echo "FROM AM($fromAm - $toAm) - PM($fromPm - $toPm)";
        $openingData->setId($id);
        $openingData->setAm($fromAm, $toAm);
        $openingData->setPm($fromPm, $toPm);

        $opening->save($openingData);

        http_response_code(200);
    } else {
        http_response_code(500);
    }

?>
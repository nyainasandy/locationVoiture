<?php
    require_once("data/Message.class.php");
    require_once("data/MessageData.class.php");

    $message = new Message();
    $messageData = new MessageData();

    print_r($_POST);
    if(isset($_POST['username'])) {

        $messageData->setNom($_POST["username"]);
        $messageData->setTelephone($_POST["telephone"]);
        $messageData->setMail($_POST["email"]);
        $messageData->setMessage($_POST["message"]);

        $message->create($messageData);
    } 

    header("location: /");
?>
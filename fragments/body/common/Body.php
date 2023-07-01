<div class="container my-5">
    <?php
        if(isset($_GET['view']) && isset($_GET['id'])) {
            require("fragments/body/public/View.php");

        } else if(isset($_GET['contact'])) {
            require("fragments/body/public/Contact.php");
        
        } else if(isset($_GET['service'])) {
            require("fragments/body/public/Service.php");

        } else if(isset($_GET['login'])) {
            require("fragments/body/public/Login.php");

        } else {
            require("fragments/body/public/Voitures.php");
        } 
    ?>
</div>
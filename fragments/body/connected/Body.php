<div class="container-fluid px-0">
    <?php
        if(isset($_GET["profile"])) {
            require("Profile.php");
            
        } else {
            require("fragments/body/common/Body.php");
        } 
    ?>
</div>
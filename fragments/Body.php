<div class="container my-5">

    <?php 

    require_once("data/User.class.php");
    $user = new User();
    if($user->isConnected()) {
        include("fragments/body/connected/Aiguillage.php");
    } else {
        include("fragments/body/public/Aiguillage.php");
    }

    ?>
   
</div>
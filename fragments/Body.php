<div class="container my-5">

    <?php 
    if(isset($_GET['new'])) {

        //cs=ko&si=tb -> creation status (ok, ko) - size image (tb : too big)
        echo "<h1 class='h1 pb-3 mb-5 border-bottom'>New</h1>";
        require("body/New.php");

    } else if(isset($_GET['view']) && isset($_GET['id'])) {
        require("body/View.php");

    } else if(isset($_GET['login'])) {
        require("body/Login.php");
        
    } else {
        require("Voitures.php");
    } 
    ?>
   
</div>
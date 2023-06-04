<div class="container my-5">

    <?php 
    if(isset($_GET['new'])) {
        echo "<h1 class='h1 pb-3 mb-5 border-bottom'>New</h1>";
        require("body/New.php");
    } else {
        echo "<h1 class='h1 pb-3 mb-5 border-bottom'>Cars</h1>";
        require("./Voitures.php");
    } 
    ?>
   
    
</div>
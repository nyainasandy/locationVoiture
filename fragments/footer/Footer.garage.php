<?php require_once("data/Opening.class.php"); ?>
<div class="label">Garage</div>

<div class="header-label mt-3 mb-2"><i class="fa fa-phone me-3"></i> Nous contacter</div>
<div class="address ms-4">
    01 23 45 67 89
</div>

<div class="header-label mt-3 mb-2"><i class="fa fa-location-dot me-3"></i> Où nous trouver ?</div>
<div class="address ms-4">
    15 Avenue Jean-Jaurès<br/>
    94110 Arcueil
</div>

<div class="header-label my-4"><i class="fa fa-calendar-days me-3"></i> Heure d'ouverture</div>

<?php 
    $opening = new Opening();
    $allOpeningTimes = $opening->findAll();
    foreach($allOpeningTimes as $allOpeningTime) {
?>
    <div class="row ms-2">
        <div class="col-2"><?php echo $allOpeningTime["jour"]; ?></div>

        <?php 
            if(is_null($allOpeningTime["am"]) && is_null($allOpeningTime["pm"])) { ?>
                <div class="col-8">Fermé</div>
            <?php } else { ?>
                <div class="col-4"><?php echo $allOpeningTime["am"] ?: 'Fermé'; ?></div>
                <div class="col-4"><?php echo $allOpeningTime["pm"] ?: 'Fermé'; ?></div>
            <?php }
        ?>
        
    </div>

<?php } ?>


<?php 
    if(isset($voiture)) {

    ?>
        <div class="row"> 
            <div class="col-lg-9">
                <div class="h4">
                    <span class="me-4 border-end pe-3"><a href="/" class="text-decoration-none"><i class="fa-solid fa-angles-left me-2"></i> Retour</a></span><?php echo $voiture['nom']." ".$voiture['model']; ?>
                </div>
                <div>
                    <span class="border-end pe-3"><?php echo date_format($date_circulation,"d/m/Y"); ?></span>
                    <span class="border-end pe-3"><?php echo number_format($voiture['kilometrage'], '0', ',', ' '); ?> km</span>
                    <?php echo $voiture['energie']; ?>
                </div>
                
            </div>

            <div class="col-lg-3 text-end pe-5">
                <div>
                    <span class="h1"><?php echo number_format($voiture['prix'], '0', ',', ' '); ?> &euro;</span> TTC
                </div>
                <div>
                    <span class="me-3 pe-3 border-end">Financement</span> Assurance
                </div>
            </div>
            
        </div>

<?php } else { ?>
    <div class="row"> 
        <div class="col-lg-9">
            <div class="h4">
                <a href="/" class="text-decoration-none"><i class="fa-solid fa-angles-left me-2"></i> Retour</a>
            </div>
            <div>
                La voiture que vous cherchez n'existe pas dans notre base de données !!!
            </div>
            
        </div>

    </div>

<?php } ?>
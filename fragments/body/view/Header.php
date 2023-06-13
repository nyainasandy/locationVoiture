<div class="row"> 
    <div class="col-lg-9">
        <div class="h4">
            <?php echo $voiture['nom']." ".$voiture['model']; ?>
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
<div class="row mt-4 me-3 pb-4 pt-4">

    <h3 class="h3 p-2 bg-secondary text-light rounded mb-3">Financements</h3>
    
    <div class="row mx-2 mt-2 funding">

        <?php 
        foreach($allFundings as $funding) {
        ?>
            <div class="col-lg-3 me-2 border p-3 ps-4 text-center">
                <div class="mb-2 border-bottom">à partir de <br/><span class="fw-bold mb-2 fs-2"><?php echo $funding["mensualite"]." &euro;</span> / mois"; ?></div>
                <div>sur <span class="fs-1"><?php echo $funding["nombre_mois"]; ?></span> mois</div>
                <div class="d-grid gap-2 mt-3">
                    <button class="btn btn-primary btn-block">Choisir</button>
                </div>
            </div>
        <?php
        }
        ?>
        
    </div>

</div>
<div class="container mb-3 mt-5 px-3">
    <div class="row mb-3">

        <div class="col-lg-6">
            <label class="form-label" for="financement">Financements</label>
            <select class="form-select" id="financement" name="financement" aria-label="Financement">
                    <?php
                        foreach($allFundings as $fundings) {
                            echo "<option value='".$fundings['id_financement']."'>".$fundings['type']."</option>";
                        }
                    ?>
            </select>
        </div>
        
        <div class="col-lg-6">
        <label class="form-label" for="nombre_mois">Nombre de mois</label>
        <input class="form-control" id="nombre_mois" name="nombre_mois" type="number" placeholder="Nombre de mois" />
        </div>
        
    </div>
    
    <div class="mb-3 col-6">
        <label class="form-label" for="interets">Intérêts</label>
        <input class="form-control" id="interets" name="interets" type="text" placeholder="Intérêts" />
    </div>
    <div class="mb-3 col-6">
        <label class="form-label" for="montant_total">Montant total</label>
        <input class="form-control" id="montant_total" name="montant_total" type="text" placeholder="Montant total" />
    </div>
    
</div>
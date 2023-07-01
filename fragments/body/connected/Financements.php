<div class="fundings mb-5 mt-5 px-3">
    <div class="row mb-3 bg-gray-light p-2">

        <div class="col-lg-6">
            <label class="form-label" for="financement0">Financements</label>
            <select class="form-select" id="financement0" name="financement0" aria-label="Financement">
                <?php foreach($allFundings as $funding) { ?>
                    <option value="<?php echo $funding['id_financement']; ?> "><?php echo $funding['type']; ?></option>
                <?php } ?>
            </select>
        </div>
        
        <div class="col-lg-6">
            <label class="form-label" for="nombre_mois1">Nombre de mois</label>
            <input class="form-control" id="nombre_mois1" name="nombre_mois1" type="number" placeholder="Nombre de mois" />
        </div>
        
    </div>
    
    <div class="mb-3 w-50">
        <label class="form-label" for="mensualite2">Mensualité</label>
        <input class="form-control" id="mensualite2" name="mensualite2" type="text" placeholder="Mensualité" />
    </div>
    <div class="row mb-3 bg-gray-light p-2">

        <div class="col-lg-6">
            <label class="form-label" for="financement3">Financements</label>
            <select class="form-select" id="financement3" name="financement3" aria-label="Financement">
                <?php foreach($allFundings as $funding) { ?>
                    <option value="<?php echo $funding['id_financement']; ?> "><?php echo $funding['type']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="col-lg-6">
            <label class="form-label" for="nombre_mois'.$id.'">Nombre de mois</label>
            <input class="form-control" id="nombre_mois'.$id.'" name="nombre_mois'.$id.'" type="number" placeholder="Nombre de mois" />
        </div>

    </div>

    <div class="mb-3 w-50">
        <label class="form-label" for="mensualite'.$id.'">Mensualité</label>
        <input class="form-control" id="mensualite'.$id.'" name="mensualite'.$id.'" type="text" placeholder="Mensualité" />
    </div>
    <div class="row mb-3 bg-gray-light p-2">

        <div class="col-lg-6">
            <label class="form-label" for="financement'.$id.'">Financements</label>
            <select class="form-select" id="financement'.$id.'" name="financement'.$id.'" aria-label="Financement">
                <?php foreach($allFundings as $funding) { ?>
                    <option value="<?php echo $funding['id_financement']; ?> "><?php echo $funding['type']; ?></option>
                <?php } ?>
            </select>
        </div>
        
        <div class="col-lg-6">
            <label class="form-label" for="nombre_mois'.$id.'">Nombre de mois</label>
            <input class="form-control" id="nombre_mois'.$id.'" name="nombre_mois'.$id.'" type="number" placeholder="Nombre de mois" />
        </div>
        
    </div>
    
    <div class="mb-3 w-50">
        <label class="form-label" for="mensualite'.$id.'">Mensualité</label>
        <input class="form-control" id="mensualite'.$id.'" name="mensualite'.$id.'" type="text" placeholder="Mensualité" />
    </div>
    <div class="row mb-3 bg-gray-light p-2">

        <div class="col-lg-6">
            <label class="form-label" for="financement'.$id.'">Financements</label>
            <select class="form-select" id="financement'.$id.'" name="financement'.$id.'" aria-label="Financement">
                <?php foreach($allFundings as $funding) { ?>
                    <option value="<?php echo $funding['id_financement']; ?> "><?php echo $funding['type']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="col-lg-6">
            <label class="form-label" for="nombre_mois'.$id.'">Nombre de mois</label>
            <input class="form-control" id="nombre_mois'.$id.'" name="nombre_mois'.$id.'" type="number" placeholder="Nombre de mois" />
        </div>

    </div>

    <div class="mb-3 w-50">
        <label class="form-label" for="mensualite'.$id.'">Mensualité</label>
        <input class="form-control" id="mensualite'.$id.'" name="mensualite'.$id.'" type="text" placeholder="Mensualité" />
    </div>
    
</div>

<div class="form-group text-end">
    <button name="submit" type="submit" class="btn btn-primary btn-lg">Enregistrer</button>
</div>

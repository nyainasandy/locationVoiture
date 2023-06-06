<?php
    require_once("data/Voitures.class.php");

    $voitures = new Voitures();
    $allVoitures = $voitures->findAll();

    if($allVoitures != null) { ?>

        <div class='container border mb-3'>
            <div class='row p-3'>
            <div class='fw-bold col-lg-6 d-flex align-items-center'>
                <?php echo count($allVoitures)." annonces"; ?>
            </div>
            <div class='col-lg-6'>
                <div class='row d-flex align-items-center'>
                    <div class='col-6 text-end'>
                        Trier par :
                    </div>
                    <div class='col-6'>
                        <select id='tri' name='tri' class='form-select'>
                            <option value='0'>Prix croissant</option>
                            <option value='1'>Prix décroissant</option>
                            <option value='2'>Mensualité moins cher</option>
                            <option value='3'>Mensualité plus cher</option>
                            <option value='4'>Pertinence</option>
                        </select>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class='row g-2'>
        <?php foreach($allVoitures as $voiture) { ?>

            <div class='col-lg-4 mt-1 p-1'>

                <div class='border fiche p-2'>
                    <img src="<?php echo $voiture['photo']; ?>" class='img-fluid' />
                    <div class='row my-3 px-2'>
                        <div class='col-lg-8'>
                            <div class='type'>Certified used 2021</div>
                            <div class='label'><?php echo $voiture['nom']." ".$voiture['model']; ?></div>
                        </div>
                        <div class='col-lg-4 text-end py-2 px-2'>
                            <span class='p-2 bg-orange text-white fw-bold'>
                                &euro; <?php echo number_format($voiture['prix'], 2, ',', ' '); ?>
                            </span>
                        </div>
                    </div>

            
                    <div class='row mt-1'>
                        <div class='col-lg-4'>
                            Année 
                        </div>
                        <div class='col-lg-8 ps-2'>
                            <?php $voiture['annee']; ?>
                        </div>
                    </div>

            
                    <div class='row mt-1'>
                        <div class='col-lg-4'>
                            Carburant
                        </div>
                        <div class='col-lg-8 ps-2'>
                            <?php echo $voiture['energie']; ?>
                        </div>
                    </div>

                    <div class='row mt-1'>
                        <div class='col-lg-4'>
                            Kilometrage
                        </div>
                        <div class='col-lg-8 ps-2'>
                            <?php echo number_format($voiture['kilometrage'], 0, ',', ' '); ?>
                        </div>
                    </div>
                    
                    <div class="mt-2 text-end">
                        <button class="btn btn btn-outline-primary">voir le detail</button>
                    </div>

                </div>

            </div>

        <?php } ?>
        
        </div>

    <?php } ?>

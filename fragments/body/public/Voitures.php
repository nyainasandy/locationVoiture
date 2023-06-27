<?php
    require_once("data/Voitures.class.php");

    $voitures = new Voitures();

    $marque = null;
    $allVoitures = null;
    if(isset($_GET['marque'])) {
        $marque = $_GET['marque'];
        $allVoitures = $voitures->getFromBrand($marque);
    } else {
        $allVoitures = $voitures->findAll(); 
    }
    ?>

    <div class="row navbar-light bg-light mx-1 pt-3 mb-4 rounded border">
        
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <?php
                    if($marque != null) {
                        echo "<li class='breadcrumb-item active' aria-current='page'>$marque</li>";
                    }
                ?>
            </ol>
        </nav>

    </div>
        
    <?php
    if($allVoitures != null) { ?>

        <div class='container border mb-3'>

            <h3 class="h3 mt-3 text-center">Filtre de recherche</h3>
            
            <div class="row">
                <div class="col-lg-4 form-group my-2">
                    <label for="km">Kilométrage</label> 
                    <input 
                        type="text" 
                        class="km-range form-control" 
                        name="km" 
                        value="" 
                        data-type="double"
                        data-min="500"
                        data-max="200000"
                        data-from="700"
                        data-to="80000"
                        data-grid="true" />
                </div> 
                <div class="col-lg-4 form-group my-2">
                    <label for="price">Prix</label> 
                    <input 
                        type="text" 
                        class="price-range form-control" 
                        name="price" 
                        value="" 
                        data-type="double"
                        data-min="2000"
                        data-max="20000"
                        data-from="2000"
                        data-to="15000"
                        data-grid="true" />
                </div> 
                <div class="col-lg-4 form-group my-2">
                    <label for="year">Années</label> 
                    <input 
                        type="text" 
                        class="year-range form-control" 
                        name="year" 
                        value="" 
                        data-type="double"
                        data-min="2000"
                        data-max="2022"
                        data-from="2010"
                        data-to="2020"
                        data-grid="true" />
                </div> 
            </div>
            
            <div class='row p-3'>
                <div class='fw-bold col-lg-6 d-flex align-items-center'>
                    <?php echo count($allVoitures)." annonces"; ?>
                </div>
                <div class="col-lg-6 d-flex flex-row-reverse">
                    <button class="btn btn-success">Appliquer filtre</button>
                </div>
            </div>

        </div>

        <div class='row g-2'>
        <?php foreach($allVoitures as $voiture) { ?>

            <div class='col-lg-4 mt-1 p-1'>

                <div class='border fiche p-2'>

                    <?php
                        if(isset($voiture['photos']) && $voiture['photos'] != null) {
                            $photos = explode(",", $voiture['photos']);
                            echo "<img src='$photos[0]' class='apercu' />";
                        } else {
                            echo "<img src=\"images/No_Image_Available.jpg\" class='apercu'/>";
                        }
                    ?>
                    
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
                        <a class="btn btn btn-outline-primary" href="?view&id=<?php echo $voiture['id_voiture']; ?>">voir le detail</a>
                    </div>

                </div>

            </div>

        <?php } ?>
        
        </div>

    <?php } ?>

<div class="row mt-5 me-3 pb-4 pt-4">

    <h3 class="h3 p-2 bg-secondary text-light rounded mb-3">Avis sur le vendeur</h3>
    
    

        <?php 
       
        foreach ($allAvis as $avis) { 
            $note = $avis["note"];

        ?>
            <div class="row mx-2 funding">
                <div class="mb-3">
                    <i class="fa fa-user-tie fa-2x me-3"></i> <?php echo $avis["nom_client"]; ?>
                </div>
        
                <p class="fw-bold">
                    <!--<i class="fas fa-star fa-sm text-warning"></i> 
                    <i class="fas fa-star fa-sm text-warning"></i> 
                    <i class="fas fa-star fa-sm text-warning"></i> 
                    <i class="fas fa-star-half-alt fa-sm text-warning"></i> 
                    <i class="far fa-star fa-sm text-warning"></i>-->
                    
                     <?php 
                        for ($i=0; $i<5; $i++) {
                            echo "<i class='fas fa-star fa-sm text-warning'></i>";
                        }
                        echo " ".$avis["intitule"]; 
                     ?>
                </p>
                <p><span class="bg-gray-light text-light p-2">Publié le <?php echo $avis["date"]; ?></span></p>
                
                <p><?php echo $avis["commentaire"]; ?></p>
            </div>
        <?php
        }
        ?>

</div>
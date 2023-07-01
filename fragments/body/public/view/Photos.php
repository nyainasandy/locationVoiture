<?php 
        
    if(isset($allPhotos) && count($allPhotos) > 0) {
    
        $number_photo = min(count($allPhotos), 4);
        
?> 
        <div class="row mt-2">
            <img src="<?php echo $allPhotos[0]["chemin"]; ?>" class="img-fluid" alt="" id="big" />
        </div>

        <div class="row mt-2">
            
            <div class="col-lg-8"> 
            <?php
            for($i=0;$i<$number_photo;$i++) {?>
                <img src="<?php echo $allPhotos[$i]["chemin"]; ?>" alt="" class="me-2 miniature" onclick="javascript: loadImage(this.src)" />
            <?php 
            } 
            ?>
            </div>
            <div class="col-lg-4 d-flex flex-row-reverse mt-4">
                <div class="btn-group h-50 pe-4" role="group">
                    <a class="btn btn-outline-secondary"><i class="fa fa-share-nodes pt-1"></i></a>
                    <a class="btn btn-outline-secondary"><i class="fa fa-bell pt-1"></i></a>
                    <a class="btn btn-outline-secondary"><i class="fa fa-heart pt-1"></i></a>
                </div>
            </div>
        </div>

<?php } else { ?>
        <div class="row mt-2">
            <img src="images/No_Image_Available.jpg" class="img-fluid" alt="" id="big" />
        </div>

        <div class="row mt-2">
            <div class="col-lg-8 mt-4">Aucune photo trouvée !!</div>
            <div class="col-lg-4 d-flex flex-row-reverse mt-4">
                <div class="btn-group pe-4" role="group">
                    <a class="btn btn-outline-secondary"><i class="fa fa-share-nodes pt-1"></i></a>
                    <a class="btn btn-outline-secondary"><i class="fa fa-bell pt-1"></i></a>
                    <a class="btn btn-outline-secondary"><i class="fa fa-heart pt-1"></i></a>
                </div>
            </div>
        
        
        </div>
<?php } ?>
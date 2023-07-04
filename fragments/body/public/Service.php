<?php
    require_once("data/Service.class.php");

    $service = new Service();
    $allServices = $service->findAll();

    $i = 1;

?>
<div class="row">

    <div class="col-lg-9">
        <h3 class="h3 mb-3 border-bottom pb-2">Sans rendez-vous</h3>
        Spécialisés dans la maintenance et la réparation de toutes les marques de véhicules, nous nous engageons à fournir des services exceptionnels à chaque fois. 
        Avec une équipe d'experts dévoués et des équipements à la pointe de la technologie, nous sommes prêts à répondre à tous vos besoins automobiles. 
        Notre objectif est d'assurer votre entière satisfaction et de garantir que votre véhicule reste en parfait état de fonctionnement.

        <h3 class="h3 my-3 border-bottom pb-2">Nos services</h3>

        <div class="row d-flex justify-content-center">
            <?php 
            foreach($allServices as $service) {
                
                if($i % 2 != 0) {
                    echo "<div class='col-lg-3 bg-gray-light text-center p-3 mb-2 mx-2'>";
                } else {
                    echo "<div class='col-lg-3 bg-dark text-white text-center p-3 mb-2 mx-2'>";
                }

                $i = $i + 1;
            ?>

                    <div class="text-uppercase fs-4"><?php echo $service["nom"] ?></div>
                    <div class="my-2">à partir de</div>
                    <div class="fw-bold fs-2"><?php echo $service["prix"] ?>&euro;00</div>

                    <div class="mt-2"><a class="btn btn-warning" href="/?contact">CONTACTEZ-NOUS</a></div>

                </div>

            <?php } ?>
        </div>
        
    </div>

    <div class="col-lg-3">
        <img src="images/pub-audi.png" alt="" class="img-fluid" />
    </div>


</div>




<div class="row mt-4 me-3 pb-4">

    <h3 class="h3 p-2 mb-3 bg-secondary text-light rounded">Description</h3>
    
    <div class="row">

        <!-- marque -->
        <div class="col-lg-4 border-end border-bottom p-3">
            
            <div class="row d-flex align-items-center">

                <div class="col-lg-3">
                    <img src="/images/icons/brand.png" alt="" width="64px" />
                </div>
                <div class="col-lg-9">
                    <div class="label description">Marque</div>
                    <div class="text-uppercase"><?php echo $voiture['nom']; ?></div>
                </div>
            </div>
            
        </div>
        
        <!-- Modèle -->
        <div class="col-lg-4 border-end border-bottom p-3">
            
            <div class="row d-flex align-items-center">

                <div class="col-lg-3">
                    <img src="/images/icons/model.png" alt="" width="64px" />
                </div>
                <div class="col-lg-9">
                    <div class="label description">Modèle</div>
                    <div><?php echo $voiture['model']; ?></div>
                </div>
            </div>
            
        </div>
        
        <!-- année de sortie -->
        <div class="col-lg-4 border-bottom p-3">
            
            <div class="row d-flex align-items-center">

                <div class="col-lg-3">
                    <img src="/images/icons/calendar.png" alt="" width="64px" />
                </div>
                <div class="col-lg-9">
                    <div class="label description">Année de sortie</div>
                    <div><?php echo $voiture['annee']; ?></div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="row">

        <!-- mise en circulation -->
        <div class="col-lg-4 p-3 border-end border-bottom">
            
            <div class="row d-flex align-items-center">
                <div class="col-lg-3">
                    <img src="/images/icons/calendar.png" alt="" width="64px" />
                </div>
                <div class="col-lg-9">
                    <div class="label description">Mise en circulation</div>
                    <div><?php echo date_format($date_circulation,"m/Y"); ?></div>
                </div>
            </div>

        </div>

        <!-- kilométrage -->
        <div class="col-lg-4 border-end border-bottom p-3">
            
            <div class="row d-flex align-items-center">
                <div class="col-lg-3">
                    <img src="/images/icons/speed.png" alt="" width="64px" />
                </div>
                <div class="col-lg-9">
                    <div class="label description">Kilométrage</div>
                    <div><?php echo number_format($voiture['kilometrage'], 0, ',', ' ')." km"; ?></div>
                </div>
            </div>

        </div>

        <!-- carburant -->
        <div class="col-lg-4 border-bottom p-3">
            
            <div class="row d-flex align-items-center">
                <div class="col-lg-3">
                    <img src="/images/icons/fuel.png" alt="" width="64px" />
                </div>
                <div class="col-lg-9">
                    <div class="label description">Carburant</div>
                    <div><?php echo $voiture['energie']; ?></div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <!-- boite de vitess -->
        <div class="col-lg-4 p-3 border-bottom border-end">
            
            <div class="row d-flex align-items-center">
                <div class="col-lg-3">
                    <img src="/images/icons/gearbox.png" alt="" width="64px" />
                </div>
                <div class="col-lg-9">
                    <div class="label description">Boite de vitesse</div>
                    <div><?php echo $voiture['type']; ?></div>
                </div>
            </div>

        </div>

        <!-- couleur-->
        <div class="col-lg-4 border-bottom border-end p-3">
            
            <div class="row d-flex align-items-center">
                <div class="col-lg-3">
                    <img src="/images/icons/color.png" alt="" width="64px" />
                </div>
                <div class="col-lg-9">
                    <div class="label description">Couleur</div>
                    <div><?php echo $voiture['couleur'] ; ?></div>
                </div>
            </div>

        </div>

        <!-- nombre de porte -->
        <div class="col-lg-4  border-bottom p-3">
            
            <div class="row d-flex align-items-center">
                <div class="col-lg-3">
                    <img src="/images/icons/car-door.png" alt="" width="64px" />
                </div>
                <div class="col-lg-9">
                    <div class="label description">Nombre de porte</div>
                    <div><?php echo $voiture['nombre_de_porte'] ;?></div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <!-- nombre de place-->
        <div class="col-lg-4 p-3 border-end">
            
            <div class="row d-flex align-items-center">
                <div class="col-lg-3">
                    <img src="/images/icons/carseat.png" alt="" width="64px" />
                </div>
                <div class="col-lg-9">
                    <div class="label description">Nombre de place</div>
                    <div><?php echo $voiture['nombre_de_place']; ?></div>
                </div>
            </div>

        </div>

        <!-- puissance fiscale-->
        <div class="col-lg-4 border-end p-3">
            
            <div class="row d-flex align-items-center">
                <div class="col-lg-3">
                    <img src="/images/icons/fiscal.png" alt="" width="64px" />
                </div>
                <div class="col-lg-9">
                    <div class="label description">Puissance fiscale</div>
                    <div><?php echo $voiture['puissance_fiscal']. " Cv" ; ?></div>
                </div>
            </div>

        </div>

        <!-- puissance -->
        <div class="col-lg-4 p-3">
            
            <div class="row d-flex align-items-center">
                <div class="col-lg-3">
                    <img src="images/icons/puissance2.png" alt="" width="64px" />
                </div>
                <div class="col-lg-9">
                    <div class="label description">Puissance</div>
                    <div><?php echo $voiture['puissance']." Ch"; ?></div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-lg-6 mt-5 pt-5">
        <div class="row border-bottom pb-2">

            <div class="col-lg-7">Emission de CO2 (NEDC)</div>
            <div class="col-lg-5 fw-bold"><?php echo $voiture['emission_co2']; ?> g/km*</div>

        </div>
        <div class="row border-bottom pb-2 mt-2">

            <div class="col-lg-7">Crit'Air</div>
            <div class="col-lg-5 fw-bold"><?php echo $voiture['crit_air']; ?></div>

        </div>
        <div class="row border-bottom pb-2 mt-2">

            <div class="col-lg-7">Première main</div>
            <div class="col-lg-5 fw-bold"><?php echo ($voiture['premier_main'] == 0 ? 'non' : 'oui'); ?></div>

        </div>
        <div class="row mt-2">

            <div class="col-lg-7">Volume coffre</div>
            <div class="col-lg-5 fw-bold"><?php echo $voiture['volume_coffre'];?></div>

        </div>
    </div>
    

</div>
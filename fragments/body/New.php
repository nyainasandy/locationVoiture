<?php
    require_once("data/Brands.class.php");
    require_once("data/Warranties.class.php");
    require_once("data/Energies.class.php");

    $brands = new Brands();
    $allBrands = $brands->findAll();

    $warranties = new Warranties();
    $allWarranties = $warranties->findAll();

    $energies = new Energies();
    $allEnergies = $energies->findAll();
?>

<form method="POST" action="Create.php">

    <div class="form-group mb-3 row">
        <div class="col-6">
            <label for="marque">Marque</label> 
            <div>
                <select id="marque" name="marque" required="required" class="form-select">
                    <?php
                        foreach($allBrands as $brand) {
                            echo "<option value='".$brand['id_marque']."'>".$brand['marque']."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="col-6">
            <label for="modele">Modèle</label> 
            <input id="modele" name="modele" placeholder="Modèle du véhicule" type="text" required="required" class="form-control">
        </div>
    </div>

    <div class="form-group mb-3 col-6">
        <label for="photo">Photo</label> 
        <input class="form-control" id="photo" name="photo" placeholder="La photo du véhicule" required="required" type="file">
    </div>

    <div class="form-group mb-3">
        <label for="annee">Année</label> 
        <input id="annee" name="annee" placeholder="Année de sortie" type="text" required="required" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="kilometrage">Kilométrage</label> 
        <input id="kilometrage" name="kilometrage" placeholder="Nombre de kilomètre actuel" type="text" required="required" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="prix">Prix</label> 
        <input id="prix" name="prix" placeholder="Son prix de vente" type="text" required="required" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="couleur">Couleur</label> 
        <input id="couleur" name="couleur" placeholder="Sa couleur actuelle" type="text" required="required" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="nombre_porte">Nombre de porte</label> 
        <input id="nombre_porte" name="nombre_porte" placeholder="Combien de porte sur le vehicule ?" type="text" required="required" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="nombre_place">Nombre de place</label> 
        <input id="nombre_place" name="nombre_place" placeholder="Combien de personnes peuvent s'installer ?" type="text" required="required" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="puissance_fiscal">Puissance fiscal</label> 
        <input id="puissance_fiscal" name="puissance_fiscal" placeholder="Sa puissance fiscale" type="text" required="required" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="puissance">Puissance</label> 
        <input id="puissance" name="puissance" placeholder="Sa puissance" type="text" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="crit_air">Crit'air</label> 
        <div class="col-6">
            <select id="crit_air" name="crit_air" required="required" class="form-select">
            <option value="0">0 - Véhicules 100% élecrique et hydrogène</option>
            <option value="1">1 - Gaz et hybrides rechargeables</option>
            <option value="2">2 - Vehicules essence Euro 4, diesel Euro 5, 6</option>
            <option value="3">3 - Vehicules essence Euro 2, 3, diesel Euro 4</option>
            <option value="4">4 - Vehicules diesel Euro 3</option>
            <option value="5">5 - Vehicules diesel Euro 2</option>
        </select>
        </div>
    </div>

    <div class="form-group mb-3">
        <label for="emission_co2">Emission co2</label> 
        <input id="emission_co2" name="emission_co2" placeholder="Emissions territoriales de gaz à effet de serre" type="text" required="required" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="mise_en_circulation">Mise en circulation</label> 
        <input id="mise_en_circulation" name="mise_en_circulation" placeholder="La date de la première mise en circulation" type="text" required="required" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label>Première main</label> 
        <div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input name="premiere_main" id="premiere_main_0" type="checkbox" class="custom-control-input" value="1" checked="checked"> 
                <label for="premiere_main_0" class="custom-control-label">Oui</label>
            </div>
        </div>
    </div>

    <div class="form-group mb-3 col-lg-6">
        <label for="volume_coffre">Volume coffre</label> 
        <input id="volume_coffre" name="volume_coffre" placeholder="Le volume total du coffre" type="text" required="required" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="garantie">Garantie</label> 
        <div class="col-6">
            <select id="garantie" name="garantie" required="required" class="form-select">
                <?php
                    foreach($allWarranties as $warranty) {
                        echo "<option value='".$warranty['id_garantie']."'>".$warranty['nombre_de_mois']." mois</option>";
                    }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group mb-3">
        <label for="energie">Energie</label> 
        <div class="col-6">
            <select id="energie" name="energie" required="required" class="form-select">
                <?php
                    foreach($allEnergies as $energie) {
                        echo "<option value='".$energie['id_energie']."'>".$energie['energie']."</option>";
                    }
                ?>
            </select>
        </div>
    </div> 

    <div class="form-group">
        <button name="submit" type="submit" class="btn btn-primary">Ajouter</button>
    </div>
</form>
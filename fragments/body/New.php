<form method="POST" action="Create.php">

    <div class="form-group row mb-3">
        <label for="marque" class="col-3 col-form-label">Marque</label> 
        <div class="col-9">
            <select id="marque" name="marque" class="form-select" required="required">
                <option value="1">Land Rover</option>
                <option value="2">Mini</option>
                <option value="0">Ajouter</option>
            </select>
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="modele" class="col-3 col-form-label">Modèle</label> 
        <div class="col-9">
            <input id="modele" name="modele" placeholder="Modèle du véhicule" type="text" class="form-control" required="required">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="photo" class="col-3 col-form-label">Photo</label> 
        <div class="col-9">
            <input id="photo" name="photo" placeholder="La photo du véhicule" type="text" required="required" class="form-control">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="annee" class="col-3 col-form-label">Année</label> 
        <div class="col-9">
            <input id="annee" name="annee" placeholder="Année de sortie" type="text" class="form-control" required="required">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label class="col-3 col-form-label" for="kilometrage">Kilométrage</label> 
        <div class="col-9">
            <input id="kilometrage" name="kilometrage" placeholder="Nombre de kilomètre actuel" type="text" class="form-control" required="required">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="prix" class="col-3 col-form-label">Prix</label> 
        <div class="col-9">
            <input id="prix" name="prix" placeholder="Son prix de vente" type="text" class="form-control" required="required">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="couleur" class="col-3 col-form-label">Couleur</label> 
        <div class="col-9">
            <input id="couleur" name="couleur" placeholder="Sa couleur actuelle" type="text" class="form-control" required="required">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="nombre_porte" class="col-3 col-form-label">Nombre de porte</label> 
        <div class="col-9">
            <input id="nombre_porte" name="nombre_porte" placeholder="Combien de porte sur le vehicule ?" type="text" class="form-control" required="required">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="nombre_place" class="col-3 col-form-label">Nombre de place</label> 
        <div class="col-9">
            <input id="nombre_place" name="nombre_place" placeholder="Combien de personnes peuvent s'installer ?" type="text" class="form-control" required="required">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="puissance_fiscal" class="col-3 col-form-label">Puissance fiscal</label> 
        <div class="col-9">
            <input id="puissance_fiscal" name="puissance_fiscal" placeholder="Sa puissance fiscale" type="text" class="form-control" required="required">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="puissance" class="col-3 col-form-label">Puissance</label> 
        <div class="col-9">
            <input id="puissance" name="puissance" placeholder="Sa puissance" type="text" class="form-control">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="crit_air" class="col-3 col-form-label">Crit'air</label> 
        <div class="col-9">
            <select id="crit_air" name="crit_air" class="form-select" required="required">
            <option value="0">0 - Véhicules 100% élecrique et hydrogène</option>
            <option value="1">1 - Gaz et hybrides rechargeables</option>
            <option value="2">2 - Vehicules essence Euro 4, diesel Euro 5, 6</option>
            <option value="3">3 - Vehicules essence Euro 2, 3, diesel Euro 4</option>
            <option value="4">4 - Vehicules diesel Euro 3</option>
            <option value="5">5 - Vehicules diesel Euro 2</option>
            </select>
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="emission_co2" class="col-3 col-form-label">Emission co2</label> 
        <div class="col-9">
            <input id="emission_co2" name="emission_co2" placeholder="Emissions territoriales de gaz à effet de serre" type="text" class="form-control" required="required">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="mise_en_circulation" class="col-3 col-form-label">Mise en circulation</label> 
        <div class="col-9">
            <input id="mise_en_circulation" name="mise_en_circulation" placeholder="La date de la première mise en circulation" type="text" class="form-control" required="required">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label class="col-3">Première main</label> 
        <div class="col-9">
            <div class="custom-control custom-checkbox custom-control-inline">
                <input name="premiere_main" id="premiere_main_0" type="checkbox" class="custom-control-input" value="1" checked="checked"> 
                <label for="premiere_main_0" class="custom-control-label">Oui</label>
            </div>
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="volume_coffre" class="col-3 col-form-label">Volume coffre</label> 
        <div class="col-9">
            <input id="volume_coffre" name="volume_coffre" placeholder="Le volume total du coffre" type="text" class="form-control" required="required">
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="garantie" class="col-3 col-form-label">Garantie</label> 
        <div class="col-9">
            <select id="garantie" name="garantie" class="form-select" required="required">
                <option value="1">6 mois</option>
                <option value="2">1 an</option>
            </select>
        </div>
    </div>

    <div class="form-group row mb-3">
        <label for="energie" class="col-3 col-form-label">Energie</label> 
        <div class="col-9">
            <select id="energie" name="energie" class="form-select" required="required">
                <option value="1">Essence</option>
                <option value="2">Diesel</option>
                <option value="3">Hybdride</option>
            </select>
        </div>
    </div> 

    <div class="form-group row">
        <div class="offset-3 col-9">
            <button name="submit" type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </div>

</form>
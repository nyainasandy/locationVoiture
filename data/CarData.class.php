<?php
    class CarData {
        private $photo;
        private $annee;
        private $kilometrage;
        private $prix;
        private $model;
        private $couleur;
        private $nombre_de_porte;
        private $nombre_de_place;
        private $puissance_fiscale;
        private $puissance;
        private $crit_air; 
        private $emission_co2;
        private $mise_en_circulation;
        private $première_main;
        private $volume_coffre;
        private $id_marque;
        private $id_energie;
        private $id_garantie;

        public function setPhoto($photo) {
            $this->photo = $photo;
        }

        public function getPhoto() {
            return $this->photo;
        }
        
        public function setAnnee($annee) {
            $this->annee = $annee;
        }

        public function getAnnee() {
            return $this->annee;
        }

        public function setKilometrage($kilometrage) {
            $this->kilometrage = $kilometrage;
        }

        public function getKilometrage() {
            return $this->kilometrage;
        }

        public function setPrix($prix) {
            $this->prix = $prix;
        }

        public function getPrix() {
            return $this->prix;
        }

        public function setModel($model) {
            $this->model = $model;
        }

        public function getModel() {
            return $this->model;
        }

        public function setCouleur($couleur) {
            $this->couleur = $couleur;
        }

        public function getCouleur() {
            return $this->couleur;
        }

        public function setNombrePorte($nombre_de_porte) {
            $this->nombre_de_porte = $nombre_de_porte;
        }

        public function getNombrePorte() {
            return $this->nombre_de_porte;
        }

        public function setNombrePlace($nombre_de_place) {
            $this->nombre_de_place = $nombre_de_place;
        }

        public function getNombrePlace() {
            return $this->nombre_de_place;
        }

        public function setPuissanceFiscale($puissance_fiscale) {
            $this->puissance_fiscale = $puissance_fiscale;
        }

        public function getPuissanceFiscale() {
            return $this->puissance_fiscale;
        }

        public function setPuissance($puissance) {
            $this->puissance = $puissance;
        }

        public function getPuissance() {
            return $this->puissance;
        }

        public function setCritAir($crit_air) {
            $this->crit_air = $crit_air;
        }

        public function getCritAir() {
            return $this->crit_air;
        }

        public function setEmissionCo2($emission_co2) {
            $this->emission_co2 = $emission_co2;
        }

        public function getEmissionCo2() {
            return $this->emission_co2;
        }

        public function setMiseEnCirculation($mise_en_circulation) {
            $this->mise_en_circulation = $mise_en_circulation;
        }

        public function getMiseEnCirculation() {
            return $this->mise_en_circulation;
        }

        public function setPremiereMain($première_main) {
            $this->première_main = $première_main;
        }

        public function getPremiereMain() {
            return $this->première_main;
        }

        public function setVolumeCoffre($volume_coffre) {
            $this->volume_coffre = $volume_coffre;
        }

        public function getVolumeCoffre() {
            return $this->volume_coffre;
        }

        public function setIdMarque($id_marque) {
            $this->id_marque = $id_marque;
        }

        public function getIdMarque() {
            return $this->id_marque;
        }

        public function setIdEnergie($id_energie) {
            $this->id_energie = $id_energie;
        }

        public function getIdEnergie() {
            return $this->id_energie;
        }

        public function setIdGarantie($id_garantie) {
            $this->id_garantie = $id_garantie;
        }

        public function getIdGarantie() {
            return $this->id_garantie;
        }
    }
?>
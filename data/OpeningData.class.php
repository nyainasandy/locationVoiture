<?php

    class OpeningData {

        private $id;
        private $am;
        private $pm;

        public function setId($id) {
            $this->id = $id;
        }

        public function getId() {
            return $this->id;
        }

        public function setAm($from, $to) {
            if($from == '' || $to = '') {
                $this->am = null;
            } else {
                $this->am = "$from - $to";
            }
        }

        public function getAm() {
            return $this->am;
        }

        public function setPm($from, $to) {
            if($from == '' || $to = '') {
                $this->pm = null;
            } else {
                $this->pm = "$from - $to";
            }
        }

        public function getPm() {
            return $this->pm;
        }

    }
?>
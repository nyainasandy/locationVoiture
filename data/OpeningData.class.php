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

        public function setAm($fromAm, $toAm) {
            if($fromAm == '' || $toAm == '') {
                $this->am = null;
            } else {
                $this->am = "$fromAm - $toAm";
            }
        }

        public function getAm() {
            return $this->am;
        }

        public function setPm($fromPm, $toPm) {
            if($fromPm == '' || $toPm == '') {
                $this->pm = null;
            } else {
                $this->pm = "$fromPm - $toPm";
            }
        }

        public function getPm() {
            return $this->pm;
        }

    }
?>
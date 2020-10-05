<?php
    declare(strict_types=1); // stric mode tipizzazione forte!
    // classe trait
    trait SpecificheDipendente{
        protected string $tipoContratto;
        protected int $numeroMatricola;

        public function specificheContratto(){
            return $this->tipoContratto.' ';
        }

        public function specificheMatricola(){
            return $this->numeroMatricola;
        }
    }



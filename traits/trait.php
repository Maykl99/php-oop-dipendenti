<?php
    declare(strict_types=1);
    trait SpecificheDipendente{
        protected string $tipoContratto;
        protected int $numeroMatricola;

        public function specificheContratto(){
            return $this->tipoContratto;
        }

        public function specificheMatricola(){
            return $this->numeroMatricola;
        }
    }



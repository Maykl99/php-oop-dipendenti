<?php
    declare(strict_types=1); // stric mode tipizzazione forte!
    // classe trait
    trait SpecificheDipendente{
        protected string $tipoContratto;
        protected int $numeroMatricola;

        public function setContratto($_tipoContratto){
            if(empty($_tipoContratto)):
                throw new Exception("errore", 1);
            endif;
            $this->tipoContratto=$_tipoContratto;
        }

        public function setMatricola($_numeroMatricola){
            if(empty($_numeroMatricola)):
                throw new Exception("errore", 2);
            endif;
            $this->numeroMatricola=$_numeroMatricola;
        }

        public function specificheContratto(){
            return $this->tipoContratto.' ';
        }

        public function specificheMatricola(){
            return $this->numeroMatricola;
        }
    }



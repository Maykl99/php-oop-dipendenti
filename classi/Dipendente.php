<?php 
declare(strict_types=1); // stric mode tipizzazione forte!
require_once(__DIR__.'/../traits/trait.php');

class Dipendente{ // super classe
    protected $nome, $cognome, $codiceFiscale;
    use SpecificheDipendente;
    function __construct(string $_nome, string $_cognome, string $_codiceFiscale){

        if(empty($_nome) || empty($_cognome) || empty($_codiceFiscale)){       
            throw new Exception("errore, valore vuoto", 15);     
        }
        // se i controlli sono verificati
        $this->nome=$_nome;
        $this->cognome=$_cognome;
        $this->codiceFiscale=$_codiceFiscale;



    }
    

    // funzione settaggio valori
    function setDati($_nome,$_cognome,$_codiceFiscale,$_tipoContratto,$_numeroMatricola){
        $this->nome=$_nome;
        $this->cognome=$_cognome;
        $this->codiceFiscale=$_codiceFiscale;
        $this->tipoContratto=$_tipoContratto;
        $this->numeroMatricola=$_numeroMatricola;
    }

    // funzione ritorno valori
    function setNome($_nome){
        return $this->nome=$_nome;
    }
    
}

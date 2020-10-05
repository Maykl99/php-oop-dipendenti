<?php 
declare(strict_types=1); // stric mode tipizzazione forte!
require_once(__DIR__.'/../traits/trait.php');

class Dipendente{ // super classe
    protected $nome, $cognome, $codiceFiscale;
    use SpecificheDipendente;
    function __construct(string $_nome, string $_cognome, string $_codiceFiscale){

        !empty($_nome) || die('Non hai settato il nome!');
        !empty($_nome) || die('Non hai settato il cognome!');
        !empty($_nome) || die('Non hai settato il codice fiscale!');

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

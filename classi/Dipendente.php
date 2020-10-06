<?php 
declare(strict_types=1); // stric mode tipizzazione forte!
require_once(__DIR__.'/../traits/trait.php');

class Dipendente{ // super classe
    protected $nome, $cognome, $email, $codiceFiscale;
    use SpecificheDipendente;
    function __construct(string $_nome, string $_cognome, string $_email, string $_codiceFiscale){

        if(empty($_nome) || empty($_cognome) || empty($_email) || empty($_codiceFiscale)){       
            throw new Exception("errore, valore vuoto", 15);     
        }
        // se i controlli sono verificati
        $this->nome=$_nome;
        $this->cognome=$_cognome;
        $this->email=$_email;
        $this->codiceFiscale=$_codiceFiscale;

    }

    // funzione setaggio valori
    public function setNome($_nome){
        if(!is_string($_nome)){
            throw new Exception("errore, valore in formato sbagliato", 1);
        }
        $this->nome=$_nome;
    }

    public function setCognome($_cognome){
        if(!is_string($_cognome)){
            throw new Exception("errore, valore in formato sbagliato", 1);
        }
        $this->cognome=$_cognome;
    }

    public function setEmail($_email){
        if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('non hai passato un valore di tipo email, errore',3);
        }
        $this->email=$_email;
    }

    public function setCf($_codiceFiscale){
        if(strlen($_codiceFiscale)<>16 || !is_string($_codiceFiscale)){
            throw new Exception('non hai passato un valore corretto per il codice fiscale, errore',4);
        }
        $this->codiceFiscale=$_codiceFiscale;
    }


    // funzione ritorno valori
    public function getNome(){
        return $this->nome;
    }
    public function getCognome(){
        return $this->cognome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCf(){
        return $this->codiceFiscale;
    }
    
}

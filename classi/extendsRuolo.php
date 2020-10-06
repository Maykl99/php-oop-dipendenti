<?php 
declare(strict_types=1); // stric mode tipizzazione forte!
require_once('Dipendente.php');

// classe estesa
class Ruolo extends Dipendente{
    private $ruolo;

    function __construct(string $_nome, string $_cognome, string $_email, string $_codiceFiscale,string $_ruolo){

        parent::__construct($_nome,$_cognome,$_email,$_codiceFiscale);

        if(empty($_ruolo)):
            throw new Exception("errore, valore vuoto", 5);
        endif;

        $this->ruolo=$_ruolo;
    }
}


try {
    $ruolo= new Ruolo('Marco','Rossi','maicolmail@mail.com','324452103MMT','operaio');
} catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage() . ' riga ' . $e->getLine() .' codice di eccezione '. $e->getCode();
}


var_dump($ruolo);
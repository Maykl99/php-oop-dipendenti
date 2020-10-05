<?php 
declare(strict_types=1); // stric mode tipizzazione forte!
require_once('Dipendente.php');

// classe estesa
class Ruolo extends Dipendente{
    private $ruolo;

    function __construct(string $_nome, string $_cognome, string $_codiceFiscale,string $_ruolo){

        parent::__construct($_nome,$_cognome,$_codiceFiscale);

        !empty($_ruolo) || die('Non hai settato il nome!');
        $this->ruolo=$_ruolo;

    }
}

$ruolo= new Ruolo('Marco','Rossi','324452103MMT','operaio');
var_dump($ruolo);
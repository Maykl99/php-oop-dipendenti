<?php 
declare(strict_types=1);
require_once(__DIR__.'/../traits/trait.php');

class Dipendente{
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

    function setDati($_tipoContratto,$_numeroMatricola){
        $this->tipoContratto=$_tipoContratto;
        $this->numeroMatricola=$_numeroMatricola;
    }
}

$dipendete1= new Dipendente('Marco','Rossi','324452103MMT');
$dipendete2= new Dipendente('Matteo','Verdi','324452103MMT');
$dipendete3= new Dipendente('Luca','Bianchi','324452103MMT');
var_dump($dipendete1,$dipendete2,$dipendete3);
$dipendete1->setDati('contratto indeterminato',23451);
echo $dipendete1->specificheContratto();
echo ' ';
echo $dipendete1->specificheMatricola();
#echo define('DIPENDENTE',new Dipendente('Marco','Rossi','324452103MMT'));
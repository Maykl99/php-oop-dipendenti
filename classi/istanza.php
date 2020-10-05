<?php
declare(strict_types=1);
require_once('Dipendente.php');


$dipendete1= new Dipendente('Marco','Rossi','324452103MMT');
$dipendete2= new Dipendente('Matteo','Verdi','324452103MMT');
$dipendete3= new Dipendente('Luca','Bianchi','324452103MMT');


var_dump($dipendete1,$dipendete2,$dipendete3);
$dipendete1->setDati('Marco','Rossi','324452103MMT','contratto indeterminato',23451);

$nome=$dipendete1->specificheContratto();
$nome.=$dipendete1->specificheMatricola();
$nome.=$dipendete1->setNome(' Marco');

#echo define('DIPENDENTE',new Dipendente('Marco','Rossi','324452103MMT'));
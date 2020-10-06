<?php
declare(strict_types=1); // stric mode tipizzazione forte!
require_once('Dipendente.php');


try {
    #istanze classe di appertenenza
    $dipendete1= new Dipendente('Marco','Rossi','maicolmail@mail.com','324452103MMT');
    $dipendete2= new Dipendente('Matteo','Verdi','maicolmail@mail.com','324452103MMT');
    $dipendete3= new Dipendente('Luigi','Bianchi','maicolmail@mail.com','324452103MMT');
    #istanze classe di appertenenza
    $dipendete1->setEmail('nuovolucaverdi@mail.com');
    #echo $dipendente1->getEmail();
} catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage() . ' riga ' . $e->getLine() .' codice di eccezione '. $e->getCode();
}


var_dump($dipendete1,$dipendete2,$dipendete3);

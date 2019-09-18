<?php
require_once 'Voiture.php';

/*Voiture::getAllVoitures();*/

$test = (Voiture::getVoitureByImmat("ABC123DE"));
$test->afficher();

$BM = new Voiture("BMW", "rose", "ER453GT");

$BM->save();






?>
<?php

include('models/Trainer.php');

$Trainers = array();

$oTrainer = new Trainer('error', 'LIFE', 'EARTH');
$oTrainer->addToList($Trainers);


$oPain = new Trainer('life', 'all', 'dan');
$oPain->addToList($Trainers);


$oHope = new Trainer('error', 'LIFE', 'EARTH');
$oHope->addToList($Trainers);

/* appel de la méthode pour supprimer
un objet du tableau d'objet */
$oHope->deleteToList($Trainers);


$Trainers = $oTrainer->getListTrainers();

include('views/trainersList.php');
?>
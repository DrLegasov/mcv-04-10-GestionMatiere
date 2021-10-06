<?php

include('models/Trainer.php');

$Trainers = array();

$oTrainer = new Trainer('error', 'LIFE', 'EARTH');
$oTrainer->addToList($Trainers);


$oPain = new Trainer('life', 'all', 'dan');
$oPain->addToList($Trainers);


$oHope = new Trainer('error', 'LIFE', 'EARTH');
$oHope->addToList($Trainers);



$Trainers = $oTrainer->getListTrainers();

include('views/trainersList.php');
?>
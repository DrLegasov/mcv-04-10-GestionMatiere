<?php

include('models/Trainer.php');

$oTrainer = new Trainer('error', 'LIFE', 'EARTH');
$Trainers = $oTrainer->getListTrainers();

include('views/trainersList.php');
?>
<?php

include('models/Trainer.php');

$oTrainer = new Trainer();
$Trainers = $oTrainer->getListTrainers();

include('views/trainersList.php');
?>
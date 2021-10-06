<?php

require_once('models/Us.php');

$Us = array();

$oUs = new Us('swu', 'sqth','1542');
$oUs->addToList($Us);


$oDos = new Us('swu', 'sqth','1542');
$oDos->addToList($Us);


$oTroll = new Us('swu', 'sqth','1542');
$oTroll->addToList($Us);




$Us = $oUs->getListUs();



include('views/UsList.php');

?>
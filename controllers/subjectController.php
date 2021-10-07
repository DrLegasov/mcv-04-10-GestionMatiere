<?php

require_once('models/Mat.php');

$firstMultiTabMats = array();

$oMat = new Mat('error', '1', 'EARTH');
$oMat->addToList($firstMultiTabMats);


$oPlomb = new Mat('error0', '1', 'EARTH0');
$oPlomb->addToList($firstMultiTabMats);


$oLaine = new Mat('error1', '1', 'EARTH1');
$oLaine->addToList($firstMultiTabMats);


$oTungstene = new Mat('error2', '1', 'EARTH2');
$oTungstene->addToList($firstMultiTabMats);


$oVanadium = new Mat('error3', '1', 'EARTH3');
$oVanadium->addToList($firstMultiTabMats);


$oAnti = new Mat('error4', '1', 'EARTH4');
$oAnti->addToList($firstMultiTabMats);


/* appel de la méthode pour supprimer
un objet du tableau d'objet */
$oLaine->deleteToList($firstMultiTabMats);
$oPlomb->deleteToList($firstMultiTabMats);
$oVanadium->deleteToList($firstMultiTabMats);


$oAnti->updateList($firstMultiTabMats,'Antimatière' ,'20', 'CERN');
//$oPlaf->printTabList($firstMultiTabMats);

$firstMultiTabMats = $oMat->getListSubjet();
include('views/subjectList.php');
?>
<?php

require_once('models/Mat.php');

$firstMultiTabMats = array();

$oMat = new Mat('error', '1', 'EARTH');
$oMat->addToList($firstMultiTabMats);


$oPlouf = new Mat('error0', '1', 'EARTH0');
$oPlouf->addToList($firstMultiTabMats);


$oPlaf = new Mat('error1', '1', 'EARTH1');
$oPlaf->addToList($firstMultiTabMats);


$oPlif = new Mat('error2', '1', 'EARTH2');
$oPlif->addToList($firstMultiTabMats);


$oGnaa = new Mat('error3', '1', 'EARTH3');
$oGnaa->addToList($firstMultiTabMats);


$oGraou = new Mat('error4', '1', 'EARTH4');
$oGraou->addToList($firstMultiTabMats);


/* appel de la méthode pour supprimer
un objet du tableau d'objet */
$oPlaf->deleteToList($firstMultiTabMats);
$oPlif->deleteToList($firstMultiTabMats);
$oPlouf->deleteToList($firstMultiTabMats);

var_dump($firstMultiTabMats);

$oPlaf->printTabList($firstMultiTabMats);

$firstMultiTabMats = $oMat->getListSubjet();
include('views/subjectList.php');
?>
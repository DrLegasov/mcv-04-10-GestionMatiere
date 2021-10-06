<?php

require_once('models/Mat.php');

$firstMultiTabMats = array();

$oMat = new Mat('error', '1', 'EARTH');
$oMat->addToList($firstMultiTabMats);

var_dump($oMat);

$oPlouf = new Mat('error0', '1', 'EARTH0');
$oPlouf->addToList($firstMultiTabMats);

var_dump($oPlouf);

$oPlaf = new Mat('error1', '1', 'EARTH1');
$oPlaf->addToList($firstMultiTabMats);

var_dump($oPlaf);

$oPlif = new Mat('error2', '1', 'EARTH2');
$oPlif->addToList($firstMultiTabMats);

var_dump($oPlif);

$oGnaa = new Mat('error3', '1', 'EARTH3');
$oGnaa->addToList($firstMultiTabMats);

var_dump($oGnaa);

$oGraou = new Mat('error4', '1', 'EARTH4');
$oGraou->addToList($firstMultiTabMats);

var_dump($oGraou);


$firstMultiTabMats = $oMat->getListSubjet();
include('views/subjectList.php');
?>
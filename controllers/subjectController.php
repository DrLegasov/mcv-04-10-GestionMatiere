<?php

require_once('models/Mat.php');

$oMat = new Mat('error', 'LIFE', 'EARTH');
$firstMultiTabMats = $oMat->getListSubjet();

var_dump($oMat);

include('views/subjectList.php');

?>
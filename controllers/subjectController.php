<?php

require_once('models/Mat.php');

$oMat = new Mat('error', 'LIFE', 'EARTH');
$firstMultiTabMats = $oMat->getListSubjet();

include('views/subjectList.php');

?>
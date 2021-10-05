<?php

require_once('models/Mat.php');

$oMat = new Mat();
$firstMultiTabMats = $oMat->getListSubjet();


include('views/subjectList.php');

?>
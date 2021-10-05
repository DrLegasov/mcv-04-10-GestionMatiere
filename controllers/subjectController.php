<?php
require_once('models/MatClass.php');

$oMatclass = new MatClass();
$aSubject = $oMatclass->getListSubjet();


include('views/subjectList.php');

?>
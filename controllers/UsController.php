<?php

require_once('models/Us.php');

$oUs = new Us();
$Us = $oUs->getListUs();

include('views/UsList.php');

?>
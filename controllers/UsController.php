<?php

require_once('models/Us.php');

$oUs = new Us('swu', 'sqth','1542');
$Us = $oUs->getListUs();

include('views/UsList.php');

?>
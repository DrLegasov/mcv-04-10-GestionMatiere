<?php
require_once('models/Session.php');

$Sessions = array();

$oSession = new Session('XBR21-42','0000','0000','1');
$oSession->addToList($Sessions);

var_dump($oSession);


$Sessions = $oSession->getListSession();



include('views/sessionsList.php');

?>
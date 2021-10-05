<?php
require_once('models/Session.php');

$oSession = new Session('XBR21-42','0000','0000','1');
$Sessions = $oSession->getListSession();


include('views/sessionsList.php');

?>
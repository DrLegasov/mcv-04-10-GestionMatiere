<?php
require_once('models/Session.php');

$oSession = new Session();
$Sessions = $oSession->getListSession();
include('views/sessionsList.php');

?>
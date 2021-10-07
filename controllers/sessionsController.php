<?php
require_once('models/Session.php');

$Sessions = array();
/*appel de la fonction du model 
visant à ajouter un oblet au tableau*/
$oSession = new Session('XBR21-42','0000','0000','1');
$oSession->addToList($Sessions);

$oNewDw = new Session('DWW-Bush','0000','0000','666');
$oNewDw->addToList($Sessions);

$oAddTrump = new Session('IDIOCRATY','0000','0000','999');
$oAddTrump->addToList($Sessions);

/*appel de la fonction du model 
visant à supprimer un oblet*/
$oAddTrump->deleteToList($Sessions);
$oNewDw->deleteToList($Sessions);


$Sessions = $oSession->getListSession();

include('views/sessionsList.php');

?>
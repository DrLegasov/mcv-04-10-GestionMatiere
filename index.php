
<?php

switch ($_GET['action']) {
    case 'subjectsList':
        require('controllers/subjectController.php');
        break;
    case 'sessionsList':
        require('controllers/sessionsController.php');
        break;
    case 'trainersList':
        require('controllers/trainersController.php');
        break;
    case 'UsList':
        require('controllers/UsController.php');
        break;
    default:
        require('controllers/errorController.php');
}

?>

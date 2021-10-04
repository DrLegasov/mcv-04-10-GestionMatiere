Section TESTS
<?php

if(!empty($_GET['action']) && $_GET['action']=='subjectsList'):
    require('controllers/subjectController.php');
endif;

if(!empty($_GET['action']) && $_GET['action']=='sessionsList'):
    require('controllers/sessionsController.php');
endif;

if(!empty($_GET['action']) && $_GET['action']=='trainersList'):
    require('controllers/trainersController.php');
endif;

if(!empty($_GET['action']) && $_GET['action']=='UsList'):
    require('controllers/UsController.php');
endif;


?>

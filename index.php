
<?php

if(!empty($_GET['action'])):
    
switch ($_GET ['action']) {
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
endif;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
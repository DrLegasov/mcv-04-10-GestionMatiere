<?php


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <?php    
    foreach($Trainers as $Trainer):
    ?>
            <h2><?php echo $Trainer['Nom']; ?></h2>
            <p><?php echo $Trainer['Prénom']; ?></p>
            <p><?php echo $Trainer['Société']; ?></p>        
        <a href=""><button class="btn btn-outline-warning my-2 mx-1 accordion-collapse collapse show">ÉDITER</button></a>
        <a href=""><button class="btn btn-outline-danger my-2 mx-1 accordion-collapse collapse show">SUPPRIMER</button></a><br><hr>
        <?php
       // $sTotal = sTotal + $matiere['Durée'];
    endforeach;
    ?>
    </main>
</body>
</html>
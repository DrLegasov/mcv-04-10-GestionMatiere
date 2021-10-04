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
        <li>
            <h2><?php echo $Trainer['Nom']; ?></h2>
            <ul>
                <li> <?php echo $Trainer['Prénom']; ?></li>
            </ul>

            <p><?php echo $Trainer['Société']; ?></p>
        </li>

        <?php
       // $sTotal = sTotal + $matiere['Durée'];
    endforeach;
    ?>
    </main>
</body>
</html>
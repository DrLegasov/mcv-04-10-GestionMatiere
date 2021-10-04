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
    $sTotal = 0;
    foreach($Subjects as $Subject):
    ?>
        <li>
            <h2><?php echo $Subject['Nom']; ?></h2>
            <ul>
                <li>Durée <?php echo $Subject['Durée']; ?></li>
            </ul>

            <p><?php echo $Subject['Description']; ?></p>
        </li>

        <?php
       // $sTotal = sTotal + $matiere['Durée'];
        $sTotal += $Subject['Durée'];        
    endforeach;
    ?>
    </main>
</body>
</html>
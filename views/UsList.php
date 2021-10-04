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
    foreach($Us as $Nous):
    ?>
        <h4><?php echo $Nous['Nom']; ?></h4>
        <p><?php echo $Nous['Prénom']; ?></p>
        <p><?php echo $Nous['Date de Naissance']; ?></p>
        <?php
       // $sTotal = sTotal + $matiere['Durée'];
    endforeach;
    ?>
    </main>
</body>

</html>
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
    foreach($Sessions as $Session):
    ?>
        <h2><?php echo $Session['Nom']; ?></h2>
        <p><?php echo $Session['Date de début']; ?></p>
        <p><?php echo $Session['Date de Fin']; ?></p>
        <p><?php echo $Session['Nombre d\'Apprenants']; ?></p>
        <?php
       // $sTotal = sTotal + $matiere['Durée'];
    endforeach;
    ?>
    </main>
</body>

</html>
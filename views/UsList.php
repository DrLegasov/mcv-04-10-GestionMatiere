<?php


?>

        <?php    
    foreach($Us as $Nous):
    ?>
        <h4><?php echo $Nous['Nom']; ?></h4>
        <p><?php echo $Nous['Prénom']; ?></p>
        <p><?php echo $Nous['Date de Naissance']; ?></p>
        <a href=""><button class="btn btn-outline-warning my-2 mx-1 accordion-collapse collapse show">ÉDITER</button></a>
        <a href=""><button class="btn btn-outline-danger my-2 mx-1 accordion-collapse collapse show">SUPPRIMER</button></a><br><hr>

        <?php
       // $sTotal = sTotal + $matiere['Durée'];
    endforeach;
    ?>    
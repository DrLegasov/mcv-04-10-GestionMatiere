<?php


?>

        <?php    
    foreach($Us as $Nous):
    ?>
        <h4><?php echo $Nous['Nom']; ?></h4>
        <p><?php echo $Nous['Prénom']; ?></p>
        <p><?php echo $Nous['Date de Naissance']; ?></p>
        <button class="btn btn-outline-warning my-2 mx-1 accordion-collapse collapse show">ÉDITER</button>
        <button class="btn btn-outline-danger my-2 mx-1 accordion-collapse collapse show">SUPPRIMER</button>

        <?php
       // $sTotal = sTotal + $matiere['Durée'];
    endforeach;
    ?>    
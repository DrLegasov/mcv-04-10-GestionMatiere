<?php


?>



    <?php    
    $sTotal = 0;
    foreach($firstMultiTabMats as $Subject):
    ?>
        
            <h2><?php echo $Subject['Nom']; ?></h2>
            <p>  Durée <?php echo $Subject['Durée']; ?></p>       
            <p><?php echo $Subject['Description']; ?></p>
            <hr>
            <a href=""><button class="btn btn-outline-warning my-2 mx-1 accordion-collapse collapse show">ÉDITER</button></a>
        <a href=""><button class="btn btn-outline-danger my-2 mx-1 accordion-collapse collapse show">SUPPRIMER</button></a><br><hr>
        <?php
       // $sTotal = sTotal + $matiere['Durée'];
        $sTotal += $Subject['Durée'];        
    endforeach;
    ?>

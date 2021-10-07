<?php


?>



        <div  class="justify-content-center">
        <?php    
        foreach ($Sessions as $Session):
        ?>
            <h2 class=""><?php echo $Session['Nom']; ?></h2>
            <p><?php echo $Session['Date de début']; ?></p>
            <p><?php echo $Session['Date de Fin']; ?></p>
            <p><?php echo $Session['Nombre d\'Apprenants']; ?></p>
            <?php ?>
            <hr>
            <a href=""><button class="btn btn-outline-warning my-2 mx-1 accordion-collapse collapse show">ÉDITER</button></a>
        <a href=""><button class="btn btn-outline-danger my-2 mx-1 accordion-collapse collapse show">SUPPRIMER</button></a><br><hr>
            <?php
       // $sTotal = sTotal + $matiere['Durée'];
        endforeach;
        ?>
        </div>

<?php
class Trainer
{
// déclaration d'une propriété
public $firstname;
public $lastname;
public $society;
// déclaration des méthodes
public function getListTrainers() {


    $Trainers = array(
        array(
            "Nom" => ' DAVIGO', 
            "Prénom" => 'Delphine', 
            "Société" => 'EQUINOX'),
        array(
            "Nom" => ' Pezet', 
            "Prénom" => 'Pierre', 
            "Société" => 'GAIDO'),
        array(
            "Nom" => ' CHEVALIER', 
            "Prénom" => 'Thomas', 
            "Société" => 'Angular & Co'),
        array(
            "Nom" => ' PONCIN', 
            "Prénom" => 'Cindy', 
            "Société" => 'Kyū Solution')
    );
                return $Trainers;        
}
}
?>
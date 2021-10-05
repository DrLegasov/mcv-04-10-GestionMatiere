<?php
class Session
{
// déclaration d'une propriété
public $name;
public $startDate;
public $finishDate;
public $studiantNumber;
// déclaration des méthodes
public function getListSession() {


    $Sessions = array(
                        array(
                            "Nom" => 'DWWM_R4_CF', 
                            "Date de début" => '0000-00-00', 
                            "Date de Fin" => '0000-00-00', 
                            "Nombre d'Apprenants" => 42),
                        array(
                            "Nom" => 'DWWM_R2_FOAD', 
                            "Date de début" => '0000-00-00', 
                            "Date de Fin" => '0000-00-00', 
                            "Nombre d'Apprenants" => 42),
                        array(
                            "Nom" => 'DWWM_PE1_CF', 
                            "Date de début" => '0000-00-00', 
                            "Date de Fin" => '0000-00-00', 
                            
                            "Nombre d'Apprenants" => 42),
                        array(
                            "Nom" => 'CDA_R19_VILL', 
                            "Date de début" => '0000-00-00', 
                            "Date de Fin" => '0000-00-00', 
                            "Nombre d'Apprenants" => 42),
                        array(
                            "Nom" => 'CDA_R2_CF', 
                            "Date de début" => '0000-00-00', 
                            "Date de Fin" => '0000-00-00', 
                            "Nombre d'Apprenants" => 42)
                        );
                return $Sessions;        
}
}
?>
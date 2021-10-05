<?php
class Trainer
{
// déclaration d'une propriété
public $firstname;
public $lastname;
public $society;
// déclaration des méthodes

/**
 * __construct
 *
 * @param  string $firstname
 * @param  string $lastname
 * @param  string $society
 * @return array
 */
public function __construct($firstname, $lastname, $society) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->society = $society;

}
/**
 * getname
 *
 * @return string
 */
public function getfirstname() {
    return $this->firstname;
}
/**
 * getname
 *
 * @return string
 */
public function getlastname() {
    return $this->lastname;
}
/**
 * getname
 *
 * @return string
 */
public function getsociety() {
    return $this->society;
}


/**
 * setname
 *
 * @param  string $name
 * @return string
 */
public function setfirstname($firstname) {
    $this->firstname = $firstname;
}
/**
 * setname
 *
 * @param  string $name
 * @return string
 */
public function setlastname($lastname) {
    $this->lastname = $lastname;
}
/**
 * setname
 *
 * @param  string $name
 * @return string
 */
public function setsociety($society) {
    $this->society = $society;
}

/**
 * getListTrainers
 *
 * @return array
 */
public function getListTrainers() {


    $Trainers = array(
        array(
            "Nom" => ' DAVIGO', 
            "Prénom" => 'Delphine', 
            "Société" => 'EQUINOX'),
        array(
            "Nom" => ' PEZET', 
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
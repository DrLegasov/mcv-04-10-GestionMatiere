<?php
class Us
{
// déclaration d'une propriété
public $firstname;
public $lastname;
public $birthYear;
// déclaration des méthodes

/**
 * __construct
 *
 * @param  string $firstname
 * @param  string $lastname
 * @param  string $birthYear
 * @return array
 */
public function __construct($firstname, $lastname, $birthYear) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->birthYear = $birthYear;
}

/**
 * getname
 *
 * @return string
 */
public function getfirstname() {
    return $this->$firstname;
}
/**
 * getname
 *
 * @return string
 */
public function getlastname() {
    return $this->$lastname;
}
/**
 * getname
 *
 * @return string
 */
public function getbirthYear() {
    return $this->$birthYear;
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
 * getListUs
 *
 * @return array
 */

public function addToList(&$Us){
    array_push($Us, $this);
}

/**
 * deleteToList supprimer un objet
 *
 * @param   array$Us
 * @return void
 */
public function deleteToList(&$Us){
    $index = array_search($this, $Us);
    unset($Us[$index]);
}


/**
 * updateList
 *
 * @param  array $Us
 * @param  string $firstname
 * @param  string $lastname
 * @param  string $birthYear
 * @return object
 */
public function updateList ($Us, $firstname='', $lastname='', $birthYear='') {
    $index = array_search($this, $Us);

    if(!empty($firstname)):
        $Us[index]->firstname = $firstname;
    endif;
    
    if(!empty($lastname)):
        $Us[index]->lastname =$lastname;
    endif;
    
    if(!empty($birthYear)):
        $Us[index]->birthYear =$birthYear;
    endif;

}


public function getListUs() {


    $Us = array(
                array(
                    "Nom" => 'dev', 
                    "Prénom" => 'Aurélien', 
                    "Date de Naissance" => '1992'),
                array(
                    "Nom" => 'dev', 
                    "Prénom" => 'Bassam', 
                    "Date de Naissance" => '1990'),
                array(
                    "Nom" => 'dev', 
                    "Prénom" => 'Ouam', 
                    "Date de Naissance" => '1984'),
                array(
                    "Nom" => 'dev', 
                    "Prénom" => 'Doryan', 
                    "Date de Naissance" => '1998'),
                array(
                    "Nom" => 'dev', 
                    "Prénom" => 'Elie', 
                    "Date de Naissance" => '1986'),
                array(
                    "Nom" => 'dev', 
                    "Prénom" => 'François', 
                    "Date de Naissance" => '1999'),
                array(
                    "Nom" => 'dev', 
                    "Prénom" => 'Mathieu', 
                    "Date de Naissance" => '2000'),
                array(
                    "Nom" => 'dev', 
                    "Prénom" => 'Guillaume', 
                    "Date de Naissance" => '1996'),
                array(
                    "Nom" => 'dev', 
                    "Prénom" => 'Louis', 
                    "Date de Naissance" => '1995'),
                array(
                    "Nom" => 'dev', 
                    "Prénom" => 'l\'Américaine ;p', 
                    "Date de Naissance" => '1990'),
                array(
                    "Nom" => 'dev', 
                    "Prénom" => 'Marine', 
                    "Date de Naissance" => '1997'),
                array(
                    "Nom" => 'dev', 
                    "Prénom" => 'Nicolas', 
                    "Date de Naissance" => '1998'),
                array(
                    "Nom" => 'dev', 
                    "Prénom" => 'Peggy', 
                    "Date de Naissance" => '1962'),
                array(
                    "Nom" => 'dev', 
                    "Prénom" => 'Thibault', 
                    "Date de Naissance" => '1991'),
                array(
                    "Nom" => 'dev', 
                    "Prénom" => 'Valentin', 
                    "Date de Naissance" => '1997'),
                array(
                    "Nom" => 'dev', 
                    "Prénom" => 'Victor', 
                    "Date de Naissance" => '1994')
                );
                return $Us;        
}
}
?>
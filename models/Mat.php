<?php
class Mat
{
// déclaration d'une propriété
public $name;
public $duration;
public $description;
// déclaration des méthodes


/**
 * __construct
 *
 * @param  string $name
 * @param  int $duration
 * @param  string $description
 * @return array
 */
public function __construct($name, $duration, $description) {

        $this->name = $name;
        $this->duration = $duration;
        $this->description = $description;
}

/**
 * getname
 *
 * @return string
 */
public function getname() {
    return $this->name;
}
/**
 * getname
 *
 * @return int
 */
public function getduration() {
    return $this->duration;
}
/**
 * getname
 *
 * @return string
 */
public function getdescription() {
    return $this->description;
}

/**
 * setname
 *
 * @param  string $name
 * @return string
 */
public function setname($name) {
    $this->name = $name;
}
/**
 * setname
 *
 * @param  int $name
 * @return int
 */
public function setduration($duration) {
    $this->duration = $duration;
}
/**
 * setname
 *
 * @param  string $name
 * @return string
 */
public function setdescription($description) {
    $this->description = $description;
}

/**
 * getListSubject
 *
 * @return object
 */

/**
 * addToList ajout d'un objet
 *
 * @param  mixed $firstMultiTabMats
 * @return object
 */
public function addToList(&$firstMultiTabMats){
    array_push($firstMultiTabMats, $this);
}

/**
 * deleteToList supprimer un objet
 *
 * @param   array$firstMultiTabMat
 * @return object
 */
public function deleteToList(&$firstMultiTabMats){
    $index = array_search($this, $firstMultiTabMats);
    unset($firstMultiTabMats[$index]);
}

/**
 * updateList
 *
 * @param  array $firstMultiTabMats
 * @param  string $name
 * @param  string $duration
 * @param  string $description
 * @return object
 */
public function updateList ($firstMultiTabMats, $name='', $duration='', $description='') {
    $index = array_search($this, $firstMultiTabMats);

    if(!empty($name)):
        $firstMultiTabMats[$index]->name = $name;
    endif;
    
    if(!empty($duration)):
        $firstMultiTabMats[$index]->duration = $duration;
    endif;
    
    if(!empty($description)):
        $firstMultiTabMats[$index]->description = $description;
    endif;

}



public function printTabList(&$firstMultiTabMats) {
    array_values($firstMultiTabMats);
}

/*
public function getListSubjet($firsMultiTabMat) {
    return $firstMultiTabMat;
}
*/


public function getListSubjet() {

    $firstMultiTabMats = array(
                                array(
                                    "Nom" =>'Algorithmique',
                                    "Durée" => '50',
                                    "Description" => 'Youpiiii'),
                                array(
                                    "Nom" =>'Anglais',
                                    "Durée" => '20',
                                    "Description" => 'Youpiiii'),
                                array(
                                    "Nom" =>'Angular',
                                    "Durée" => '25',
                                    "Description" => 'Youpiiii'),
                                array(
                                    "Nom" =>'BDD',
                                    "Durée" => '16',
                                    "Description" => 'Youpiiii'),
                                array(
                                    "Nom" =>'Déploiement serveur',
                                    "Durée" => '7',
                                    "Description" => 'Youpiiii'),
                                array(
                                    "Nom" =>'Javascript',
                                    "Durée" => '70',
                                    "Description" => 'Youpiiii'),
                                array(
                                    "Nom" =>'Linux',
                                    "Durée" => '21',
                                    "Description" => 'Youpiiii'),
                                array(
                                    "Nom" =>'Maquettage',
                                    "Durée" => '7',
                                    "Description" => 'Youpiiii'),
                                array(
                                    "Nom" =>'PHP',
                                    "Durée" => '200',
                                    "Description" => 'Youpiiii'),
                                array(
                                    "Nom" =>'SCRUM',
                                    "Durée" => '35',
                                    "Description" => 'Youpiiii'),
                                array(
                                    "Nom" =>'Web statique',
                                    "Durée" => '35',
                                    "Description" => 'Youpiiii'),
                                array(
                                    "Nom" =>'Maquettage',
                                    "Durée" => '21',
                                    "Description" => 'Youpiiii')
                                );
        return $firstMultiTabMats;
}
}
?>
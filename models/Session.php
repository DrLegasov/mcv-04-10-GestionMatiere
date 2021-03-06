<?php
class Session
{
// déclaration d'une propriété
public $name;
public $startDate;
public $finishDate;
public $studiantNumber;

// déclaration des méthodes

/**
 * __construct
 *
 * @param  string $name
 * @param  string $startDate
 * @param  string $finishDate
 * @param  int $studiantNumber
 * @return void
 */
public function __construct($name, $startDate, $finishDate, $studiantNumber) {

        $this->name = $name;
        $this->startDate = $startDate;
        $this->finishDate = $finishDate;
        $this->studiantNumber = $studiantNumber;
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
 * getstartdate
 *
 * @return string
 */
public function getstartdate() {
    return $this->startgetstartdate;
}
/**
 * getfinishdate
 *
 * @return string
 */
public function getfinishdate() {
    return $this->finisgetfinishdate;
}
/**
 * getstudiantNumber
 *
 * @return oint
 */
public function getstudiantNumber() {
    return $this->studigetstudiantNumber;
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
 * setstartdate
 *
 * @param  string $startDate
 * @return string
 */
public function setstartdate($startDate) {
    $this->startgetstartdate = $startgetstartdate;
}
/**
 * setfinishdate
 *
 * @param  string $finishDate
 * @return string
 */
public function setfinishdate($finishDate) {
    $this->finigetfinishdate = $finigetfinishdate;
}
/**
 * setstudiantNumber
 *
 * @param  int $studiantNumber
 * @return int
 */
public function setstudiantNumber($studiantNumber) {
    $this->studigetstudiantNumber = $studigetstudiantNumber;
}


/**
 * addToList ajout d'un objet
 *
 * @param  array $Sessions
 * @return array
 */
public function addToList(&$Sessions){
    array_push($Sessions, $this);
}

/**
 * deleteToList supprimer un objet
 *
 * @param   array$Sessions
 * @return void
 */
public function deleteToList(&$Sessions){
    $index = array_search($this, $Sessions);
    unset($Sessions[$index]);
}



public function updateList ($Sessions, $name='', $startDate='', $finishDate='', $studiantNumber='') {
    $index = array_search($this, $Us);

    if(!empty($firstname)):
        $Sessions[index]->firstname = $firstname;
    endif;
    
    if(!empty($startDate)):
        $Sessions[index]->startDate =$startDate;
    endif;
    
    if(!empty($FinishDate)):
        $Sessions[index]->FinishDate =$FinishDate;
    endif;
    
    if(!empty($studiantNumber)):
        $Sessions[index]->studiantNumber =$studiantNumber;
    endif;
}


/**
 * getListSession
 *
 * @return array
 */
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
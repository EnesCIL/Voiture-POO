<?php
class Voiture{
    private string $_marque;
    private int $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private bool $_statut;

    public function  __construct($marque, $modele, $nbPortes){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = 0;
        $this->_statut = false;
// booleen statut 0 
    }
    
    public function getMarque(){
    return $this->_marque;
    }
    public function setMarque($marque){
        $this->_marque = $marque;
    }
    public function getModele(){
    return $this->_modele;
    }
    public function setModele($modele){
        $this->_modele = $modele;
    }
    public function getNbPortes(){
    return $this->_nbPortes;
    }
    public function setNbPortes($nbPortes){
        $this->_nbPortes = $nbPortes;
    }
    public function getVitesseActuelle(){
    return $this->_vitesseActuelle;
    }
    public function setVitesseActuelle($vitesseActuelle){
        $this->_vitesseActuelle ;
    }

    public function demarrer(){
    //  si 0 je peux demarrer voiture statut 1
    if($this->_statut == false /*0*/){
        $this->_statut = true /*1*/;
        $this->_vitesseActuelle == 0;
        return "Le véhicule $this->_marque $this->_modele  démarre";
    }else{
        return "Le véhicule $this->_marque $this->_modele est déjà démarée";
    }

    }
    public function accelerer(){
        
    }
    public function stopper(){
        // demarrer si demmarer on la stop on change son statut
           if ($this->_statut == false) {
            $this->_vitesseActuelle == 0;
        return "Le véhicule $this->_marque $this->_modele est stoppé <br>";
    } 
    else {
        return  "la vitesse est de $this->_vitesseActuelle km/h. Elle doit être à 0 pour pouvoir s'arrêter<br>";
    }
    }




    function __toString()
    {
         
         return $this->_marque.' '.$this->_modele.' '.$this->_nbPortes;
    }
    
}
$voiture = new Voiture("Peugot", 408, 2, 2 );
echo $voiture->demarrer(2);





?>
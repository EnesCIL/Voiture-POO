<?php
class Voiture{
    private string $_marque;
    private int $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;

    public function  __construct($marque, $modele, $nbPortes ){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = false;
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
    if($this->_vitesseActuelle == false /*0*/){
        $this->_vitesseActuelle = true /*1*/;
        return "Le véhicule $this->_marque $this->_modele démarre";
    }else{
        return "Le véhicule $this->_marque $this->_modele est déjà démarée";
    }

    }
    public function accelerer(){
        
    }
    public function stopper(){
        
    }




    function __toString()
    {
         
         return $this->_marque.' '.$this->_modele.' '.$this->_nbPortes;
    }
    
}
$voiture = new Voiture("Peugot", 408, 6 );
echo $voiture->demarrer();




?>
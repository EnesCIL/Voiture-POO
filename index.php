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
        $this->_vitesseActuelle = 0;

    }
    public function getMarque(){
    return $this->_marque;
    }
    public function setMarque($marque){
        $this->_marque = $marque;
    }
    public function getModèle(){
    return $this->_modele;
    }
    public function setModèle($modele){
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
$voiture = new Voiture("Peugot", 408, 5 );
echo $voiture->demarrer();




?>
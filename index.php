<?php
class Voiture{
    private string $_marque;
    private string $_modele;
    private string $_nbPortes;
    private string $_vitesseActuelle;

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
        $this->_vitesseActuelle = 0;
    }
    function demarrer()






    function __toString()
    {
         
         return $this->_marque.' '.$this->_modèle.' '.$this->_nbPortes.' '.$this->_vitesseActuelle;
    }
    


}
$voiture = new Voiture("Peugot","408", "5","r","fdf" );
echo $voiture;




?>
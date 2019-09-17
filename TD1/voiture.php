<?php
class Voiture {
   
  private $marque;
  private $couleur;
  private $immatriculation;
      
  // un getter      
  public function getMarque() {
       return $this->marque;  
  }
     
  // un setter 
  public function setMarque($marque) {
       $this->marque = $marque;
  }

    public function getCouleur() {
       return $this->couleur;  
  }
     
  // un setter 
  public function setCouleur($couleur) {
       $this->couleur = $couleur;
  }

    public function getImmatriculation() {
       return $this->immatriculation;  
  }
     
  // un setter 
  public function setImmatriculation($immatriculation) {
    if (strlen($immatriculation) <= 8)
       $this->marque = $immatriculation;
  }
      
  // un constructeur
  public function __construct($m, $c, $i)  {
   $this->marque = $m;
   $this->couleur = $c;
   $this->immatriculation = $i;
  } 
           
  // une methode d'affichage.
  public function afficher() {
    echo "La voiture est de marque " . $this->marque . " de couleur " . $this->couleur . " et est immatriculé " . $this->immatriculation;
  }



}



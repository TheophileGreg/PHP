<?php
require_once 'Model.php';
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
      
  public function __construct($m = NULL, $c = NULL, $i = NULL) {
  if (!is_null($m) && !is_null($c) && !is_null($i)) {
    // Si aucun de $m, $c et $i sont nuls,
    // c'est forcement qu'on les a fournis
    // donc on retombe sur le constructeur à 3 arguments
    $this->marque = $m;
    $this->couleur = $c;
    $this->immatriculation = $i;
  }
}
           
  // une methode d'affichage.
  public function afficher() {
    echo "La voiture est de marque " . $this->marque . " de couleur " . $this->couleur . " et est immatriculé " . $this->immatriculation;
  }

  public static function getAllVoitures(){


    $rep = Model::$pdo->query('SELECT * FROM voiture');

    $tab_obj = $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
    $tab_voit = $rep->fetchAll();

    foreach ($tab_voit as $key1 => $valeur1){
      $valeur1->afficher();
    }
  }
}



<?php

function printTab($tab){  
  echo "<ul>";
  foreach ($tab as $cle => $valeur){
    echo "<li>" . $valeur . "</li>";
}
echo "</ul>";
}  


$marque = "Renault";
$couleur = "Rouge";
$immatriculation = "256AB34";

$voitures[0] = [
    "marque" => "Audi",
    "couleur" => "Noir",
    "immatriculation" => "333333",
];

$voitures[1] = [
    "marque" => "Renault",
    "couleur" => "Noir",
    "immatriculation" => "333333",
];

$voitures[2] = [
    "marque" => "Mercedes",
    "couleur" => "Noir",
    "immatriculation" => "333333",
];


if (empty($voitures)){
  echo "Il n’y a aucune voiture.";
}
else{
  foreach ($voitures as $cle => $valeur){
    printTab($valeur);
}
}




?>



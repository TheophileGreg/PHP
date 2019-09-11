<?php
	require_once("Model.php");
	require_once '../TD1/voiture.php';

	$rep = Model::$pdo->query('SELECT * FROM Voiture');

	$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);

	foreach  ($tab_obj as $key1 => $valeur1) {
    	foreach ($valeur1 as $key2 => $valeur2){
    		echo($key2 . $valeur2 . '<br>');
    	}
    
	}
?>
<?php
	require_once("Model.php");

	$rep = Model::$pdo->query('SELECT * FROM Voiture');

	$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);

	foreach  ($tab_obj as $key1 => $valeur1) {
    	foreach ($valeur1 as $key2 => $valeur2){
    		echo($key2 . $valeur2 . '<br>');
    	}
    
	}
?>
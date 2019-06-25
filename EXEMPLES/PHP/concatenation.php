<?php
	// APPRENDRE A CONCATENER DANS UNE VARIABLE PHP
	// PS: CONCATENER VEUT DIRE ASSEMBLAGE
	// --------------------------------------------
	
	// EX 1: LA CONCATENATION DU BOURRIN
	// ---------------------------------
	$montext = 'text';
	$monnombre = 5;
	echo 'texte ';
	echo $monnombre;
	echo ' ';
	echo $mavar;
	echo ' ';
	echo (isset($_GET['var']) ? $_GET['var'] : '');

	// EX 2: LA CONCATENATION DU MALIN A
	// tres bien pour les concatenation courte et sans ternaire (condition) incrustrer
	// -------------------------------------------------------------------------------
	$mavar = 'text';
	$monnombre = 5;
	echo "texte $monnombre $mavar (isset($_GET['var']) ? $_GET['var'] : '')"; // => ne fonctionne pas

	// solution
	$mavar = 'text';
	$monnombre = 5;
	echo "texte $monnombre $mavar ";
	echo (isset($_GET['var']) ? $_GET['var'] : '');
	// ou encore
	$mavar = 'text';
	$monnombre = 5;
	$macondition = (isset($_GET['var']) ? $_GET['var'] : '');
	echo "texte $monnombre $mavar $macondition";

	// EX 3: LA CONCATENATION DU MALIN B
	// perso je prefere celle-ci pour question de lisibilite sin on a des concatenations ultra-longues et si on veux ajouter des ternaires (condition)
	// -----------------------------------------------------------------------------------------------------------------------------------------------
	$mavar = 'text';
	$monnombre = 5;
	echo 'texte $monnombre $mavar (isset($_GET["var"]) ? $_GET["var"] : "")'; // => ne fonctionne pas

	// solution
	$mavar = 'text';
	$monnombre = 5;
	echo 'texte ' . $monnombre . ' ' . $mavar . (isset($_GET['var']) ? $_GET['var'] : '');
?>
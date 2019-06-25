<?php
	// APPRENDRE A CONCATENER DANS UNE VARIABLE PHP
	// PS: CONCATENER VEUT DIRE ASSEMBLAGE
	// --------------------------------------------
	echo '<h1>La concatenatin: </h1>'

	// EX 1: LA CONCATENATION DU BOURRIN
	echo '<h2>La methode bourinne !!! </h2>';
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
	echo '<h2>La methode malin A !!! </h2>';
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
	echo '<h2>La methode malin B !!! </h2>';
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
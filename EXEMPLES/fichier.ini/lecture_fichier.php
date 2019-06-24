<?php
	/*$tableau_de_lecture = file($fichier);
	foreach($tableau as $ligne){
		echo strlen($ligne);
	}*/
	/*$fichier = 'fichier.ini';
	if(file_exists($fichier) && $fichier_lecture = file($fichier)){
		foreach($fichier_lecture as $ligne){
			if(preg_match("/\[.+\]/", $ligne)){
				echo 'groupe []' . "<br>";
			}elseif(!preg_match("/^\;/", $ligne)){
				echo 'infos' . "<br>";
			}
		}
	}else{
		die("Le fichier est introuvable ou incompatible !!!");
	}*/
	$fichier = 'membres.ini';
	$groupe_recherche = 'Louise';
	$item_recherche = 'code postal';
	$valeur = false;
	if(file_exists($fichier) && $fichier_lecture = file($fichier)){
		foreach($fichier_lecture as $ligne){
			if(preg_match("#^\[.+\]$#", $ligne)){
				echo 'groupe []' . "<br>";
			}elseif(!preg_match("#^\;#", $ligne)){
				echo 'infos' . "<br>";
			}
		}
	}else{
		die("Le fichier est introuvable ou incompatible !!!");
	}
?>
<?php

/********* Partie 2 ****************************/
/********* C. Les structures *******************/
/********* II. Boucles *************************/
/********* d. foreach **************************/

// Déclarez une variable `tableau` et affectez-lui un tableau associatif
$tableau = [
	'tito' => 'Tito',
	43 => 'chien',
	'chat',
	12345,
];

/* 
	Affichez tous les éléments du tableau 
	en IMMITANT les fonctions `print_r` ou `var_dump`
	(donc avec les clefs et les valeurs)
	ATTENTION : pas le droit de les écrire une par une
	et si le tableau change, le code doit s'adapter sans être réécrit
*/

foreach ($tableau as $clef => $valeur) {
	if (is_array($valeur)) {
		echo $clef . ' : Tableau<br>';
	} else {
		echo $clef . ' : ' . $valeur . '<br>';
	}
}

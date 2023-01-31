<?php

/********* Partie 2 ****************************/
/********* C. Les structures *******************/
/********* II. Boucles *************************/
/********* d. foreach **************************/

// Déclarez une variable `tableau` et affectez-lui un tableau qui contient des nombres
$tableau = [
    rand(-100, 100),
    rand(-100, 100),
    rand(-100, 100),
    rand(-100, 100),
    rand(-100, 100),
];

echo '<pre>';
print_r($tableau);
echo '</pre>';

/**
 * 1/
 * Calculez et affichez 
 * la somme de tous les nombres 
 * du tableau
 */
$resultat = 0;

foreach ($tableau as $nombre) {
    $resultat += $nombre;
    // $resultat = $resultat + $nombre;
}

echo 'Somme : ' . $resultat . '<br>';

/**
 * 2/
 * Trouvez le nombre le plus petit
 * du tableau et affichez-le
 */
$champion = null; // Null n'a pas de valeur
// null != 0

foreach ($tableau as $nombre) {
    if ($champion == null || $champion > $nombre) {
        $champion = $nombre;
    }
}

echo 'Minimum : ' . $champion . '<br>';

/**
 * 3/
 * Même exercice que 1/, 
 * mais cette fois-ci on additionne 
 * les nombres aux clefs paires
 * et on soustrait les nombres aux clefs impaires
 */

$resultat = 0;


foreach ($tableau as $clef => $nombre) {
    if ($clef % 2 === 0) {
        $resultat += $nombre;
    } else {
        $resultat -= $nombre;
    }
}

echo 'Somme alternée : ' . $resultat;

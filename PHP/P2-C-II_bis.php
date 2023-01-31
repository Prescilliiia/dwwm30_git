<?php

/********* Partie 2 ****************************/
/********* C. Les structures *******************/
/********* II. Boucles *************************/

// Déclarez une variable `taille` 
// qui contient un nombre entre 5 et 10
$taille = rand(20, 15);

// 1) Affichez un triangle plein, composé d'astérisques
/*
Exemple d'affichage pour une taille = 5:
*****
****
***
**
*
*/
// for ($cpasmonprobleme = $taille; $cpasmonprobleme >= 1; $cpasmonprobleme--) {

//     for ($onsentape = 1; $onsentape <= $cpasmonprobleme; $onsentape++) {
//         echo '*';
//     }

//     echo '<br>';
// }

// 2) Affichez un triangle creux, composé d'astérisques
/*
 Exemple d'affichage pour une taille = 5:
 *****
 *  *
 * *
 **
 *
*/

for ($i = 1; $i <= $taille; $i++) {
    echo '▮';
}
echo '◤<br>';

for ($ligneActuelle = $taille - 1; $ligneActuelle >= 2; $ligneActuelle--) {
    echo '▮';

    for ($i = 1; $i <= $ligneActuelle - 2; $i++) {
        echo '▯';
    }

    echo '▮◤<br>';
}

echo '▮◤<br>';
echo '◤';

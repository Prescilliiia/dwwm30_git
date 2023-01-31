<?php

/********* Partie 2 ****************************/
/********* B. Les instructions de base *********/
/********* V. Les tableaux ********************/
/********* a. Le cas simple ********************/

// Nous allons faire un "Le compte est bon".
// Déclarez un tableau de 5 nombres (entiers) qui s'appelle nombres : 2, 5, 10, 25, 7
$tableau = [2, 5, 10, 25, 7];

// Déclarez une variable `resultat` qui contient un nombre entier : 221
$resultat = 221;

// Affichez à présent, à l'aide de la fonction `echo`,
// Les différentes étapes pour obtenir le résultat à partir des nombres
// En n'utilisant que des tous les opérateurs arithmétiques entiers (+-*/)
echo $tableau[2] . ' + ' . $tableau[0] . ' = 12 <br>
    ' . $tableau[3] . ' - ' . $tableau[4] . ' = 18 <br>
    18 x 12 = 216 <br>
    216 + ' . $tableau[1] . ' = ' . $resultat;

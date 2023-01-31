<?php

/********* Partie 2 ****************************/
/********* C. Les structures *******************/
/********* II. Boucles *************************/
/********* c. do while *************************/

// Déclarez une variable `limite` et affectez-lui un nombre 
// (Un conseil : dépassez pas trop le million ;-))
$limite = 1000000;

// Affichez tous les termes de la suite de Fibonacci
// qui sont inférieurs à `limite`
$n1 = 0;
$n2 = 1;
echo $n1 . '<br>';

do {
    $n3 = $n1 + $n2;
    $n1 = $n2;
    
    echo $n2 . '<br>';
    $n2 = $n3;
} while ($n3 <= $limite);

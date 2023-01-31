<?php

/********* Partie 2 ****************************/
/********* C. Les structures *******************/
/********* II. Boucles *************************/
/********* a. for ******************************/

// Déclarez une variable `limite` et affectez-lui un nombre
// (Un conseil : pas un nombre trop élevé ;-))
$limite = rand(15, 20); // On prend un nombre aléatoire entre 15 et 20

// Affichez tous les nombres de 1 à `limite`
for ($compteur = 1; $compteur <= $limite; $compteur = $compteur + 1) {
    echo $compteur . '<br>';
}

// Affichez tous les nombres pairs de 0 à `limite`
for ($compteur = 0; $compteur <= $limite; $compteur += 2) {
    echo $compteur . '<br>';
}

// Affichez tous les nombres impairs de `limite` à -`limite`
for ($i = $limite; $i >= -$limite; $i--) {
    if ($i % 2 == 1 || $i % 2 == -1) {
        echo $i . '<br>';
    }
}
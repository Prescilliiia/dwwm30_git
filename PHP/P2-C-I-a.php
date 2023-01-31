<?php

/********* Partie 2 ****************************/
/********* C. Les structures *******************/
/********* I. Conditions ***********************/
/********* a. If else **************************/

// Nous allons faire un peu de grammaire
// Déclarez une variable `masculin`, et passez-lui une valeur booléenne
$masculin = true;

// Déclarez une variable `nombre` et affectez-lui un nombre entier
$nombre = 15;

// Ecrivez les textes qui suivent
// en accordant en genre et en nombre 
// grâce aux variables `masculin` et `nombre`

// "Je suis marié(e) à Lucile. Ensemble, nous avons {nombre} enfant(s)."

$masculin == true; // Je suis un homme
$nombre < 2; // J'ai "peu" d'enfants

if ($masculin == true && $nombre < 2) {
    echo 'Je suis marié à Lucile. 
    Ensemble, nous avons ' . $nombre . ' enfant.';
} elseif ($masculin == true && $nombre > 1) {
    echo 'Je suis marié à Lucile. 
    Ensemble, nous avons ' . $nombre . ' enfants.';
} elseif ($masculin == false && $nombre < 2) {
    echo 'Je suis mariée à Lucile. 
    Ensemble, nous avons ' . $nombre . ' enfant.';
} else {
    // $masculin == false && $nombre > 1
    echo 'Je suis mariée à Lucile. 
    Ensemble, nous avons ' . $nombre . ' enfants.';
}

echo '<br>';

// "Il y a {nombre} anima[l / ux] dans ce zoo. C'est [peu / beaucoup] ! Je suis étonné(e) !"
if ($nombre >= 2) {
    echo "Il y a $nombre animaux dans ce zoo.";
} else {
    echo "Il y a $nombre animal dans ce zoo.";
}

if ($nombre >= 100) {
    echo 'C\'est beaucoup !';
} else {
    echo 'C\'est peu !';
}

if ($masculin) {
    echo 'Je suis étonné !';
} else {
    echo 'Je suis étonnée !';
}

echo '<br>';

// "J'ai mangé {nombre} chocolat(s) de l'avent en {nombre - 10} jour(s), car j'en ai mangé plusieurs par jour car je suis gourmand(e)."
echo 'J\'ai mangé ' . $nombre . ' chocolat';
if ($nombre >= 2) {
    echo 's';
}

echo ' de l\'avent en ' . ($nombre - 10) . ' jour';
if ($nombre - 10 >= 2) {
    echo 's';
}

echo ', car j\'en ai mangé plusieurs par jour car je suis gourmand';
if (!$masculin) {
    echo 'e';
}
echo '.';

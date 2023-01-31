<?php

$tableau = [
    'titi',     // Clef : 0
    'toto',     // Clef : 1
    'tata',     // Clef : 2
    2345,       // Clef : 3
];

$tableau = array(
    'titi',     // Clef : 0
    'toto',     // Clef : 1
    'tata',     // Clef : 2
    2345,       // Clef : 3
);

$utilisateur = [
    'prenom' => 'Jordan',   // Clef : "prenom"
    'nom' => 'Juventin',    // Clef : "nom"
    'age' => 27,            // Clef : "age"
    'Valeur',               // Clef : 0
    42 => 'Valeur',         // Clef : 42
    'Valeur',               // Clef : 43
    'nationalites' => [     // Clef : "nationalites"
        'Français',    // Key : 0
        'Japonais'     // Key : 1
    ]
];





echo 'Je m\'appelle ' . $utilisateur['prenom'] . ' et je suis ' . $utilisateur['nationalites'][0] . '<br>';


echo '<pre>';
print_r($utilisateur);
echo '<br>';
var_dump($utilisateur);
echo '<br>';
echo '</pre>';

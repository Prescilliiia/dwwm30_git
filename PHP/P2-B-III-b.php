<?php

/********* Partie 2 ****************************/
/********* B. Les instructions de base *********/
/********* III. Les chaînes de caractères ******/
/********* b. Concaténation ********************/


$str1 = 'Bonjour';
$str2 = 'Monde';
$str3 = 'Hello';
$str4 = 'World';

$espace = ' ';
$virgule = ',';
$point_exclamation = '!';
$point_interrogation = '?';
$prenom = 'Jordan';     // Vous avez le droit de remplacer cette variable par votre prénom ;-)

$str5 = "$str3 tout le monde $point_exclamation";
$str6 = '$str1 $prenom, tu vas bien $point_interrogation';
$str7 = 'Ca va' . $virgule . ' vous ' . $point_interrogation;

/*  1)

    Que va afficher un `echo $str5;` ?
    => Hello tout le monde !

    Que va afficher un `echo $str6;` ?
    => $str1 $prenom, tu vas bien $point_interrogation

    Que va afficher un `echo $str7;` ?
    => Ca va, vous ?

    Que va afficher un `echo $str8;` ?
    => ERREUR
*/

/*  2)

    A partir de toutes les variables fournies, 
    écrivez les phrases demandées avec la fonction `echo`, 
    sans utiliser aucune autre chaîne de caractères
    que les variables.
*/

$jmappelle = 'Je m\'appelle';
// Ecrivez la phrase "Je m'appelle [prénom] !"
// echo "$jmappelle$espace$prenom$espace$point_exclamation<br>";
// echo $jmappelle . $espace . $prenom . $espace . $point_exclamation;

// Ecrivez la phrase "Hello, World!"
// echo $str3 . $virgule . ' ' . $str4 . $point_exclamation . '<br>'; // "Hello, World !"

// Ecrivez la phrase "Hello tout le monde ! Je m'appelle [prénom] ! Ca va, vous ?"
// Faites-le de 2 manières différentes.
// echo $str5 . ' ' . $jmappelle . ' ' . $prenom . ' ' . $point_exlcamation . ' ' . $str7;
// echo "$str5 $jmappelle $prenom $point_exlcamation $str7";

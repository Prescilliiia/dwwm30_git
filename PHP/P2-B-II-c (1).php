<?php
/********* Partie 2 ****************************/
/********* B. Les instructions de base *********/
/********* II. Les opérateurs ******************/
/********* c. Logiques *************************/


/**
 * Je vous invite à découvrir les opérateurs par vous-mêmes :
 * 
 * PHP met à disposition une fonction pour débugger, 
 * qui s'appelle `var_dump`, et qui affiche le type et la valeur
 * de ce que vous lui donnez entre parenthèses.
 * 
 * Aussi, amusez-vous avec les divers opérateurs vus et `var_dump` 
 * et testez un peu avant d'entamer les exercices un peu plus bas ;-)
 */

// Par exemple
var_dump(true && true);


/*  1)

    Complétez les commentaires 
    en donnant les résultats des diverses assertions logiques :

    true AND true
    => true

    true OR false
    => true

    true && true && true && ... && true && false
    => false

    false || false || false || ... || false || true
    => true

    true XOR false
    => true

    true XOR true
    => false

    false XOR false
    => false

    (5 < 2) || (3 > 1)
    => true

    (1 >= 1) && (1 <= 1) && (1 == 1 OR 1 === '1')
    => true
*/


/*  2)

    "Traduisez" en français les expressions PHP suivantes :

    $a || $b
    => A ou B

    $a && $b
    => A et B

    $a XOR $b = ($a || $b) && (! ($a && $b))
    => A ou B, mais pas les deux

    $mouille == $il_pleut && $j_ai_oublie_mon_parapluie
    => Je suis mouillé si il pleut et que j'ai oublié mon parapluie

    $diplome == $moyenne > 10 && !$renvoye_de_l_ecole
    => Je suis diplômé si ma moyenne est supérieure à 10 
    et que je ne suis pas renvoyé de l'école
*/
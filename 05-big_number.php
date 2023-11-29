<?php
// Écrire une fonction qui prend deux nombres en paramètre
// et retourne le plus grand des deux.
// Ensuite, affichez le résultat suivi d'un saut de ligne

function bigger($nb1, $nb2){
    if($nb1>$nb2){
        return $nb1 . "\n";
    }

    else {
        return $nb2 . "\n";
    }
}

echo bigger(2,18000) . "\n";

//Noran LONG
?>
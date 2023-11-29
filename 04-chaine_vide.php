<?php
// Écrire une fonction qui prend une chaîne de caractères en paramètre
// et retourne "vide" si la chaîne est vide sinon "non vide",
// Ensuite, affichez le résultat suivi d'un saut de ligne.

$string = "";

function chaine($string){
    if(empty($string)) {
        return "Vide \n";
    }

    else{
        return "Non vide \n";
    }
}

echo chaine($string) ."\n";

//Noran LONG
?>
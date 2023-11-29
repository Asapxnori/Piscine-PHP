<?php
// Écrire une fonction qui prend un nombre en paramètre
// et return "positif" si le nombre est positif, ou bien "négatif" si le nombre
// est negatif ou "nul" si le nombre est null.
// Ensuite, affichez le résultat suivi d'un saut de ligne

function PosNeg($nb){
    if($nb > 0){
        return "Positif \n";
    }

    elseif($nb < 0){
        return "Négatif \n";
    }

    else{
        return "Nul \n";
    }
}

echo PosNeg(-4) ."\n";

//Noran LONG
?>
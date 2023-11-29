<?php
// Créez une fonction qui prend en paramètre une lettre 
// Et une chaîne de caractères. La fonction doit retourner le nombre d'occurrences 
// De la lettre dans la chaîne, sans distinction de casse. 
// Utilisez la fonction avec une lettre et une chaîne de texte de votre choix. 
// Affichez le résultat dans le terminal.

function CountL($Chain, $Letter){
    $result = substr_count(strtolower($Chain), strtolower($Letter));
    return $result;
}

echo CountL("Bonjour NOran", "n");

//Noran LONG
?>

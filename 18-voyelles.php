<?php
// Créez une fonction qui prend en paramètre une chaîne de caractères.
// Cette fonction devrait compter le nombre de voyelles présentes dans la chaîne 
// (en considérant seulement les voyelles 'a', 'e', 'i', 'o', 'u', 'A', 
// 'E', 'I', 'O', 'U'). 
// Utilisez la fonction compterVoyelles avec une chaîne de texte de votre choix. 
// Affichez le nombre de voyelles dans le terminal

//Méthode trouvée sur un forum.

function CountVoyelles($String){
 
preg_match_all('#([aeiou])#i', $String, $matches);
 
echo count($matches[1]);
}

echo CountVoyelles("HEllaoO");


//Noran LONG
?>
<?php
// Créez une fonction qui affiche un message, par exemple 'Hello'. 
// Utilisez une boucle pour afficher le résultat de cette fonction 10 fois.
// Ajoutez trois underscores avant et après le cinquième message

function AutoGreet($greet){
    for($i = 0; $i <= 10; $i++){
        if ($i == 4) {  
            echo "___ $greet ___" . "\n";
        } 
        else {
            echo "$greet" . "\n";
        }
    }
}

echo AutoGreet("Hello") . "\n";

//Noran LONG
?>
<?php
// Écrivez une fonction qui prend en paramètre un tableau de nombres. 
// La fonction doit renvoyer un nouveau tableau contenant les mêmes 
// nombres, mais dans l'ordre inverse. 
// Affichez le tableau original et le tableau inversé dans le terminal

$tab = [0,1,2,3,4,5,6,7,8,9,10];

function RevTab($tab) {

    foreach($tab as $values){
        echo "$values \n";
    }

    foreach(array_reverse($tab) as $values){
        echo "$values \n";
    }
}

echo RevTab($tab);

//Noran LONG
?>
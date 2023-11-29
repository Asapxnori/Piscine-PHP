<?php
// Créez une fonction qui affiche un message qui return la date du jours
// (d/m/y) Puis affichez le résultat suivi d'un saut de ligne

function Curdate($date){
        $date = date("d/m/y");
        return "Bonjour nous sommes le : $date." . "\n" ;
    }

echo Curdate("");

//Noran LONG

?>
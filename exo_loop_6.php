<?php

/*
Afficher tous les éléments du tableau $fruits avec une boucle foreach.
Afficher le message "première itération" lors de la première itération et le message "dernière itération" lors de la dernière itération.
*/

// Création du tableau
$fruits = ['ananas', 'banane', 'cerise'];

// On defini la taille puis on fait -1 afin de recup le dernier index du tableau
$dernier = count($fruits) -1;

// On créer une boucle foreach
foreach ($fruits as $key => $fruit){
    // on regarde si l'index est soit le premier, le dernier ou aucun des deux
    if ($key == 0){

        echo "première itération => " . $fruit."<br>\n";

    }   elseif ($key == $dernier){

            echo "dernière itération => " . $fruit."<br>\n";

        }   else{

                echo "itération N°". $key+1 ." => " . $fruit."<br>\n";

            }
}
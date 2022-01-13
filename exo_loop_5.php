<?php

/*
Afficher les nombres de 0 à 9 avec une boucle for.
Afficher le message "première itération" lors de la première itération et le message "dernière itération" lors de la dernière itération.
*/

for ($i = 0 ; $i <= 9 ; $i++){
    if ($i == 0){

        echo "première itération => " . $i."<br>\n";

    }   elseif ($i == 9){

            echo "dernière itération => " . $i."<br>\n";

        }   else{

                echo "itération N°". $i+1 ." => " . $i."<br>\n";

            }
}
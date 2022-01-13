<?php

/*
Créez toutes les cartes de l'as au roi de cœut en utilisant une boucle for.
Le résultat doit être un tableau contenant les éléments suivants : ['1 cœur', '2 cœur', '3 cœur', ..., '13 cœur']

Ensuite, utilisez une boucle foreach pour afficher tous les éléments du tableau.
*/

// On créer un tableau vide
$cartes = [];

// On fait une boucle pour créer chaque cartes
for ($i = 1 ; $i <= 13 ; $i++){
    $cartes[$i] = "$i Coeur";
}

// On traduit certaine carte (exemple : 1 => As)
$nomCartes = $cartes;
$nomCartes = preg_replace('/^1 /', 'As ', $nomCartes );
$nomCartes = preg_replace('/^11 /', 'Valet ', $nomCartes );
$nomCartes = preg_replace('/^12 /', 'Dame ', $nomCartes );
$nomCartes = preg_replace('/^13 /', 'Roi ', $nomCartes );

// On boucle le tableau afin d'afficher toute les cartes du tableau
foreach ($nomCartes as $nomCarte){
    echo $nomCarte."<br>\n";
}
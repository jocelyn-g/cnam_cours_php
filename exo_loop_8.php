<?php

require __DIR__.'/vendor/autoload.php';
/*
Créez toutes les cartes de l'as au roi dans les quatre couleurs en utilisant une boucle foreach qui parcours un tableau contenant les quatre couleurs et une boucle for qiu est imbriquée.

Une carte est représentée par un tableau à clé alphanumérique, comme ci-dessous avec l'as de cœur :
[
    'value': 1,
    'color: 'cœur',
]

Le résultat final doit être un tableau contenant les éléments suivants :

[
    [
        'value': 1,
        'color: 'cœur',
    ],
    [
        'value': 2,
        'color: 'cœur',
    ],
    [
        'value': 3,
        'color: 'cœur',
    ],
    ...
        [
        'value': 13,
        'color: 'cœur',
    ],
    ...
]

Ensuite, utilisez deux boucles foreach imbriquées pour afficher tous les éléments du tableau.
*/

$colors = ['cœur', 'carreau', 'treffle', 'pique'];

// On créer un tableau vide
$cartes = [];

// On créer une première boucle pour chaque couleur des cartes
for ($color = 0 ; $color < 4 ; $color++ ){
    
    // On créer une seconde boucle pour chaque N° de carte
    for ($i = 0 ; $i < 13 ; $i++){

        // On créer un varible afin de récup la valeur de chaque carte
        $num = $i +1 ;
        // On créer un tableau dans lequel on insert les information des cartes
        $tab = [
            'value' => $num,
            'color' => $colors[$color],
        ] ;

        // On insert les info des cartes dans le tableau principal
        $cartes[] = $tab;
    }



}




// on boucle un prémière fois la tableau
foreach ($cartes as $carte){

    // on boucle un seconde fois le tableau
    foreach ($carte as $c){
        
        // On affiche chaque résultat
        echo "$c ";
    }
    echo "<br>\n";
}

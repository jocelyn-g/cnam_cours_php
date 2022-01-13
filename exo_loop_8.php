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

foreach ($colors as $color){

    // On créer un tableau vide
    $cartes = [];

    for ($i = 1 ; $i <= 13 ; $i++){
        $cartes[] = $i;
        $color= $cartes;
    }

}

dump($colors);










/*


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
*/

/*
foreach ($tab as $b){
echo $b."<br>";
}
*/
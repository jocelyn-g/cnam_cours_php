<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    /*
    Créez un tableau contenant 5 cartes d'un jeu de 32 cartes à jouer.

    Exemple de nom de cartes : 'as pique", '3 carreau', 'valet treffle', ect.

    Tirez un nombre "n" au hasard, compris entre 1 et 5 inclus.

    à l'aide de ce nombre, retire la "n-ième carte le la main.

    Affichez le nom de la carte qui a retirée
    */

    require __DIR__.'/vendor/autoload.php';

    $cartes = [
        '1 Pique',
        '2 Pique',
        '3 Pique',
        '4 Pique',
        '5 Pique',
        '6 Pique',
        '7 Pique',
        '8 Pique',
        '9 Pique',
        '10 Pique',
        'Valet Pique',
        'Reine Pique',
        'Roi Pique',
        '1 Treffle',
        '2 Treffle',
        '3 Treffle',
        '4 Treffle',
        '5 Treffle',
        '6 Treffle',
        '7 Treffle',
        '8 Treffle',
        '9 Treffle',
        '10 Treffle',
        'Valet Treffle',
        'Reine Treffle',
        'Roi Treffle',
    ];

    $taille = count($cartes);

    // @warning test de dump
    echo "Voici les ".$taille." cartes<br>\n";
    dump($cartes);


    $c = random_int(1, $taille);

    $cartesRemove = array_splice(
        $cartes,
        $c -1,
        1,
    );

    $newtaille = $taille -1;

    // @warning test de dump
    echo "Voici la carte au hasrd qui est retirer \"".$cartesRemove[0]."\" qui est la carte n°".$c."<br>\n";
    echo "Voici les ".$newtaille." cartes restant<br>\n";
    dump($cartes);

    ?>

</body>
</html>
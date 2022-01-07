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
        'As Pique',
        '3 Carreau',
        'Valet Treffle',
        '9 Coeur',
        '6 Pique',
    ];

    // @warning test de dump
    echo "Voici les 5 cartes<br>\n";
    dump($cartes);


    $c = random_int(1, 5);

    $cartesRemove = array_splice(
        $cartes,
        $c -1,
        1,
    );

    // @warning test de dump
    echo "Voici la carte au hasrd qui est retirer \"".$cartesRemove[0]." qui est la carte n°".$c."\"<br>\n";
    echo "Voici les 4 cartes restant<br>\n";
    dump($cartes);

    ?>

</body>
</html>
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
    Creéz un tableau contenant 5 cartes d'un jeu de 32 cartes à jouer.

    Exemple de nom de cartes : '1 pique', '3 carreau', '11 treffle', etc.

    Rappel des valeurs de certaines cartes :

    - As : 1
    - Valet : 11
    - Dame : 12
    - Roi : 13

    Stockez la taille du tableau dans une variable.

    Tirez deux nombres au hasard, compris entre 1 et la taille du tableau inclus,
    en utilisant la fonction random_int().
    Stockez ces nombres dans un tableau.

    Si le même nombre a été tiré deux fois, affichez un message qui dit que le
    meme nombre  

    À l'aide de ces nombres, retirer deux cartes de la main.

    Affichez les nombre tirés au hasard et le nom des cartes qui ont été retirées.

    Comparez les valeurs des cartes et affichez quelle carte a une valeur supérieur.
    Par convention, la carte As (valeur 1) est la plus élevée.
    */

    require __DIR__.'/vendor/autoload.php';

    // Création tab
    $cartes = [
        '1 Pique', /* As */
        '2 Pique',
        '3 Pique',
        '4 Pique',
        '5 Pique',
        '6 Pique',
        '7 Pique',
        '8 Pique',
        '9 Pique',
        '10 Pique',
        '11 Pique', /* Valet */
        '12 Pique', /* Dame */
        '13 Pique', /* Roi */
    ];
    echo "affiche les cartes";
    dump($cartes);

    // var taille tab
    $taille = count($cartes);

    // tab recup
    $nombre = [];

    // 1er random
    $random = random_int(1, $taille);
    $nombre[] = $random;

    $cartesRemove = array_splice(
        $cartes,
        $random -1,
        1,
    );

    echo "affiche la 1ère carte retirer";
    dump($cartesRemove);
    $taille = count($cartes);
    echo "affiche la nouvelle taille du tab";
    dump($taille);

    echo "affiche les cartes restant";
    dump($cartes);

    // 2ème random
    $random = random_int(1, $taille);
    $nombre[] = $random;

    $cartesRemove2 = array_splice(
        $cartes,
        $random -1,
        1,
    );

    echo "affiche la 2ème carte retirer";
    dump($cartesRemove2);
    $taille = count($cartes);
    echo "affiche la nouvelle taille du tab";
    dump($taille);

    echo "affiche les cartes restant";
    dump($cartes);



    // afficher tab nombre
    dump($nombre);



    // comparaison
    $a = (int) $cartesRemove[0];
    dump($a);
    $b = (int) $cartesRemove2[0];
    dump($b);

    if ($a == 1 || $b == 1){

        if($b == 1){

            echo $cartesRemove2[0]." est plus forte que ". $cartesRemove[0];

        } else{

            echo $cartesRemove[0]." est plus forte que ". $cartesRemove2[0];

        }

    }else {
        if($a < $b){

            echo $cartesRemove2[0]." est plus forte que ". $cartesRemove[0];

        } else{

            echo $cartesRemove[0]." est plus forte que ". $cartesRemove2[0];

        }
    }


    ?>
    
</body>
</html>
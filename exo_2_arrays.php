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
        '11 Treffle',
        '12 Treffle',
        '13 Treffle',
        '1 Carreau',
        '2 Carreau',
        '3 Carreau',
        '4 Carreau',
        '5 Carreau',
        '6 Carreau',
        '7 Carreau',
        '8 Carreau',
        '9 Carreau',
        '10 Carreau',
        '11 Carreau',
        '12 Carreau',
        '13 Carreau',
        '1 coeur',
        '2 coeur',
        '3 coeur',
        '4 coeur',
        '5 coeur',
        '6 coeur',
        '7 coeur',
        '8 coeur',
        '9 coeur',
        '10 coeur',
        '11 coeur',
        '12 coeur',
        '13 coeur',
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


    $nomCartes = $cartesRemove[0];
    $nomCartes = preg_replace('/^1 /', 'As ', $nomCartes );
    $nomCartes = preg_replace('/^11 /', 'Valet ', $nomCartes );
    $nomCartes = preg_replace('/^12 /', 'Dame ', $nomCartes );
    $nomCartes = preg_replace('/^13 /', 'Roi ', $nomCartes );
    $nomCartes2 = $cartesRemove2[0];
    $nomCartes2 = preg_replace('/^1 /', 'As ', $nomCartes2 );
    $nomCartes2 = preg_replace('/^11 /', 'Valet ', $nomCartes2 );
    $nomCartes2 = preg_replace('/^12 /', 'Dame ', $nomCartes2 );
    $nomCartes2 = preg_replace('/^13 /', 'Roi ', $nomCartes2 );

    if ($a == $b){

        echo $nomCartes." est au même niveau que ". $nomCartes2;

    } else{
        if ($a == 1 || $b == 1){
    
            if($b == 1){
    
                echo $nomCartes2." est plus forte que ". $nomCartes;
    
            } else{
    
                echo $nomCartes." est plus forte que ". $nomCartes2;
    
            }
    
        }else {
            if($a < $b){
    
                echo $nomCartes2." est plus forte que ". $nomCartes;
    
            } else{
    
                echo $nomCartes." est plus forte que ". $nomCartes2;
    
            }
        }

    }

    


    ?>
    
</body>
</html>
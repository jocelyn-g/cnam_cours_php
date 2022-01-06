<?php

require __DIR__.'/vendor/autoload.php';


$emptyArray = [];

$fruits = [
    'ananas',
    'banane',
    'cerise',
];

dump($fruits);

echo "fruit n°1 {$fruits[0]}<br>\n";
echo "fruit n°2 {$fruits[1]}<br>\n";
echo "fruit n°3 {$fruits[2]}<br>\n";

$fruits[0]= 'abricot';

dump($fruits);

$size = count($fruits);

echo "Il y a {$size} fruits<br>\n";

$fruits[] = 'datte';
$fruits[] = 'fraise';

dump($fruits);

$size = count($fruits);

echo "Il y a {$size} fruits<br>\n";


$fruitsA = array_shift($fruits);

dump($fruitsA);
dump($fruits);

$fruitsF = array_pop($fruits);

dump($fruitsF);
dump($fruits);


$fruitsRemove = array_splice(
    $fruits,
    1,
    1,
);

dump($fruitsRemove);
dump($fruits);

if (!in_array('ananas', $fruits)){
    echo "il n'y a pas pas d'ananas<br>\n";
}
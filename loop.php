<?php

for ($i = 0 ; $i < 10 ; $i++) {
    echo "$i<br>\n";
}

echo "<br>\n";

$fruits = ['Ananas', 'Banane', 'Cerise', 'Orange'];

for ($i = 0 ; $i < count($fruits) ; $i++) {
    echo $fruits[$i] . "<br>\n";
}

echo "<br>\n";

foreach ($fruits as $key => $fruit){
    echo $key . ":" . $fruit . "<br>\n";
}
<?php

require __DIR__.'/vendor/autoload.php';

// var_dump() sert à inspecter une valeur
// var_dump() ne doit jamais servir à afficher des valeurs à l'utilisateur final

dump(1 == '1');
echo "<br>";
dump(0 === '1');
echo "<br>";
dump(1 === '1');


?>
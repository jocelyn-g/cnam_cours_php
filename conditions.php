<?php

require __DIR__.'/vendor/autoload.php';


$isWaterOff = (bool) random_int(0, 1);
$isGasOff = (bool) random_int(0, 1);

dump($isWaterOff);
dump($isGasOff);

if($isWaterOff && $isGasOff){

    echo "OK <br>";

}else{

    echo "NOP <br>";

    if(!$isWaterOff){
        echo 'coupe l\'eau <br>';
    }

    if(!$isGasOff){
        echo 'coupe le gaz <br>';
    }

}



?>
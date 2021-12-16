<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php



$prenom = "Jocelyn";
$age = 24;
$annee = 2021 - $age;
$a = 0;
$sexe = "h";

echo "<h1>Bonjour je m'appelle " . $prenom . " et j'ai " . $age . " ans je suis née en " . $annee . "</h1>";

while ($a < 10){

    echo "<br>" . $a;

    $a++;

}


if ($sexe == "h"){
    echo "<br> vous êtes un homme";
}
if ($sexe == "f"){
    echo "<br> vous êtes une femme";
}

echo "<br> le variabe \$prenom est de type " . gettype($prenom);

for ($a = 10 ; $a > 0 ; $a--){

    echo "<br>" . $a;

}


?>
    
</body>
</html>



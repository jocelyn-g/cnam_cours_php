<?php

/*
Vérifiez que tous les champs ont bien été remplis.
S'il y a des erreurs, affichez un message d'erreur dans la div au dessus du champ correspondant.

Pour le moment le message de confirmation s'affiche en permanence.
Vous devez le masquez s'il n'est pas pertinent :

- s'il y a des erreurs, il doit être masqué
- si l'utilisateur n'a envoyé aucune donné, il doit être masqué
*/

require __DIR__.'/vendor/autoload.php';


    if ($_POST) {

        if (isset($_POST["alias"]) && isset($_POST["email"]) && isset($_POST["password"])) {
            $alias = htmlspecialchars($_POST["alias"]);
            $email = htmlspecialchars($_POST["email"]);
            $password = htmlspecialchars($_POST["password"]);
        }

        if (empty($_POST['alias'] || $_POST['email'] || $_POST['password'])) {
            // le champ email est vide
            $errors['alias'] = 'Vous devez renseigner ce champ';
            $errors['email'] = 'Vous devez renseigner ce champ';
            $errors['password'] = 'Vous devez renseigner ce champ';
        }

        if (!empty($_POST['alias'] && $_POST['email'] && $_POST['password'])){
            $conf = 'Votre compte a bien été enregistré.';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo</title>
</head>
<body>
    <h1>Exo</h1>

    <div class="confirmation">
        <?php if (!empty($alias)&&!empty($email)&&!empty($password)): ?>
            <?= $conf ?>
            <?php endif ?>
        </div>
    

    <form action="" method="post">
        <div>
            <div class="error">
                <?php if (isset($errors['alias'])): ?>
                    <?= $errors['alias'] ?>
                <?php endif ?>
            </div>
            <input type="text" name="alias" placeholder="votre nom d'utilisateur" value="<?= htmlentities($_POST['alias'] ?? '') ?>">
        </div>
        <div>
            <div class="error">
                <?php if (isset($errors['email'])): ?>
                    <?= $errors['email'] ?>
                <?php endif ?>
            </div>
            <input type="email" name="email" placeholder="votre mail" value="<?= htmlentities($_POST['email'] ?? '') ?>">
        </div>
        <div>
            <div class="error">
                <?php if (isset($errors['password'])): ?>
                    <?= $errors['password'] ?>
                <?php endif ?>
            </div>
            <input type="password" name="password" placeholder="votre mot de passe" value="<?= htmlentities($_POST['password'] ?? '') ?>">
        </div>
        <div>
            <button type="submit">Valider</button>
        </div>
    </form>
</body>
</html>
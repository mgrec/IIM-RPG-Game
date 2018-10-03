<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 04/10/2018
 * Time: 00:39
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Mon compte :
    <p>email : <?= $user->getEmail() ?></p>
    <p>crée le : <?= $user->getDateSubscribe() ?></p>
    <p>dernière connexion le : <?= $user->getDateLastConnection() ?></p>
</body>
</html>

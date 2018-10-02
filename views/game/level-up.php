<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 29/09/2018
 * Time: 17:20
 */
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../assets/css/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../../../assets/css/master.css">
    <title>RPG - Choose your class</title>
</head>
<body>


<div class="website-wrapper website-level-up">

    <div class="general-about">
        <p>Tu as passé un niveau ! Tu es maintenant niveau : <?= isset($lvl) ? $lvl : null ?></p>
    </div>

    <div class="section-level-up">

        <div class="content-level-up">
            <img src="../../../assets/images/game/level-up.png" class="level-up-image">
            <div class="level-up-about">
                <ul>
                    <li>Vie + 5</li>
                    <li>Force + 5</li>
                    <li>Soins + 5</li>
                </ul>
            </div>
        </div>

    </div>

</div>
</body>
</html>


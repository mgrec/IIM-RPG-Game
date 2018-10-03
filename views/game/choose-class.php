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


<div class="website-wrapper website-choose-class">



    <div class="general-about">
        <p>Tu dois choisir ta classe avec précaution.</p>
    </div>

    <div class="section-classes">


        <div class="content-class">
            <img src="../../../assets/images/classes/bandit.png" class="classe-image">
            <p class="classe-about">
                Les bandits sont de véritables assassins. Ils ont une force acru, ce qui leur permettent d'eliminer leurs ennemis facilement et rapidement !
            </p>
            <div data-id="1" class="btn-choose">
                Je suis un bandit
            </div>
        </div>

        <div class="content-class">
            <img src="../../../assets/images/classes/wizard.png" class="classe-image">
            <p class="classe-about">
                Les mages possèdent des nombreuses connaissances en terme de sorcelerie. Leurs sortilèges de soins sont les plus puissants !
            </p>
            <div data-id="2" class="btn-choose">
                Je suis un mage
            </div>
        </div>
    </div>

    <div class="play">
        <form method="post" action="">
            <input class="pseudo-input" name="pseudo" type="text"><br />
            <input hidden class="input-class" name="class" type="text">
            <input class="btn-play" type="button" value="Commencer à jouer">
        </form>
    </div>
</div>

<script src="assets/js/library/jquery.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>


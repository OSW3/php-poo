<?php
include "Personnage.php";

$batman = new Personnage("Batman", Personnage::MEDIUM);
$superman = new Personnage("Superman", Personnage::NOVICE);

function score ($opponent_1, $opponent_2) {
    return "<small>(".$opponent_1->getName()." : ".$opponent_1->getHp()." / ".$opponent_2->getHp()." : ".$opponent_2->getName().")</small>";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $batman->getName()?> vs. <?= $superman->getName()?></title>
</head>
<body>
    
    <h1><?= $batman->getName()?> vs. <?= $superman->getName()?></h1>

    <h2>Présentation</h2>

    <fieldset>
        <legend>Personnage 1</legend>
        <div>Nom : <?= $batman->getName() ?></div>
        <div>Points de vie : <?= $batman->getHp() ?></div>
        <div>Experience : <?= $batman->getXp() ?></div>
    </fieldset>

    <fieldset>
        <legend>Personnage 2</legend>
        <div>Nom : <?= $superman->getName() ?></div>
        <div>Points de vie : <?= $superman->getHp() ?></div>
        <div>Experience : <?= $superman->getXp() ?></div>
    </fieldset>


    <hr>

    <h2>Salutation</h2>

    <div>
        <?= $batman->sayHello($superman) ?>
        <?= score($batman, $superman) ?>
    </div>
    <div>
        <?= $superman->sayHello($batman) ?>
        <?= score($batman, $superman) ?>
    </div>


    <hr>

    <h2>Début du combat</h2>

    <h3>Batman attaque Superman</h3>
    <?php $batman->attack($superman) ?>
    <?= score($batman, $superman) ?>

    <h3>Superman riposte : Attaque + SuperAttaque</h3>
    <?php $superman->attack($batman)->superAttack($batman) ?>
    <?= score($batman, $superman) ?>

    <h3>Une magnifique SuperAttaque de Batman !!</h3>
    <?php $batman->superAttack($superman) ?>
    <?= score($batman, $superman) ?>

    <h3>Superman pleure sa maman... et se soigne.</h3>
    <?php $superman->care() ?>
    <?= score($batman, $superman) ?>

    <h3>Batman tente une attaque secrete (mais... dans le vent).</h3>
    <?php $batman->secretAttack($superman) ?>
    <?= score($batman, $superman) ?>

    <h3>Superman (la tête dans le sac) se défend avec un double attaque..... trop pitoyable :p.</h3>
    <?php $superman->attack($batman)->attack($batman) ?>
    <?= score($batman, $superman) ?>

    <h3>Batman lance une simple attaque puis achève l'alien avec une attaque secrète.</h3>
    <?php $batman->attack($superman)->secretAttack($superman) ?>
    <?= score($batman, $superman) ?>


    <h2>Resultat</h2>

    <fieldset>
        <legend>Personnage 1</legend>
        <div>Nom : <?= $batman->getName() ?></div>
        <div>Points de vie : <?= $batman->getHp() ?></div>
        <div>Experience : <?= $batman->getXp() ?></div>
    </fieldset>

    <fieldset>
        <legend>Personnage 2</legend>
        <div>Nom : <?= $superman->getName() ?></div>
        <div>Points de vie : <?= $superman->getHp() ?></div>
        <div>Experience : <?= $superman->getXp() ?></div>
    </fieldset>

</body>
</html>
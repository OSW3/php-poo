<?php 
include "Voiture.php";
include "Personne.php";

$date = new DateTime;

$person1 = new Personne("Janine", "Bidule", $date->setDate(1962, 2, 28 ));
$person2 = new Personne("Michel", "Durant", $date->setDate(1959, 5, 22 ));
$person3 = new Personne("Jean", "Dupont", $date->setDate(1970, 12, 3 ));

$car1 = new Voiture("Ford", "Ranger", "Noir");
$car2 = new Voiture("Toyota", "Hillux", "Blanc");
$car3 = new Voiture("Dodge", "RAM 1500", "Rouge");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Voitures</title>
</head>
<body>
    
    <h2>Les véhicules</h2>

    <fieldset>
        <legend>Voiture 1</legend>
        <div>Marque : <?= $car1->getBrand() ?></div>
        <div>Modele : <?= $car1->getModel() ?></div>
        <div>Couleur : <?= $car1->getColor() ?></div>
    </fieldset>

    <fieldset>
        <legend>Voiture 2</legend>
        <div>Marque : <?= $car2->getBrand() ?></div>
        <div>Modele : <?= $car2->getModel() ?></div>
        <div>Couleur : <?= $car2->getColor() ?></div>
    </fieldset>

    <fieldset>
        <legend>Voiture 3</legend>
        <div>Marque : <?= $car3->getBrand() ?></div>
        <div>Modele : <?= $car3->getModel() ?></div>
        <div>Couleur : <?= $car3->getColor() ?></div>
    </fieldset>


    <h2>Les Personnes</h2>

    <fieldset>
        <legend>Personne 1</legend>
        <div>Nom : <?= $person1->getLastname() ?></div>
        <div>Prénom : <?= $person1->getFirstname() ?></div>
    </fieldset>

    <fieldset>
        <legend>Personne 2</legend>
        <div>Nom : <?= $person2->getLastname() ?></div>
        <div>Prénom : <?= $person2->getFirstname() ?></div>
    </fieldset>

    <fieldset>
        <legend>Personne 3</legend>
        <div>Nom : <?= $person3->getLastname() ?></div>
        <div>Prénom : <?= $person3->getFirstname() ?></div>
    </fieldset>


    <h2>Affectation des conducteurs</h2>

    <?php
        $car1->setDriver($person2);
        $car2->setDriver($person3);
        $car3->setDriver($person1);

        // On retire jean du vehicule
        $car2->setDriver(null);
    ?>

    <fieldset>
        <legend>Voiture 1</legend>
        <div>Marque : <?= $car1->getBrand() ?></div>
        <div>Modele : <?= $car1->getModel() ?></div>
        <div>Conducteur : <?= $car1->getDriver() ? $car1->getDriver()->getFirstname() : null ?></div>
    </fieldset>

    <fieldset>
        <legend>Voiture 2</legend>
        <div>Marque : <?= $car2->getBrand() ?></div>
        <div>Modele : <?= $car2->getModel() ?></div>
        <div>Conducteur : <?= $car2->getDriver() ? $car2->getDriver()->getFirstname() : null ?></div>
    </fieldset>

    <fieldset>
        <legend>Voiture 3</legend>
        <div>Marque : <?= $car3->getBrand() ?></div>
        <div>Modele : <?= $car3->getModel() ?></div>
        <div>Conducteur : <?= $car3->getDriver() ? $car3->getDriver()->getFirstname() : null ?></div>
    </fieldset>


    <h2>On démarres les véhicules</h2>

    <fieldset>
        <legend>Etat des véhicules avant démarrage</legend>
        <div><?= $car1->getBrand() ?> : <?= $car1->getIsStarted() ? "Démarré" : "Arrêté" ?></div>
        <div><?= $car2->getBrand() ?> : <?= $car2->getIsStarted() ? "Démarré" : "Arrêté" ?></div>
        <div><?= $car3->getBrand() ?> : <?= $car3->getIsStarted() ? "Démarré" : "Arrêté" ?></div>
    </fieldset>
    <?php
        $car1->start();
        $car2->start();
        $car3->start();
    ?>
    <fieldset>
        <legend>Etat des véhicules après démarrage</legend>
        <div><?= $car1->getBrand() ?> : <?= $car1->getIsStarted() ? "Démarré" : "Arrêté" ?></div>
        <div><?= $car2->getBrand() ?> : <?= $car2->getIsStarted() ? "Démarré" : "Arrêté" ?></div>
        <div><?= $car3->getBrand() ?> : <?= $car3->getIsStarted() ? "Démarré" : "Arrêté" ?></div>
    </fieldset>

    <hr>

    <h3>Les voitures accelèrent</h3>
    <fieldset>
        <div><?= $car1->getBrand() ?> roule a <?= $car1->getSpeed() ?> Km/H</div>
        <div><?= $car2->getBrand() ?> roule a <?= $car2->getSpeed() ?> Km/H</div>
        <div><?= $car3->getBrand() ?> roule a <?= $car3->getSpeed() ?> Km/H</div>
    </fieldset>
    <?php
        $car1->accelerate(50);
        $car2->accelerate(40);
        $car3->accelerate(30);
    ?>
    <fieldset>
        <div><?= $car1->getBrand() ?> roule a <?= $car1->getSpeed() ?> Km/H</div>
        <div><?= $car2->getBrand() ?> roule a <?= $car2->getSpeed() ?> Km/H</div>
        <div><?= $car3->getBrand() ?> roule a <?= $car3->getSpeed() ?> Km/H</div>
    </fieldset>

    <hr>

    <h3>Les voitures tournent a droite</h3>
    <fieldset>
        <div><?= $car1->getBrand() ?> direction <?= $car1->getDirection() ?></div>
        <div><?= $car2->getBrand() ?> direction <?= $car2->getDirection() ?></div>
        <div><?= $car3->getBrand() ?> direction <?= $car3->getDirection() ?></div>
    </fieldset>
    <?php
        $car1->turn("right");
        $car3->turn("right");
    ?>
    <fieldset>
        <div><?= $car1->getBrand() ?> direction <?= $car1->getDirection() ?></div>
        <div><?= $car2->getBrand() ?> direction <?= $car2->getDirection() ?></div>
        <div><?= $car3->getBrand() ?> direction <?= $car3->getDirection() ?></div>
    </fieldset>

    <hr>

    <h3>Voiture 1 ralenti / voiture 3 accélère</h3>
    <fieldset>
        <div><?= $car1->getBrand() ?> roule a <?= $car1->getSpeed() ?> Km/H</div>
        <div><?= $car2->getBrand() ?> roule a <?= $car2->getSpeed() ?> Km/H</div>
        <div><?= $car3->getBrand() ?> roule a <?= $car3->getSpeed() ?> Km/H</div>
    </fieldset>
    <?php
        $car1->decelerate(30);
        $car3->accelerate(40);
    ?>
    <fieldset>
        <div><?= $car1->getBrand() ?> roule a <?= $car1->getSpeed() ?> Km/H</div>
        <div><?= $car2->getBrand() ?> roule a <?= $car2->getSpeed() ?> Km/H</div>
        <div><?= $car3->getBrand() ?> roule a <?= $car3->getSpeed() ?> Km/H</div>
    </fieldset>

<hr>

<h3>Voiture 1 tourne à gauche</h3>
<fieldset>
    <div><?= $car1->getBrand() ?> direction <?= $car1->getDirection() ?></div>
    <div><?= $car2->getBrand() ?> direction <?= $car2->getDirection() ?></div>
    <div><?= $car3->getBrand() ?> direction <?= $car3->getDirection() ?></div>
</fieldset>
<?php
    $car1->turn("left");
?>
<fieldset>
    <div><?= $car1->getBrand() ?> direction <?= $car1->getDirection() ?></div>
    <div><?= $car2->getBrand() ?> direction <?= $car2->getDirection() ?></div>
    <div><?= $car3->getBrand() ?> direction <?= $car3->getDirection() ?></div>
</fieldset>

<hr>

<h3>Arrêt des vehicules</h3>
<fieldset>
    <div><?= $car1->getBrand() ?> : <?= $car1->getIsStarted() ? "Démarré" : "Arrêté" ?></div>
    <div><?= $car2->getBrand() ?> : <?= $car2->getIsStarted() ? "Démarré" : "Arrêté" ?></div>
    <div><?= $car3->getBrand() ?> : <?= $car3->getIsStarted() ? "Démarré" : "Arrêté" ?></div>
</fieldset>
<?php
    $car1->stop();
    $car2->stop();
    $car3->stop();
?>
<fieldset>
    <div><?= $car1->getBrand() ?> : <?= $car1->getIsStarted() ? "Démarré" : "Arrêté" ?></div>
    <div><?= $car2->getBrand() ?> : <?= $car2->getIsStarted() ? "Démarré" : "Arrêté" ?></div>
    <div><?= $car3->getBrand() ?> : <?= $car3->getIsStarted() ? "Démarré" : "Arrêté" ?></div>
</fieldset>


<h3>On ralenti les véhicules</h3>
<?php
    $car1->decelerate( $car1->getSpeed() );
    $car2->decelerate( $car2->getSpeed() );
    $car3->decelerate( $car3->getSpeed() );
?>
<?php
    $car1->stop();
    $car2->stop();
    $car3->stop();
?>
<fieldset>
    <div><?= $car1->getBrand() ?> roule a <?= $car1->getSpeed() ?> Km/H</div>
    <div><?= $car2->getBrand() ?> roule a <?= $car2->getSpeed() ?> Km/H</div>
    <div><?= $car3->getBrand() ?> roule a <?= $car3->getSpeed() ?> Km/H</div>
</fieldset>
<fieldset>
    <div><?= $car1->getBrand() ?> : <?= $car1->getIsStarted() ? "Démarré" : "Arrêté" ?></div>
    <div><?= $car2->getBrand() ?> : <?= $car2->getIsStarted() ? "Démarré" : "Arrêté" ?></div>
    <div><?= $car3->getBrand() ?> : <?= $car3->getIsStarted() ? "Démarré" : "Arrêté" ?></div>
</fieldset>



<h3>Conducteur + Vitesse Max</h3>
<fieldset>
    <div>
        <?= $car1->getBrand() ?> : 
        <?= $car1->getDriver() ? $car1->getDriver()->getFirstname() : null ?> : 
        Vitesse Max : <?= $car1->getMaxSpeed() ?> Km/h
    </div>
    <div>
        <?= $car2->getBrand() ?> : 
        <?= $car2->getDriver() ? $car2->getDriver()->getFirstname() : null ?> : 
        Vitesse Max : <?= $car2->getMaxSpeed() ?> Km/h
    </div>
    <div>
        <?= $car3->getBrand() ?> :
        <?= $car3->getDriver() ? $car3->getDriver()->getFirstname() : null ?> : 
        Vitesse Max : <?= $car3->getMaxSpeed() ?> Km/h
    </div>
</fieldset>

</body>
</html>
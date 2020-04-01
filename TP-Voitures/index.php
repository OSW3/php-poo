<?php 
include "Voiture.php";
include "Personne.php";

$date = new DateTime;
$person1 = new Personne("Michel", "Durant", $date->setDate(1959, 5, 22 ));
$person2 = new Personne("Jean", "Dupont", $date->setDate(1970, 12, 3 ));
$person3 = new Personne("Janine", "Bidule", $date->setDate(1962, 2, 28 ));

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

</body>
</html>
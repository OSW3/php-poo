<?php

include "Personnage.php";

$perso = new Personnage;

echo "Nom : " . $perso->nom ."<br>";
echo "Age : " . $perso->age ."<br>";

$perso->nom = "Bruce";

echo "<br>";
echo "Nom : " . $perso->nom ."<br>";

$perso_2 = new Personnage;

echo "Nom : " . $perso_2->nom ."<br>";

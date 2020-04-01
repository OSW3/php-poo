<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "Vehicule.php";

include "Voiture.php";
include "Camion.php";
include "Moto.php";

// Impossible d'instancier une classe abstraite
// --
// $vehicule = new Vehicule("Tesla");
// echo $vehicule->getBrand()."<br>";

$car1 = new Voiture("Tesla");
// $car1->setBrand("Ford");
echo $car1->getType()." : ";
echo $car1->getBrand()."<br>";
echo Voiture::WHEELS."<br>";

$truck1 = new Camion("Mack");
echo $truck1->getType()." : ";
echo $truck1->getBrand()."<br>";
echo Camion::WHEELS."<br>";

$moto1 = new Moto("Harley");
echo $moto1->getType()." : ";
echo $moto1->getBrand()."<br>";
echo Moto::WHEELS."<br>";
<?php

include "Personnage.php";

$franck = new Personnage;

$franck->nom = "Franck";
echo "Nom : ". $franck->nom . "<br>";

echo $franck->bounjour("Claire") ."<br>";
echo $franck->bounjour( $franck->nom ) ."<br>";
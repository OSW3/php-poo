<?php

include "Personnage.php";

$franck = new Personnage("Franck");
$claire = new Personnage("Claire");

echo $franck->sayHello($claire)."<br>";

// $franck->setName("Bob");
echo $franck->getName()."<br>";
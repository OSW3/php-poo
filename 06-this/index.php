<?php

include "Personnage.php";

$franck = new Personnage;
$franck->name = "Franck";

$claire = new Personnage;
$claire->name = "Claire";

$bruce = new Personnage;
$bruce->name = "Bruce";

$peter = new Personnage;
$peter->name = "Peter";

echo $franck->sayHello($claire)."<br>";
echo $claire->sayHello($franck)."<br>";
echo $claire->sayHelloMany([$franck, $bruce, $peter])."<br>";
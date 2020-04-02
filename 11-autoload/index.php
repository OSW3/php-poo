<?php

define( 'DS', DIRECTORY_SEPARATOR);

function loadMyClass($c)
{ 
    $file = __DIR__ . DS . $c . ".php";
    
    echo $file."<br>";
    include $file;
}
spl_autoload_register("loadMyClass");


$foo = new Foo;
$bar = new Bar;

$car1 = new Voiture;

echo $foo->info()."<br>";
echo $bar->info()."<br>";
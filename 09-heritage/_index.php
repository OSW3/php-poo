<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


abstract class Foo 
{
    public $a    = "AAA";
    protected $b = "BBB";
    private $c   = "CCC";

    public function __construct()
    {
        echo $this->a." (dans le constructeur de la class Foo)<br>";
        echo $this->b." (dans le constructeur de la class Foo)<br>";
        echo $this->c." (dans le constructeur de la class Foo)<br>";
    }
}

class Bar extends Foo
{
    // public function __construct()
    // {
    //     echo $this->a." (dans le constructeur de la classe Bar)<br>";
    //     echo $this->b." (dans le constructeur de la classe Bar)<br>";
    //     // echo $this->c." (dans le constructeur de la classe Bar)<br>";
    // }
}

//  Class FOO

// $foo = new Foo;
// echo $foo->a." (en dehors de la classe Foo)<br>";
// // echo $foo->b." (en dehors de la classe Foo)<br>";
// // echo $foo->c." (en dehors de la classe Foo)<br>";

// Class BAR

$bar = new Bar;
echo $bar->a." (en dehors de la classe Bar)<br>";
echo $bar->b." (en dehors de la classe Bar)<br>";
echo $bar->c." (en dehors de la classe Bar)<br>";

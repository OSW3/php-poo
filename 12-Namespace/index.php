<?php 

include_once "autoload.php";

use Foo\A;
use Foo\B as fooB;
use Bar\B as barB;

$foo_a = new A;
$foo_b = new fooB;
$bar_b = new barB;

echo $foo_a->info()."<br>";
echo $foo_b->info()."<br>";
echo $bar_b->info()."<br>";
<?php

namespace Foo;

class A 
{
    public function info()
    {
        return "Je suis méthode ". __METHOD__ ." la class ". __CLASS__;
    }
}
class B
{
    public function info()
    {
        return "Je suis méthode ". __METHOD__ ." la class ". __CLASS__;
    }
}
namespace Foo\Foo;

class A 
{
    public function info()
    {
        return "Je suis méthode ". __METHOD__ ." la class ". __CLASS__;
    }
}
class B
{
    public function info()
    {
        return "Je suis méthode ". __METHOD__ ." la class ". __CLASS__;
    }
}

namespace Bar;

class A 
{
    public function info()
    {
        return "Je suis méthode ". __METHOD__ ." la class ". __CLASS__;
    }
}
class B
{
    public function info()
    {
        return "Je suis méthode ". __METHOD__ ." la class ". __CLASS__;
    }
}

namespace Bar\Foo;

class A 
{
    public function info()
    {
        return "Je suis méthode ". __METHOD__ ." la class ". __CLASS__;
    }
}
class B
{
    public function info()
    {
        return "Je suis méthode ". __METHOD__ ." la class ". __CLASS__;
    }
}


$a = new \Foo\A;
$b = new \Foo\B;

echo $a->info()."<br>";
echo $b->info()."<br>";

$a = new \Bar\A;
$b = new \Bar\B;

echo $a->info()."<br>";
echo $b->info()."<br>";

$a = new \Bar\Foo\A;
$b = new \Bar\Foo\B;

echo $a->info()."<br>";
echo $b->info()."<br>";


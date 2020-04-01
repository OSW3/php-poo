<?php

class Foo 
{
    private $bar = "Bar from FooClass";

    public function getBar()
    {
        return $this->bar;
    }
}

$foo = new Foo;

echo $foo->getBar();
// echo $foo->bar;
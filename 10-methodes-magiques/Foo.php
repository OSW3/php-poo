<?php

class Foo 
{
    public function __call($name, $params=[])
    {
        echo "Appel de la methode : ".$name;
    }
}
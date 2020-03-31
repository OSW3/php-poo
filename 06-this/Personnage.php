<?php

class Personnage
{
    // Properties
    // --

    public $name;


    // Methods
    // --

    public function sayHello(Personnage $to)
    {
        return $this->name . " dit bonjour à ". $to->name;
    }

    public function sayHelloMany(array $persons)
    {
        foreach ($persons as $person)
        {
            echo $this->name . " dit bonjour à ". $person->name."<br>";
        }
    }
}
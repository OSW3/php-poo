<?php 

class Personnage
{
    // Constantes
    // --

    const EYES = 2;


    // Properties
    // --

    private $name;


    // Methods
    // --

    public function __construct(string $name)
    {
        $this->name = $name;
        // $this->setName( $name );
    }

    public function sayHello(Personnage $to)
    {
        return $this->name . " dit bonjour a ". $to->name;
    }


    // Getter / Setter
    // --

    // private function setName(string $name): self
    // {
    //     $this->name = $name;

    //     return $this;
    // }
    public function getName(): string
    {
        return $this->name;
    }
}
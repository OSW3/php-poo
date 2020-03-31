<?php 

class Personnage
{
    // Les propriétés
    // -- 

    public $nom;
    public $age;


    // Les Méthodes (ou actions)
    // --

    public function bounjour(string $name) 
    {
        return "Bonjour " . $name;
    }

}
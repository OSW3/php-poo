<?php

namespace Bar;

class B
{
    public function info()
    {
        return "Je suis méthode ". __METHOD__ ." la class ". __CLASS__;
    }
}
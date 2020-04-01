<?php

abstract class Vehicule
{
    private $brand;
    private $isStarted;
    private $speed;
    private $maxSpeed;

    protected $type;

    public function __construct(string $brand)
    {
        $this->setBrand($brand);
    }


    public function start()
    {
        $this->setIsStarted( true );
    }

    public function stop()
    {
        $this->setIsStarted( false );
    }

    public function accelerate(int $speed): self 
    {
        $this->setSpeed( $this->getSpeed() + $speed);
        return $this;
    }

    public function decelerate(int $speed): self 
    {
        $this->setSpeed( $this->getSpeed() - $speed);
        return $this;
    }



    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    private function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of isStarted
     */ 
    public function getIsStarted()
    {
        return $this->isStarted;
    }

    /**
     * Set the value of isStarted
     *
     * @return  self
     */ 
    public function setIsStarted($isStarted)
    {
        $this->isStarted = $isStarted;

        return $this;
    }

    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */ 
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */ 
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */ 
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
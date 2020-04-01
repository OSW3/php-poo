<?php

class Voiture
{
    /**
     * Vehicule brand
     *
     * @var string
     */
    private $brand;

    /**
     * Vehicule model
     *
     * @var string
     */
    private $model;

    /**
     * Vehicule color
     *
     * @var string
     */
    private $color;

    /**
     * Cruise speed
     *
     * @var integer
     */
    private $speed = 0;

    /**
     * Maximum speed
     *
     * @var integer
     */
    private $maxSpeed = 0;

    /**
     * Vehicule status
     *
     * @var boolean
     */
    private $isStarted = false;

    /**
     * Driver object
     *
     * @var Personne
     */
    private $driver;

    /**
     * Vehicule direction
     *
     * @var string
     * @default stright
     * @values straight | right | left
     */
    private $direction = "straight";


    // Methods
    // --

    public function __construct(string $brand, string $model, string $color)
    {
        $this->setBrand($brand);
        $this->setModel($model);
        $this->setColor($color);
    }

    public function start()
    {
        if ($this->getDriver() && !$this->getIsStarted())
        {
            $this->setIsStarted( true );
        }
    }

    public function stop()
    {
        if ($this->getSpeed() == 0)
        {
            $this->setIsStarted( false );
        }
    }

    public function accelerate(int $speed): self
    {
        if ($this->getIsStarted())
        {
            $this->setSpeed( $this->getSpeed() + $speed );
        }

        return $this;
    }

    public function decelerate(int $speed): self
    {
        $this->setSpeed( $this->getSpeed() - $speed );

        return $this;
    }

    public function turn(string $direction): self
    {
        if ($this->getSpeed() <= 30)
        {
            $this->setDirection( $direction );
        }        
        return $this;
    }


    // Getter / Setter
    // --

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
    private function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of model
     */ 
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */ 
    private function setModel(string $model): self
    {
        $this->model = $model;

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
    private function setSpeed(int $speed): self
    {
        $this->speed = $speed;

        if ($this->speed < 0)
        {
            $this->speed = 0;
        }

        if ($this->getMaxSpeed() < $this->speed)
        {
            $this->setMaxSpeed( $this->speed );
        }
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
    private function setMaxSpeed(int $maxSpeed): self
    {
        $this->maxSpeed = $maxSpeed;

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
    private function setIsStarted(bool $isStarted): self
    {
        $this->isStarted = $isStarted;

        return $this;
    }

    /**
     * Get the value of driver
     */ 
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * Set the value of driver
     *
     * @return  self
     */ 
    public function setDriver(?Personne $driver): self
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    private function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of direction
     */ 
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set the value of direction
     *
     * @return  self
     */ 
    public function setDirection(string $direction): self
    {
        $this->direction = $direction;

        return $this;
    }
}
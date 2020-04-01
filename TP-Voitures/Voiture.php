<?php

class Voiture
{
    private $brand;
    private $model;
    private $color;
    private $speed;
    private $maxSpeed;
    private $isStarted;
    private $driver;

    public function __construct(string $brand, string $model, string $color)
    {
        $this->setBrand($brand);
        $this->setModel($model);
        $this->setColor($color);
    }

    public function start()
    {
        # code...
    }

    public function stop()
    {
        # code...
    }

    public function accelerate()
    {
        # code...
    }

    public function decelerate()
    {
        # code...
    }

    public function turn()
    {
        # code...
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
    private function setModel($model)
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
    private function setSpeed($speed)
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
    private function setMaxSpeed($maxSpeed)
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
    private function setIsStarted($isStarted)
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
    public function setDriver($driver)
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
    private function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
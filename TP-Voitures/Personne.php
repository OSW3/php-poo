<?php

class Personne
{
    /**
     * The firstname
     *
     * @var string
     */
    private $firstname;

    /**
     * The lastname
     *
     * @var string
     */
    private $lastname;

    /**
     * The birthday
     *
     * @var Datetime
     */
    private $birthday;

    public function __construct(string $firstname, string $lastname, DateTime $birthday)
    {
        $this->setFirstname( $firstname );
        $this->setLastname( $lastname );
        $this->setBirthday( $birthday );
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of birthday
     */ 
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set the value of birthday
     *
     * @return  self
     */ 
    public function setBirthday(DateTime $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }
}
<?php 

class Personnage
{
    // constants definition
    // --

    /**
     * Niveau novice
     * @param int
     */
    const NOVICE = 1; 

    /**
     * Niveau Medium
     * @param int
     */   
    const MEDIUM = 2;  

    /**
     * Niveau Expert
     * @param int
     */  
    const EXPERT = 3;  
    
    
    // properties definition
    // --

    /**
     * Character name
     *
     * @var string
     */
    private $name;

    /**
     * Health Point
     *
     * @var integer
     */
    private $hp = 100;

    /**
     * Experience
     *
     * @var int
     */
    private $xp;


    // Methods
    // --

    public function __construct()
    {
    }

    public function sayHello()
    {
    }

    public function attack()
    {
    }

    public function superAttack()
    {
    }

    public function secretAttack()
    {
    }

    public function care()
    {
    }

    public function levelUp()
    {
    }


    /**
     * Get character name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set character name
     *
     * @param  string  $name  Character name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get health Point
     *
     * @return  integer
     */ 
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set health Point
     *
     * @param  integer  $hp  Health Point
     *
     * @return  self
     */ 
    public function setHp($hp)
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get experience
     *
     * @return  int
     */ 
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * Set experience
     *
     * @param  int  $xp  Experience
     *
     * @return  self
     */ 
    public function setXp(int $xp)
    {
        $this->xp = $xp;

        return $this;
    }
}
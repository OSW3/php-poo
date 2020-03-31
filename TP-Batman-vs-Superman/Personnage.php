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

    public function __construct(string $name, int $xp)
    {
        // Definir les propriétés
        // $this->setName($name);
        // $this->setXp($xp);

        // Définir les propriétés en méthodes chainées
        $this
            ->setName($name)
            ->setXp($xp)
        ;
    }

    /**
     * Say hello to the opponent
     *
     * @param Personnage $opponent
     * @return string
     */
    public function sayHello(Personnage $opponent): string
    {
        return $this->name . " salue " . $opponent->name;
    }

    /**
     * Attack an opponent
     *
     * @param Personnage $opponent
     * @param integer $coef
     * @return self
     */
    public function attack(Personnage $opponent, int $coef=1): self
    {
        switch ($this->xp)
        {
            case self::NOVICE: // 1
                $opponent->setHp( $opponent->getHp() - (10*$coef) );
                break;

            case self::MEDIUM: // 2
                $opponent->setHp( $opponent->getHp() - (20*$coef) );
                break;

            case self::EXPERT: // 3
                $opponent->setHp( $opponent->getHp() - (30*$coef) );
                break;
        }

        $this->levelUp($opponent);

        return $this;
    }

    /**
     * Super attack = Attack x 2
     *
     * @param Personnage $opponent
     * @return self
     */
    public function superAttack(Personnage $opponent): self
    {
        $this->attack($opponent, 2);

        return $this;
    }

    /**
     * Set oppenent HP to 0 if oppenent HP less than 50
     *
     * @param Personnage $opponent
     * @return self
     */
    public function secretAttack(Personnage $opponent): self
    {
        if ($opponent->hp < 50)
        {
            $opponent->setHp(0);
        }

        $this->levelUp($opponent);

        return $this;
    }

    /**
     * Add 10 Health point to the character
     *
     * @return self
     */
    public function care(): self
    {
        $this->hp += 10;

        return $this;
    }

    private function levelUp(Personnage $opponent): self
    {
        if ($opponent->getHp() === 0)
        {
            switch ($this->getXp())
            {
                case self::NOVICE:
                    $this->setXp( self::MEDIUM );
                break;

                case self::MEDIUM:
                    $this->setXp( self::EXPERT );
                break;

                case self::EXPERT:
                    // Do nothing
                    // Already the Boss
                break;

                default:
                    $this->setXp( self::NOVICE );
            }
        }

        return $this;
    }


    /**
     * Health point never less than 0
     *
     * @param Personnage $entity
     * @return self
     */
    private function unsignedHp(Personnage $entity): self
    {
        if ($entity->hp < 0)
        {
            $entity->hp = 0;
        }

        return $this;
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
    private function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get health Point
     *
     * @return  integer
     */ 
    public function getHp(): int
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

        $this->unsignedHp( $this );

        return $this;
    }

    /**
     * Get experience
     *
     * @return  int
     */ 
    public function getXp(): int
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
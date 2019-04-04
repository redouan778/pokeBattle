<?php
class Pokemon
{
    protected $energyType;
    protected $hitPoints;
    protected $health;
    protected $attacks;
    protected $weakness;
    protected $resistance;
    protected $name;

    public function __construct($name, $energyType, $health, $hitPoints)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->health = $health;
        $this->hitpoints = $hitPoints;
        $this->attacks = [];
    }

    public function getName()
    {
      return $this->name;
    }

    public function getHealth()
    {
      return $this->health;
    }

    public function getHitPoints()
    {
      return $this->hitPoints;
    }

    function DoAttack($pokemon, $pokemon2, $target)
    {
        echo $this->name . ' Will attack ' . $target->name . ' Using ' . $this->attacks[0]->getName();
        echo '<br>';
        if ($pokemon->energyType == $pokemon2->Weakness->energyType) {
            $pokemon2->health = $pokemon2->health - ($pokemon->attacks[0]->attackPoints * $pokemon2->weakness->multiplier);
        } else {
            $pokemon2->health = $pokemon2->health - $pokemon->attacks[0]->attackPoints;
        }

        if ($pokemon2->health < 1) {
            echo $pokemon2->name . " Has Died ";
        } else {
            echo $pokemon2->name . " Now Has " . $pokemon2->health . " HP Left";
        }
    }
}

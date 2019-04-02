<?php

class Weakness
{
    public $energyType;
    public $multiplier;

    public function __construct($energyType, $multiplier)
    {
        $this->energyType = $energyType;
        $this->multiplier = $multiplier;
    }

    public function getEnergyType(){
      return $this->energyType;
    }

    public function setEnergyType(){
      $this->energyType = $energyType;
    }
    /////////////
    public function getMultiplier(){
      return $this->name;
    }

    public function setMultiplier(){
      $this->multiplier = $multiplier;
    }
}

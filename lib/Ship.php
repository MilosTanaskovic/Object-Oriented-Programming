<?php

class Ship{
    
    public $name;
    public $weaponPower = 0;
    public $jediFactor = 0;
    public $strenght = 0;

    // Method 
    public function sayHello(){
        echo 'Hello';
    }
    
    public function getName(){

        return $this->name;
    }

    public function getNameAndSpecs($useShortFormat = false){

        if($useShortFormat){
            return printf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strenght
            );
        }else{
            return printf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strenght
            );
        }
        
    }

    // Objects Interact
    public function doesGivenShipHaveMoreStrength($givenShip) {

        // todo...
        return $givenShip->strenght > $this->strenght;
    }
}
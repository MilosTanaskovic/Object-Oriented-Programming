<?php

class Ship{
    
    private $id;
    private $name;
    private $weaponPower = 0;
    private $jediFactor = 0;
    private $strenght = 0;
    private $underRepair;

    public function __construct($name){

        $this->name = $name;
        $this->underRepair = mt_rand(1, 100) < 30;
    }

    public function isFunctional(){
        return !$this->underRepair;
    }

    // Method 
    public function sayHello(){
        echo 'Hello';
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

    // setter and getter
    public function setStrenght($strenght){
        
        if(!is_numeric($strenght)){
            throw new Exception('Invalid pass strenght'.$strenght);
        }
        $this->strenght = $strenght;
    }
    public function getStrenght(){
        return $this->strenght;
    }

    public function getName(){

        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function getWeaponPower(){
        return $this->weaponPower;
    }
    public function setWeaponPower($weaponPower){

        if(!is_numeric($weaponPower)){
            throw new Exception('Invalid pass weaponPower'.$weaponPower);
        }
        $this->weaponPower = $weaponPower;
    }

    public function getJediFactor(){
        return $this->jediFactor;
    }
    public function setJediFactor($jediFactor){

        if(!is_numeric($jediFactor)){
            throw new Exception('Invalid pass JediFactor'.$jediFactor);
        }
        $this->jediFactor = $jediFactor;
    }

    /**
     * @return integer
     */
    public function getId(){
        return $this->id;
    }
    /**
     * @param integer $id
     */
    public function setId($id){
        $this->id = $id;
    }

}
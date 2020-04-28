<?php

class Ship extends AbstractShip{
    
    
    private $underRepair;

    public function __construct($name){
        parent::__construct($name);

        $this->underRepair = mt_rand(1, 100) < 30;
    }

    public function isFunctional(){
        return !$this->underRepair;
    }

    

    public function setJediFactor($jediFactor){

        if(!is_numeric($jediFactor)){
            throw new Exception('Invalid pass JediFactor'.$jediFactor);
        }
        $this->jediFactor = $jediFactor;
    }
    public function getType(){
        
        return 'Empire';
    }
}
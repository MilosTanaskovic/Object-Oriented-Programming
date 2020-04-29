<?php 

class RebelShip extends AbstractShip{

    public function getFavoritedJedi(){

        $coolJedis = array('Yoda', 'Ben');
        $key = array_rand($coolJedis);

        return $coolJedis[$key];
    }

    public function getType(){

        return 'Rebel';
    }
    public function getJediFactor(){
        return $this->jediFactor;
    }

    public function isFunctional(){
        return true;
    }

    public function getNameAndSpecs($useShortFormat = false){

        $val = parent::getNameAndSpecs($useShortFormat);
        $val .= ' (Jedi)';

        return $val;
        
    }

}
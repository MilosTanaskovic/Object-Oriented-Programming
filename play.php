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

    public function getNameAndSpecs($useShortFormat){

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
}

// Multiple Objects
 function printShipSummary($someShip){

    echo 'Ship name: ' .$someShip->name;
    echo '<hr/>';
    $someShip->sayHello();
    echo '<hr/>';
    echo $someShip->getName();
    echo '<hr/>';
    var_dump($someShip->weaponPower);
    echo '<hr/>';
    $someShip->getNameAndSpecs(false);
    echo '<hr/>';
    $someShip->getNameAndSpecs(true);
}


$myShip = new Ship(); 
$myShip->name = 'Jadi Starship';
$myShip->weaponPower = 10;

$otherShip = new Ship();
$otherShip->name = 'Something else';
$otherShip->weaponPower = 5;
$otherShip->strenght = 50;

printShipSummary($myShip);
echo '<hr/>';
printShipSummary($otherShip);


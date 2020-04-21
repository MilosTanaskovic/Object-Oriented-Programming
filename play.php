<?php 

require_once __DIR__ .'/lib/Ship.php';

/**
 * @param Ship $someShip
 */

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
$myShip->name = 'Jadi Starship ';
$myShip->weaponPower = 10;
$myShip->strenght = 100;

$otherShip = new Ship();
$otherShip->name = 'John ';
$otherShip->weaponPower = 5;
$otherShip->strenght = 50;

printShipSummary($myShip);
echo '<hr/>';
printShipSummary($otherShip);
echo '<hr/>';

if ($myShip->doesGivenShipHaveMoreStrength($otherShip)){
    echo $otherShip->name. 'has more strenght';
}else {
    echo $myShip->name. 'has more strenght';
}

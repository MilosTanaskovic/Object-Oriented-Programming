<?php

class ShipLoader{

 public function getShips()
{
    $ships = array();
    $ship = new Ship('Jedi Starfighter');
    //$ship->setName('Jedi Starfighter');
    $ship->setWeaponPower(5);
    $ship->setJediFactor(15);
    $ship->setStrenght(30);
    $ships['starfighter'] = $ship;

    $ship2 = new Ship('CloakShape Fighter');
    $ship2->setWeaponPower(2);
    $ship2->setJediFactor(2);
    $ship2->setStrenght(70);
    $ships['cloakshape_fighter'] = $ship2;

    $ship3 = new Ship('Super Star Destroyer');
    $ship3->setWeaponPower(70);
    $ship3->setJediFactor(0);
    $ship3->setStrenght(500);
    $ships['super_star_destroyer'] = $ship3;

    $ship4 = new Ship('RZ-1 A-wing interceptor');
    $ship4->setWeaponPower(4);
    $ship4->setJediFactor(4);
    $ship4->setStrenght(50);
    $ships['rz1_a_wing_interceptor'] = $ship4;

    return $ships;

   
}
}
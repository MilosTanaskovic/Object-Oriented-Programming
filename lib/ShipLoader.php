<?php

class ShipLoader{

 public function getShips()
{

    $shipsData = $this->queryForShips();


    $ships = array();
    foreach ($shipsData as $shipData) {
        $ship = new Ship($shipData['name']);
        //var_dump($ship); die();
        $ship->setWeaponPower($shipData['weapon_power']);
        $ship->setJediFactor($shipData['jedi_factor']);
        $ship->setStrenght($shipData['strength']);
       // var_dump($ship); die();
        $ships[] = $ship;
    }

    return $ships;

}

private function queryForShips(){

    $pdo = new PDO('mysql:host=localhost;dbname=oo_battle','root' , '123456');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare('SELECT * FROM ship');
    $statement->execute();
    $shipsArray = $statement->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($shipsArray);die();

    return $shipsArray;
}
}
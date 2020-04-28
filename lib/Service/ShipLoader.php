<?php

class ShipLoader{

    private $pdo;
    

public function __construct($pdo){
   $this->pdo = $pdo;
}

 public function getShips()
{

    $shipsData = $this->queryForShips();


    $ships = array();
    foreach ($shipsData as $shipData) {
        $ship = new Ship($shipData['name']);
        //var_dump($ship); die();
        $ship->setId($shipData['id']);
        $ship->setWeaponPower($shipData['weapon_power']);
        $ship->setJediFactor($shipData['jedi_factor']);
        $ship->setStrenght($shipData['strength']);
       // var_dump($ship); die();
        $ships[] = $ship;
    }

    return $ships;

}

public function findOneById($id){

    $pdo = $this->getPDO();
    $statement = $pdo->prepare('SELECT * FROM ship WHERE id = :id');
    $statement->execute(array('id' => $id));
    $shipArray = $statement->fetch(PDO::FETCH_ASSOC);
    var_dump($shipArray);die();
}

private function createShipFromData(array $shipData){

    if($shipData['team'] == 'rebel'){
        $ship = new RebelShip($shipData['name']);
    }else {
        $ship = new Ship($shipData['name']);
    }

    $ship->setId($shipData['id']);
    $ship->setWeaponPower($shipData['weapon_power']);
    $ship->setJediFactor($shipData['jedi_factor']);
    $ship->setStrenght($shipData['strength']);

    return $ship;
}

private function queryForShips(){

    $pdo = $this->getPDO();
    $statement = $pdo->prepare('SELECT * FROM ship');
    $statement->execute();
    $shipsArray = $statement->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($shipsArray);die();

    return $shipsArray;
}

private function getPDO(){
    
    return $this->pdo;
}
}
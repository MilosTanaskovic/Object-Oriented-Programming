<?php

class ShipLoader{

    private $pdo;

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

private function queryForShips(){

    $pdo = $this->getPDO();
    $statement = $pdo->prepare('SELECT * FROM ship');
    $statement->execute();
    $shipsArray = $statement->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($shipsArray);die();

    return $shipsArray;
}

private function getPDO(){

    if($this->pdo === null){
        $pdo = new PDO('mysql:host=localhost;dbname=oo_battle','root' , '123456');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->pdo = $pdo;
    }
    
    return $this->pdo;
}
}
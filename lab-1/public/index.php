<?php

require '../autoload.php';
require '../error_catcher.php';


use Animals\Birds\BlueJay;
use Enclosures\Aquarium;
use Inventory\ZooInventory;
use Animals\Fish;
use Employees\Zookeeper;
use Employees\Veterinarian;
use Food\FishFood;
use Food\Meat;
use Enclosures\SmallEnclosure;
use Enclosures\LargeEnclosure;
use Constants\Gender as GENDER;


$zooInventory = new ZooInventory();


$smallEnclosure = new SmallEnclosure();
$largeEnclosure = new LargeEnclosure();
$aquarium = new Aquarium();

$fishFood = new FishFood(2);
$meat = new Meat(5);

$fish = new Fish\BlueTang("Nemo", 3, "Male", 0.5, 10, enclosure: $aquarium, canSwimFast: false);
$bird = new BlueJay(name: 'Kolya', age: 10, gender: GENDER::FEMALE, habitat: 'USA', weight: 10.5, birdType: 'Doves', enclosure: $largeEnclosure);


$zookeeper = new Zookeeper("Sarah", 30, "Female", 5,animalsUnderControl: [$bird, $fish]);
$veterinarian = new Veterinarian("Sarah", 40, gender: GENDER::FEMALE);


$zooInventory->addAnimal($fish);
$zooInventory->addAnimal($bird);
$zooInventory->addEmployee($zookeeper);
$zooInventory->addEmployee($veterinarian);

$zooInventory->showAnimals();
echo '</br>';
$zooInventory->showEmployees();

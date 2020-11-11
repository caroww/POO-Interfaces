<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Skateboard.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


//Vehicules
$cars = new Car ('blue',5,'diesel',true);
$bike = new Bicycle ('red',1);
$skateboard = new Skateboard ('Yellow', 0);

//Implémentation
echo "Feux voiture : ";
echo $cars->switchOn();

echo "<HR>";
echo "Dynamo vitesse 5km/h : ";
$bike->setCurrentSpeed(5);
echo $bike->switchOn();
echo "<br/>";
var_dump($bike);

echo "<HR>";
echo "Dynamo vitesse 10km/h : ";

$bike->setCurrentSpeed(10);
echo $bike->switchOn();
echo "<br/>";
var_dump($bike);
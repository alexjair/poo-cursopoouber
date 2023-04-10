<?php

require_once("Car.php");
require_once("UberX.php");
require_once("UberVan.php");
require_once("Account.php");

echo"<br>";
echo"Car <br>";
echo"<br>";

$account = new Account("Conductor Alexander Jair R.", "DOC0033446");
$car = new Car("LIC0025SDF", $account );
$car->met_verDatosCar();

echo"<br>";
echo"UberX <br>";
echo"<br>";

$uberX = new UberX("LIC004D4", new Account("Conductor Alex Jair","DOC00345"),"MARCA: CHELOET","MODELO: CAMIONETA");
$uberX->met_verDatosCar();

echo"<br>";
echo"UberVan <br>";
echo"<br>";

$uberVan = new UberVan("LIC00558", new Account("Conductor Jorge Cotrado","DOC04872"),"MARCA: PATITO","MODELO: MOTO");
$uberVan->setPassenger(6);
$uberVan->met_verDatosCar();

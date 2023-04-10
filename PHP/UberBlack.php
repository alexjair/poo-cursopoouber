<?php 

require_once("Car.php");

class UberBlack extends Car {
    public $typeCarAccepted; //del hijo
    public $seatsMaterial; //del hijo

    public function __construct(
        $license, //del padre
        $driver, //del padre
        $typeCarAccepted, //del hijo
        $seatsMaterial //del hijo
    ){
        parent::__construct($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }
}
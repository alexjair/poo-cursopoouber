<?php 

require_once("Car.php");

class UberVan extends Car {
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

    
    //POLIMORFISMO

    //Cambiando la función padre.
    public function setPassenger($passenger){
        if($passenger == 6){
            $this->passenger = $passenger;
        }else{
            echo "Necesitas asignar 6 pasajeros. <br>";
        }
    }
}
<?php

class Car{
    
    //Propiedades
    public $id;
    public $licence;
    public $driver;
    protected $passenger; //Variable encapsulada (Asig. protected)
    
    public function __construct(
        $licence,
        $driver
    ){
        $this->license = $licence;
        $this->driver = $driver;
    }

    public function met_verDatosCar(){
        echo "License: {$this->license} <br>";
        echo "driver (Conductor): {$this->driver->name} <br>";
        echo "driver (Documento): {$this->driver->document} <br>";
        echo "passenger: {$this->passenger} <br>";
    }

    //FUNCIONES DE MODIFICAR DATOS ENCAPSULADOS
    public function getPassenger($passenger){
        return $this->$passenger;
    }

    public function setPassenger($passenger){
        if($passenger == 4){
            $this->passenger = $passenger;
        }else{
            echo "Necesitas asignar 4 pasajeros. <br>";
        }
    }
}

<?php 

require_once("Car.php");

class UberX extends Car {
    public $brand; //del hijo
    public $model; //del hijo

    public function __construct(
        $license, //del padre
        $driver, //del padre
        $brand, //del hijo
        $model //del hijo
    ){
        parent::__construct($license, $driver);
        $this->brand = $brand;
        $this->model = $model;
    }
}
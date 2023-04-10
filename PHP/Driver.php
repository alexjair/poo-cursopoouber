<?php 

require_once("Account.php");

class Driver extends Car {
    //Variables de la Clase hijo
    //..

    //Iniciar la Clase y Variables
    public function __construct(
        //Variables heredadas
        $name,
        $document
        //Variables del hijo
        //..
    ){
        //Declaración Variables heredadas
        parent::__construct(
            $name,
            $document
        );
        //Declaración Variables del hijo
        //..
    }
}
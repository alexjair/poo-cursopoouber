<?php 

require_once("Account.php");

class User extends Car {
    //Variables de la Clase hijo
    //..

    //Iniciar la Clase y Variables
    public function __construct(
        //Variables heredadas
        $name,
        $document,
        $email,
        $password
        //Variables del hijo
        //..
    ){
        //Declaración Variables heredadas
        parent::__construct(
            $name,
            $document,
            $email,
            $password
        );
        //Declaración Variables del hijo
        //..
    }

    public function metMostrarDatos() {
        echo "Name: {$this->name} <br>";
        echo "Document: {$this->document} <br>";
        echo "Email: {$this->email} <br>";
        echo "Password (Documento): {$this->password} <br>";
    }
}
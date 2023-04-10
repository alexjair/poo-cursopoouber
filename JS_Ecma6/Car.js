class Car{
    constructor(
            license, 
            driver
        
        ){

        this.id;
        this.license = license;
        this.driver = driver;
        this.passenger;
    }
}

//metodos
Car.prototype.print = function() {
    
    console.log(this.id);
    console.log(this.license);
    console.log(this.driver["name"]);
    console.log(this.driver["document"]);
    console.log(this.passenger);
    //mostrar como tabla
    console.table(this.driver);
}
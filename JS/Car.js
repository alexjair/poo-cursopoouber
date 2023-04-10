function Car(license, driver){
    
    this.id;
    this.license = license;
    this.driver = driver;
    this.passenger;

}

//Construcctor
Car.prototype.print = function() {
    
    console.log(this.id);
    console.log(this.license);
    console.log(this.driver["name"]);
    console.log(this.driver["document"]);
    console.log(this.passenger);
}
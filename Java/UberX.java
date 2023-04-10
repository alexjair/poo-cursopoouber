//Clase hija
class UberX extends Car {
    String brand;
    String model;
    
    //Construcctor
    public UberX(
            String licence,
            Account driver,
            String brand,
            String model
        ){
            super(licence, driver);
            this.brand = brand;
            this.model = model;
        }
}

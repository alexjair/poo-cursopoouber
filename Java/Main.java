class Main {
    public static void main(String[] args) {
        //System.out.println("Hola Mundo");
        //Car car = new Car("AMQ123", new Account("Andres Herrera", "AND123"));
        //car.passegenger = 4;
        //car.printDataCar();

        //Car car2 = new Car("QWE567", new Account("Andrea Herrera", "ANDA876"));
        //car2.passegenger = 3;
        //car2.printDataCar();

		UberX uberx = new UberX("License AMQ123", new Account("Andres Herrera", "AND123"),"Marca: Cherolet","Model: KIA443");
		//accediendo a variables encapsuladas
		uberx.setPassenger(4);
        uberx.printDataCar();


		UberVan ubervan = new UberVan("License ubervan 8784", new Account("Andres XX Herrera", "DOC00123"));
		ubervan.setPassenger(6);
		ubervan.printDataCar();

    }
}
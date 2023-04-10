import java.util.ArrayList;
import java.util.Map;

//Clase hija
class UberVan extends Car {
    Map< String, Map< String, Integer>> typeCarAccepted;
    ArrayList<String> seatsMaterial;
    Integer passenger;

    //Construcctor
    public UberVan(
            //Var padre
            String licence,
            Account driver
            //Var hijo
            //Map< String, Map< String, Integer>> typeCarAccepted,
            //ArrayList<String> seatsMaterial
    ){
        super(licence, driver);
        //this.typeCarAccepted = typeCarAccepted;
        //this.seatsMaterial= seatsMaterial;
    }

    //POLIMOSFISMO
    @Override
    public void setPassenger(Integer passenger) {
        if(passenger == 6){
            this.passenger = passenger;
        }else{
            System.out.println("Necesitas asignar 6 Pasajeros.");
        }
        //super.setPassenger(passenger);
    }

}

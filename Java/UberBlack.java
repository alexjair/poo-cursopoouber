import java.util.ArrayList;
import java.util.Map;

//Clase hija
class UberBlack extends Car {
    Map< String, Map< String, Integer>> typeCarAccepted;
    ArrayList<String> seatsMaterial;

    //Construcctor
    public UberBlack(
            String licence,
            Account driver,
            Map< String, Map< String, Integer>> typeCarAccepted,
            ArrayList<String> seatsMaterial
    ){
        super(licence, driver);
        this.typeCarAccepted = typeCarAccepted;
        this.seatsMaterial= seatsMaterial;
    }
}

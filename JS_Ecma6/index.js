
console.log("**EJEMPLO - OBEJO");
var car = new Car("ADE34", new Account("Andres Herrera","Este es el documento"));

car.passenger = 4;
car.id = 78458;
car.print();

console.log("**EJEMPLO - CLASES");
var cuenta = new Account("Alexander Jair", "Nevo doc del dia");
cuenta.passenger = '345345345 34543';
cuenta.id = 99944;
cuenta.print();

console.log("**EJEMPLO - HERENCIA");
console.log("----------------------");
var vCuenta = new Account("Jorde Contreras", "DOC00SDFEW");
var vUberX = new UberX("LIC00534X", vCuenta, "TIPO00KIA", "MODELO00CAMIUON");
vUberX.id = 8877;
vUberX.passenger = 4;
vUberX.print();


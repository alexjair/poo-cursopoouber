#importar el Obj
from car import Car
from account import Account

if __name__ == "__main__": 
    
    car = Car("LICR456",Account("Alexander Jair","DOC4456"))
    print(vars(car))
    print(vars(car.driver))
    
    #print("Hola mundo")
    
    #car = Car()
    #car.id = 1
    #car.licence = "AMEDER43"
    #car.drive = "Andres Herrera"    
    #
    #car2 = Car()
    #car2.id = 2
    #car2.licence = "JAEDER43"
    #car2.drive = "Alexander Jair"    

#imprimir los resultados en consola.
#print(vars(car))
#print(vars(car2))


from car import Car

class UberBlack(Car):
        typeCarAccepted = []
        seatsMaterial = []
        
        def __int__(
            self,
            license,
            driver,
            typeCarAccepted,
            seatsMaterial
        ):
            super.__init__(license, driver, typeCarAccepted, seatsMaterial)
            self.typeCarAccepted = typeCarAccepted
            self.seatsMaterial = seatsMaterial
            
from car import Car

class UberPool(Car):
        brand = str
        model = str
        
        def __int__(
            self,
            license,
            driver,
            brand,
            model
        ):
            super.__init__(license, driver, brand, model)
            self.brand = brand
            self.model = model
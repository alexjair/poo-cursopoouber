from account import Account

class User(Account):
        #Variables del hijo
        id = str
        name = str
        email = str
        document = str
        password = str
        
        def __int__(
            self,
            id,
            name,
            email,
            document,
            password
        ):
            super.__init__(
                id, 
                name, 
                email,
                document ,
                password
            )
            
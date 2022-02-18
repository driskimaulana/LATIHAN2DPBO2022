class Product:
    # attribute class
    __idProduct = ""
    __price = 0

    # constructors
    def __init__(self, idProduct="", price=0):
        self.__idProduct = idProduct
        self.__price = price

    def setIdProduct(self, idProduct):
        self.__idProduct = idProduct

    def getIdProduct(self):
        return self.__idProduct

    def setPrice(self, price):
        self.__price = price

    def getPrice(self):
        return self.__price

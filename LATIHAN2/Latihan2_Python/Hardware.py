from statistics import mode
from Product import Product


class Hardware(Product):
    # class attribute
    __model = ""
    __brand = ""

    # constructors
    def __init__(self, model, brand):
        self.__model = model
        self.__brand = brand

    # getter and setter
    def setModel(self, model):
        self.__model = model

    def getModel(self):
        return self.__model

    def setBrand(self, brand):
        self.__brand = brand

    def getBrand(self):
        return self.__brand

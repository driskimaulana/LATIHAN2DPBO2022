from Hardware import Hardware


class Memory(Hardware):
    # class attribute
    __frequency = 0
    __memorySize = 0
    __supportCuda = ""

    # constructors
    def __init__(self, frequency, memorySize, supportCuda):
        self.__frequency = frequency
        self.__memorySize = memorySize
        self.__supportCuda = supportCuda

    # getter and setter
    def setFrequency(self, frequency):
        self.__frequency = frequency

    def getFrequency(self):
        return self.__frequency

    def setMemorySize(self, memorySize):
        self.__memorySize = memorySize

    def getMemorySize(self):
        return self.__memorySize

    def setSupportCuda(self, supportCuda):
        self.__supportCuda = supportCuda

    def getSupportCuda(self):
        return self.__supportCuda

    # method for showing inside class
    def ShowClass(self):
        print("Id Product	 : " + self.getIdProduct())
        print("Price		 : " + str(self.getPrice()))
        print("Brand		 : " + self.getBrand())
        print("Model		 : " + self.getModel())
        print("Frequency Memory : " + str(self.getFrequency()))
        print("Memory Size	 : " + str(self.getMemorySize()))
        print("Support Cuda	 : " + self.getSupportCuda())

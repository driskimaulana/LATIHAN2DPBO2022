from pip import main


# import class
from Memory import Memory

# create new instance of Memory class
memo = Memory("5.0 Ghz", "32 GB", "RTX")

memo.setBrand("Samsung")
memo.setIdProduct("A199")
memo.setModel("B")
memo.setPrice(500000)

# show class
memo.ShowClass()

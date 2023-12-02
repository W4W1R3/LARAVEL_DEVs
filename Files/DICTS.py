fruit= {"apples":50,"orange":40,"banana":30,"pitch":100}
print(type(fruit))

print(fruit.keys()) 
print(fruit.values())
print(fruit.items())

fruit["mango"]=200
print(fruit)
fruit["apples"]=100
print(fruit)


fruit2 ={"avocado":60,"guava":90}
fruit.update(fruit2)
print(fruit)


fruit.pop("guava")
print(fruit)



s1={1,"keki","keki",3+5j}
print(s1)

s1.add("hello")
print(s1)
s1.add("hey")
print(s1)

s1.update([10,20,30])
print(s1)

s1.remove(20)
print(s1)
s1.remove("hello")
print(s1)

s2={11,2,6}
print(s1.union(s2))



#INTERSECTION
s4={1,2,3,4}
s5={3,4,5,6}
print(s4.intersection(s5))

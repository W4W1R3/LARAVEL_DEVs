l1=[1,3.14,"billie",3+5j]
print(l1)
print(l1[-1])
print(l1[0:3])


l1[0]=100
print(l1)

l1[0:2]={100,200.8}
print(l1)
l1.append("wawire")
print(l1)

l1.pop()
print(l1)
 

l2=[1,2,3,4,5]
l2.reverse()
print(l2)

l3=["ma","mo","mi","mu", "me"]
l3.sort()
print(l3)

l3.insert(1, "mh")
print(l3)
l3.sort()
print(l3)

print(l2+l3)
print(l2*3)




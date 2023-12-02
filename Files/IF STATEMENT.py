b=20
a=10

if a>b:
    print("a is greater b")

if b>a:
    print("b is greater than a")
print("@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@")


if a>b:
    print("a is greater b")
else:
    print("b is greater than a")
print("@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@")

a=10
b=20
c=30
if (a>b & a>c):
    print("a is greater than b & c")
elif(b>a & b>c):
    print("b is greater than a & c")
else:
    print("c is the greatest")
print("@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@")


# tuples
tup1=(1,2,3,4,5)
if 6 in tup1:
    print("6 is present ")
else:
    print("not present")
print("@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@")

#lists
l1=[1,2,3,4,5]
if l1[1] == 2:
    l1[1]=l1[1]+100
    print(l1[1])
else:
    print("not equal to 2")

l1=[1,2,3,4,5]
if l1[4] == 2:
    l1[4]=l1[4]+100
    print(l1[4])
else:
    l1[4]=l1[4]+500
    print(l1[4])

    #dicts

d1={'a':1, "b":2 ,"c":3}
if d1["b"]==2:
    d1["b"]=d1["b"]+ 100
    print(d1["b"])
    
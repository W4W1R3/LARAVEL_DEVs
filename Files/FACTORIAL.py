num = int(input("Enter the number: "))
factorial = 1

if num == 0:
    print("The factorial of Zero Is 1")
elif num<0:
    print("Sorry th e factorial of negative numbers does not exist")
else:
    for i in range(1,num+1):
        factorial= factorial*i
        print("The factorial of num", num,"is", factorial)


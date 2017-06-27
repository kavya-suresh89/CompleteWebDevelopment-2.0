#! /usr/bin/python

print 'Content-type: text/html'

print ''

def sayHello():
    print "Hello there, Bob"
    
sayHello()

def saySomething(something):
    print something
    
saySomething("Hi you")

def multiply(a, b):
    return a * b

c = multiply(3, 4)
print c

def highestCommonFactor(x, y):
    for i in range(1, x + 1):
        if x % i == 0 and y % i == 0:
            hcf = i
    return hcf


print highestCommonFactor(4, 6)

a = 4
b = 5

def addNumbers():
    x = 6
    return a + b + x

print addNumbers()
print x

#! /usr/bin/python

print 'Content-type: text/html'

print ''

name = "Bob"

if name == "Rob" or name == "Bob":
    print "Hello " + name
else:
    print "Sorry " + name + " , I don't know you !"
    
for num in range (2, 51):
    prime = True
    for i in range(2, num):
        if(num%i == 0):
            prime = False
    if prime: 
        print num
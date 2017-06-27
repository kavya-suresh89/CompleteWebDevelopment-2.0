#! /usr/bin/python

print 'Content-type: text/html'

print ''

for i in range(11):
    print i
    
for i in range (5, 21):
    print i
    
myFoodList = ["pizza", "chicken", "chocolate"]

for food in myFoodList:
    print "I like eating " + food + " . "
    
x = 0

while x <= 10:
    print x
    x += 1
    
ages = {"Bob" : 23, "Sam" : 45, "Kate" : 30, "Rob" : 50 }

for age in ages:
    print age + " is  " + str(ages[age]) 



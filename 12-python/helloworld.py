#! /usr/bin/python

print 'Content-type: text/html'

print ''

age = 35

print age

pi = 3.141

print pi

name = "bob"

print name

print "hello world"

number = "5"

print number * 3

print int(number) * pi

str = "My name is Bobby"

print str[0]

print str[0:5]

print str + name

myList = ["Rob", "Tom", "Bob", "Sam", 56, 7896, "Heloo"]

print myList

print myList[3]

print myList[3:7]

myTuple = (1, 2, 3, 4)

print myTuple

print myTuple[2]

myList[2] = 344363

print myList


dict = {}

dict["dad"] = "Rob"
dict["mom"] = "Krissy"
dict[1] = "Tom"
dict[2] = "Sam"

print dict
print dict.keys()
print dict.values()
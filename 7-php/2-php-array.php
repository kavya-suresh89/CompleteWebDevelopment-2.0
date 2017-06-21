<?php

$myArray = array("Lee", "Kris", "Tom", "Ralph");

$myArray[] ="Kate"; //add an item to the array list

print_r($myArray);

echo "<p>".$myArray[0]."</p><br>";

$anArr[0] = "pizza";

$anArr[1] = "bread";

$anArr[5] = "jam";

$anArr["MyFavFood"] ="ice-cream";

print_r($anArr);

echo "<br><br>";

$keyArr = array("France" => "French", "USA" => "English", "Germany" => "German");

//remove an item from the array

unset($keyArr["France"]);

print_r($keyArr);

echo "<br><br>";

echo sizeof($keyArr);

?>


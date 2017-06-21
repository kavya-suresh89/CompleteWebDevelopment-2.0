<?php

$i = 1;

while($i <= 10) {
    
    $x = $i * 5;
    echo $x."<br>";
    
    $i++;
    
}

echo "<br><br>";

$myArr = array("pizza", "soup", "apple", "bread", "eggs");

$i = 0;

while($i < sizeof($myArr)){
    
    echo $myArr[$i]."<br>";
    $i++;
}
    
?>


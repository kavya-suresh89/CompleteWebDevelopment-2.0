<?php

for($i = 0; $i <= 10; $i++) {
    
    echo $i."<br>";
    
}

echo "<p>The values of t are : </p>";

for($t = 30; $t >0; $t = $t-2) {
    
   echo $t."<br>";
}

echo "<br><br>";

$myFam = array("Lee", "Kris", "Tom", "Ralph");

for($i = 0; $i < sizeof($myFam); $i++) {
    
    echo $myFam[$i]."<br>";
}

//forEach loop

echo "<br><br> This is using the forEach loop<br>";

foreach($myFam as $key => $value) {
    
    echo "Array item : ".$key." is ".$value." Percy <br>";

}

?>


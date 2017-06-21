<?php

$user = "leela";

if($user == "eela") {
    
    echo "Hello ".$user;
    
}

else {
    
    echo "Who is this ?";
}

echo "<br><br>";

$age = 25;

if($age < 18 ) {
    
    echo "You are too young!";
    
}

else if ($age < 50 && $user == "leela") {
    
    echo "Hello ".$user." You are middle aged";
    
}

else {
    
    echo "You are too old";
    
}


?>


<?php

    if(is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)) {
        
        $i = 2;
        
        $isPrime = true;
        
        while ($i < $_GET['number']) {
            
            if($_GET['number'] % $i == 0){
                
                //the number is not prime
                
                $isPrime = false;
                
            }
            
            $i++;
            
        }
        
        if($isPrime) {
            
            echo "<p>".$_GET['number']." is a Prime number";
        }
        
        else { 
        
            echo "<p>".$_GET['number']." is not a Prime number";
                 
        }
        
    }

else if ($_GET) {
    
    echo "<p>Please enter a positive whole number</p>";
}
    
?>

<p>Please enter a whole number</p>

<form>

    <input name="number" type="text"/>
    
    <input type="submit" value="GO!"/>

</form>

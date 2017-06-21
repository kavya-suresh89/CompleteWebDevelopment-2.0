<?php 


    $link = mysqli_connect("shareddb1d.hosting.stackcp.net", "usersdb-32317089", "5x8XVsZMfDj7", "usersdb-32317089");

    if(mysqli_connect_error()){
        
        echo "The connection was not successful<br/>";
        
    }

    else{
        
        echo "The connection was successful<br/>";
        
    }
    // insert data into a table

    /*$query = "INSERT INTO `users` (`email`, `password`) values ('sample@sample.co.uk', 'blah234&bluh$')";*/

    //update a query
    
    $query = "UPDATE `users` SET email = 'robpercy@gmail.co.in' where id = 1 LIMIT 1";

     if(mysqli_query($link, $query)){
         
         echo "data updated successfully<br/>";
         
     }

    else{
        
        echo "The data could not be updated<br/>";
        
    }


   /* if($result){
        
       $row = mysqli_fetch_array($result);
        
        echo "Your email is : ".$row['email']." <br/> Your password is : ".$row['password'];
        
    }*/

?>
<?php 


    $link = mysqli_connect("shareddb1d.hosting.stackcp.net", "usersdb-32317089", "5x8XVsZMfDj7", "usersdb-32317089");

    if(mysqli_connect_error()){
        
        echo "The connection was not successful<br/>";
        
    }

    else{
        
        echo "The connection was successful<br/>";
        
    }

    $query = "SELECT * FROM users";

    $result = mysqli_query($link, $query);

    if($result){
        
       $row = mysqli_fetch_array($result);
        
        echo "Your email is : ".$row['email']." <br/> Your password is : ".$row['password'];
        
    }

?>
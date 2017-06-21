<?php 


    $link = mysqli_connect("shareddb1d.hosting.stackcp.net", "usersdb-32317089", "5x8XVsZMfDj7", "usersdb-32317089");

    if(mysqli_connect_error()){
        
        echo "The connection was not successful<br/>";
        
    }


    if(array_key_exists('name', $_POST) OR array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {
        
        
        if($_POST['name'] == ''){
            
            echo "<p>Name is required</p>";
            
        }
        
        else if($_POST['email'] == ''){
            
            echo "<p>Email address is required</p>";
            
        }
        else if($_POST['password'] == ''){
            
            echo "<p>Password is required</p>";
            
        }
        
        else {
            
            $query = "SELECT `id` from users WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
            
            $result = mysqli_query($link, $query);
            
            if(mysqli_num_rows($result) > 0) {
                
                echo "<p> This email address already exists</p>";
                
            }
            
            else {
                
                $query = "INSERT INTO `users` (`email`, `password`, `name`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."','".mysqli_real_escape_string($link, $_POST['password'])."','".mysqli_real_escape_string($link, $_POST['name'])."')";
                
                if (mysqli_query($link, $query)) {
                    
                    echo "<p> You have been signed up !</p>";
                    
                }
                
                else {
                    
                    echo "<p> The was a problem signing you up - please try again later</p>";
                    
                }
                
            }
        }
            
        
    }

    

?>

<form method="post">
    
    <input name="name" id="name" placeholder="Your Name" type="text">
    
    <br/>
    <br/>
    <br/>

    <input name="email" id="email" placeholder="Email address" type="email">
    
    <br/>
    <br/>
    <br/>
    
    <input name="password" id="password" type="password" placeholder="Password">
    
    <br/>
    <br/>
    <br/>
    
    <input type="submit" value="Sign Up">

</form>
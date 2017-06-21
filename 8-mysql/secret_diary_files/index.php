<?php

    session_start();

    $error = "";

    if(array_key_exists("logout", $_GET)) {
        
        unset($_SESSION);
        setcookie("id", "", time() - 60 * 60);
        $_COOKIE['id'] = "";
        
    } 

    else if((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])) {
        
        header("Location: loggedinpage.php");
        
    }

    if(array_key_exists("submit", $_POST)){
        
        include("connection.php");
        
        
        if(!$_POST['email']) {
            
            $error .= "An email address is required<br/>";
            
        }
        
        if(!$_POST['password']) {
            
            $error .= "A password is required</br>";
            
        }
        
        if($error != ""){
            
            $error = "<p>The were error(s) in your form : </p>".$error; 
            
        }
        
        else {
            
            
            if($_POST['signUp'] == '1') {
                
            
                $query = "SELECT id FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";

                $result = mysqli_query($link, $query);

                if(mysqli_num_rows($result) > 0){

                    $error = "That email address is taken.";

                }

                else {

                    $query = "INSERT INTO `users` (`email`, `password`) VALUES ( '".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";

                    if(!mysqli_query($link, $query)) {

                        $error = "<p>Could not sign up- please try again later</p>";

                    }

                    else {

                        $query = "UPDATE `users` SET password = '".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id = ".mysqli_insert_id($link)." LIMIT 1";

                        mysqli_query($link, $query);

                        $_SESSION['id'] = mysqli_insert_id($link);

                        if($_POST['stayLoggedIn'] == '1') {

                            setcookie("id", mysqli_insert_id($link), time() + 60 * 60 *10);
                        }

                        header("Location: loggedinpage.php");

                    }
                }
                
            }
            
            else {
                    
                    $query = "SELECT * FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
                
                    $result = mysqli_query($link, $query);
                
                    $row = mysqli_fetch_array($result);
                
                    if(isset($row)) {
                        
                        $hashedPassword = md5(md5($row['id']).$_POST['password']);
                        
                        if($hashedPassword == $row['password']) {
                            
                            $_SESSION['id'] = $row['id'];
                            
                            if($_POST['stayLoggedIn'] == '1') {

                            setcookie("id", mysqli_insert_id($link), time() + 60 * 60 *10);
                       
                            }

                            header("Location: loggedinpage.php");
                            
                            
                            
                        }
                        
                        else {
                            
                            $error = "<p>That email/password combination could not be found</p>";
                        }
                        
                    }
                
                    else {
                        
                        $error = "<p>That email/password combination could not be found</p>";
                        
                    }
                
                    
                }
        }
         
    }


?>


<?php include("header.php"); ?>
    
      <div class="container" id="homePageContainer">
          
          <h1>Secret Diary</h1>
          
          <p><strong>Store your thoughts permanently and securely.</strong></p>
          
          <div id="error"><?php if( $error != ""){
    
                echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
            }
                        
     ?></div>


            <form method="post" id = "signUpForm">
                
                <p>Interested? Sign Up Now!</p>
                
                <div class="form-group">

                    <input type="email" name="email" placeholder="Your email" class="form-control">
                    
                </div>
                
                <div class="form-group">

                    <input type="password" name="password" placeholder="Your password" class="form-control">
                    
                </div>   
                
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="stayLoggedIn" value=1 class="form-check-input">
                        Keep me signed in! 
                    </label>
                    
                </div>
                    
                 <div class="form-group">   

                    <input type="hidden" name="signUp" value="1">

                    <input type="submit" name="submit" value="Sign Up!" class="btn btn-success">
                    
                </div>
                
                <p><a href = "#" class="toggleForms">Log In</a></p>


            </form>


            <form method="post" id = "logInForm">
                
                <p>Log in using your email and password.</p>
                
                <div class="form-group">

                    <input type="email" name="email" placeholder="Your email" class="form-control">
                    
                </div>
                
                <div class="form-group">

                    <input type="password" name="password" placeholder="Your password" class="form-control">
                    
                </div>
                
                <div class="form-group">
                    
                    <label class="form-check-label">
                        <input type="checkbox" name="stayLoggedIn" value=1 class="form-check-input">Keep me logged in!
                    </label>
                    
                </div>
                    
                <div class="form-group">    

                    <input type="hidden" name="signUp" value="0">

                    <input type="submit" name="submit" value="Log in!" class="btn btn-success">
                    
                </div>
                
                <p><a href = "#" class="toggleForms">Sign Up</a></p>


            </form>

      </div>

   <?php include("footer.php"); ?>


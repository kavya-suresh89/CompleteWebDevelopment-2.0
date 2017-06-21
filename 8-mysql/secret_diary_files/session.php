<?php

    session_start();

    if($_SESSION['email']) {
        
        echo "You are logged in successfully!";
        
    }

    else {
        
        header("Location: index.php");+
            
    }

?>
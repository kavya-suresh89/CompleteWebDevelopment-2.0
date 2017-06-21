<?php

    $link = mysqli_connect("shareddb1d.hosting.stackcp.net", "diarysecretdb-32318a80", "ARFf/ZuWDldq", "diarysecretdb-32318a80");

        if(mysqli_connect_error()) {
            
            //end db connectiom
            
            die("Database connection Error");
        }

?>
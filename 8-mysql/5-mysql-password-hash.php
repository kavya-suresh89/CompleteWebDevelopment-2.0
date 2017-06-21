<?php

    //level 3 encryption

    $salt = "iseflfrthsadsf45gtfthg325";
    
    //echo md5($salt."password");

    //level 4 encryption

    $row['id'] = 73;
    
    //level 2 encryption
    echo md5(md5($row['id'])."password");
   

?>


//alternative method 

<?php
// Generate a hash of the password "mypassword"
$hash = password_hash("mypassword", PASSWORD_DEFAULT);
 
// Echoing it out, so we can see it:
echo $hash;
 
// Some line breaks for a cleaner output:
echo "<br><br>";
 
// Using password_verify() to check if "mypassword" matches the hash.
// Try changing "mypassword" below to something else and then refresh the page.
if (password_verify('mypassword', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
?>
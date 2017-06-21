<?php


   // setcookie("customerId", "1234", time() + 60 * 60 * 24);

    //to unset the cookie - in the next load of the page

    setcookie("customerId", "", time() - 60 * 60);

    echo $_COOKIE["customerId"];

?>
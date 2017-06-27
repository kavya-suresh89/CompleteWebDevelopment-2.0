<?php


    require "twitteroauth/autoload.php";

    use Abraham\TwitterOAuth\TwitterOAuth;
    
    $consumerkey = "gWauX88kbcwTjAvkKoGb2qNDh";

    $consumersecret = "xBEVqcUX35Fs65iW8jaY4lqWWdF1lDNSrOBgNUWzfYxDNMxVvZ";

    $accesstoken = "877681166802862080-MVXsJ6HAiJCaJDndBZ8QntJp214nsyO";

    $accesstokensecret = "2u0mEzpPhO01rJ2EYff91DRWa0wL7GjfqEIlvrH4IkZAm";
    
    $connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
    $content = $connection->get("account/verify_credentials");

    $statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);

    foreach($statuses as $tweet) {
        
        if($tweet->favorite_count > 5) {
            
            /*echo $tweet->favorite_count;
            echo " "; 
            echo $tweet->text;
            echo "</br>";*/
            
             $status = $connection->get("statuses/oembed", ["id" => $tweet->id]);
            
            echo $status->html;
        }
        
        
    }


?>
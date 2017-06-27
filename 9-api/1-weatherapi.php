<?php

    $weatherReport = "";

    $error = "";

    $city = "";

    if($_GET['city']){
        
       $urlContents =  file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$_GET['city'].",&appid=0f8c0d9a8a9cf11734fc0bd2fcd85bb5");
        
        $weatherArray = json_decode($urlContents, true);
        
        if($weatherArray['cod'] == 200){
        
            $weather = "The weather in ".$_GET['city']." is currently '".$weatherArray['weather'][0]['description']."'. ";

            $tempInCelcius = intval($weatherArray['main']['temp'] - 273);

            $weather .= " The current temperature is ".$tempInCelcius."&deg;C and the wind speed is ".$weatherArray['wind']['speed']."m/s. ";
            
        }
        
        else {
            
            $error = "Could not find the city - please try again!";
            
        }
        
    
        
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      
      <title>Weather Scraper</title>
      
      <style type="text/css">
      
          html {
              
              background: url(bkground.jpg) no-repeat center center fixed;
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
              
          }
          
          body{
              
              background: none;
              
          }
          
          .container {
              
              text-align: center;
              margin-top: 100px;
              width: 450px;
              
          }
          
          h1, label {
              
              color: white;
              
          }
          
          input {
              
              margin: 20px;
              
          }
          
          #weather {
              
              margin: 15px;
              text-align: center;
              width: 425px;
              
          }
      
      </style>
      
  </head>
    
  <body>
      
    
     <div class="container">
      
        
         <h1>What's the weather ?</h1>
         
         
         <form>
             
             
              <div class="form-group">
                <label for="city">Enter the name of the city</label>
                <input type="text" class="form-control" name="city" id="city" aria-describedby="emailHelp" placeholder="Eg. Bangalore, London, etc.," >
                
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
             
         </form>
         
         <div id="weather"><?php 
             
             
                if($weather){
                    
                    echo '<div class="alert alert-success" role="alert">'.$weather.
                        '</div>';
                    
                }
             
                else if($error) {
                    
                    echo '<div class="alert alert-danger" role="alert">'.$error.
                        '</div>';
                    
                }
                        
             ?></div>
         
     </div> 
      

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
      
  </body>
    
</html>
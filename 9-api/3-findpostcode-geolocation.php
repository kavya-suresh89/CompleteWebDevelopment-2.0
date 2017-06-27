<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
      
      <div class="container">
            
          <h1>Postcode finder</h1>
          <p>Enter a partial address to get the post code.</p>
          
          <div id="message"></div>
          
          <form>
              <div class="form-group">
                <label for="address">Address</label>
                  
                <input type="text" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter partial address">
                  
                
                  
              </div>
              
              
                <button class="btn btn-primary" id="find-postcode">Submit</button>
          </form> 
      </div> 
      
      

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
      
     <script type="text/javascript">
         
         $("#find-postcode").click(function(e){
             
             e.preventDefault();
             
            $.ajax({
                url: "https://maps.googleapis.com/maps/api/geocode/json?address="+$("#address").val()+"&key=AIzaSyB6n11A1Cm7qv0gnMz-KHFTaBXdWOzaMsw",
                type: "GET",
                success: function(data){
                    
                    
                    if(data["status"] != "OK"){
                        
                        $("#message").html('<div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> That address could not be found!</div>');
                    }
                    
                    else {
                    
                        $.each(data['results'][0]['address_components'],function(key, value) {

                           if(value['types'][0] == 'postal_code'){

                               $("#message").html('<div class="alert alert-success" role="alert"><strong>Postcode found!</strong> The Postcode is - '+value['long_name'] +'</div>');


                           }

                        });
                        
                    }
                    
                }      
                
            });
             
        });
         
      
      </script>
             

             

  </body>
</html>
  
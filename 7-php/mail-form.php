<!DOCTYPE html>
<!-- saved from url=(0077)http://kavyasureshbabutesthostingpackage-com.stackstaging.com/7-php/index.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./mail-form_files/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <style type="text/css"></style></head>
  <body cz-shortcut-listen="true">
      
      <div class="container">
            
          <h1>Get in touch!</h1>
          
          <div id="error"><div class="alert alert-success" role="alert">Your message was sent, we'll get back to you ASAP!</div></div>
          
          <form method="post">
              
              <div class="form-group">
                  
                <label for="exampleInputEmail1">Email address</label>
                  
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email addess">
                  
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

              </div>

              <div class="form-group">
                  
                <label for="subject">Subject</label>
                  
                <input type="subject" class="form-control" id="subject" name="subject">
                  
              </div>

              <div class="form-group">
                  
                <label for="content">What would you like to ask us?</label>
                  
                <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                  
              </div>

              <button type="submit" id="submit" class="btn btn-primary">Submit</button>
         </form>
          
      </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="./mail-form_files/jquery.min.js.download"></script>
    <script src="./mail-form_files/tether.min.js.download" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="./mail-form_files/bootstrap.min.js.download" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
      
      <script type="text/javascript">
      
       /*     $("form").submit(function (e) {
                
               e.preventDefault();
                
               var error = "";
                
                if($("#email").val() == ""){
                    
                    error += "The Email address field is required.<br/>";
                }
                
                if($("#subject").val() == ""){
                    
                    error += "The Subject field is required.<br/>";
                }
                
                if($("#content").val() == ""){
                    
                    error += "The Content field is required.<br/>";
                }
                
                
                if(error != ""){
                    
               $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form : </strong></p>'+error+'</div>'); 
                    
                }
                
                else {
                    
                    $("form").unbind("submit").submit();
                }
                

                
            });*/
          
      </script>
      
      
  
</body></html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo env('APP_NAME'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
              class="img-fluid" alt="Phone image">
          </div>
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Password Verification</h5>
            <form name="passwordverification" class="form" method="POST" action="{{ route('password_verify') }}" onsubmit="return validateform()">   
              
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" placeholder="Please Enter Pasword" name="password" id="password" class="form-control form-control-lg" maxlength="10"/> 
                <div id="error" class="text-danger" ></div>       
                <input class="mt-3" type="checkbox" onclick="showPasswordFunction()"> Show Password
              </div>
              
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-lg btn-block">Verify</button>          
            </form>
          </div>
        </div>
      </div>
    </section>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      
      <script type="text/javascript">
        $(document).bind("contextmenu",function(e){
        return false;
        });
      </script>

      <script type="text/javascript">
        $(document).keydown(function (event) {        
            if (event.keyCode == 123 || (event.ctrlKey && event.keyCode == 85)) { // Pre F12
                return false;
            }             
        });

        function showPasswordFunction() {
          var password = document.getElementById("password");
          if (password.type === "password") {
            password.type = "text";
          } else {
            password.type = "password";
          }
        }

        function validateform(){         
          var password=document.passwordverification.password.value;            
          if (password==null || password==""){  
            var div = document.getElementById('error');
            div.innerHTML += 'Please enter password.';  
            return false;       
          }
        } 
      </script>
  </body>
</html>
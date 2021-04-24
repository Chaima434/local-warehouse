<!DOCTYPE HTML>
    <html>
        <head>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.js"></script>
        </head>
        <body>
            <form class="pt-3" method="POST" action="../app/action/Client/auth.php">
                <div class="form-group">
                  <input type="login" class="form-control form-control-lg" name="login" id="login" placeholder="login">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <input type="submit" id="btLogin" value="SIGN IN" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" />
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
                </div>
              </form>
            <script>
    $(document).ready
    (
    	function()
    	{
    		$("#btLogin").click
    		(
    			function(e)
    			{
            var login = $('#login').val();
            var password = $('#password').val();
            if(login === "")
            {
              $("#login").focus();
              alertify.error('You Should enter your Login');
              e.preventDefault();
            }
            else
            {
              if(password === "")
              {
                $("#password").focus();
                alertify.error('You Should enter your password');
                e.preventDefault();  
              }
            }
          }
        );
      }
    );
  </script>
        </body>
    </html>
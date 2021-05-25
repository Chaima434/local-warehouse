
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.js"></script>

</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.svg" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" method="POST" action="../app/action/Admin/add.php">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="login" id="login" placeholder="login">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="first_name" id="first_name" placeholder="First name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="last_name" id="last_name" placeholder="Last name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="address" id="address" placeholder="Address">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="confirm_password" placeholder="Confirm your password">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input id="agree" type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <input type="submit" value="SIGN UP" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id="btRegister" />
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.php" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/todolist.js"></script>
  <script>
    function IsEmail(email)
    {
    	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
    $(document).ready
	(
		function()
		{
			$("#btRegister").click
			(
				function(e)
				{
                    var login = $('#login').val();
                    var first_name = $('#first_name').val();
                    var last_name = $('#last_name').val();
                    var email = $('#email').val();
                    var address = $('#address').val();
                    var password = $('#password').val();
                    var confirm_password = $('#confirm_password').val();
                    var agree = document.getElementById('agree').checked;
					if(login === "")
                    {
                        $("#login").focus();
                        alertify.error('You Should enter your Login');
                        e.preventDefault();
                    }
                    else
                    {
                        if(first_name === "")
                        {
                            $("#first_name").focus();
                            alertify.error('You Should enter your first name');
                            e.preventDefault();
                            
                        }
                        else
                        {
                            if(last_name === "")
                            {
                                $("#last_name").focus();
                                alertify.error('You Should enter your last name');
                                e.preventDefault();        
                            }
                            else
                            {
                                if(email === "")
                                {
                                    $("#email").focus();
                                    alertify.error('You Should enter your email');
                                    e.preventDefault();    
                                }
                                else
                                {
                                    if(address === "")
                                    {
                                        $("#address").focus();
                                        alertify.error('You Should enter your address');
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
                                        else
                                        {
                                            if(confirm_password === "")
                                            {
                                                $("#confirm_password").focus();
                                                alertify.error('You Should confirm your password');
                                                e.preventDefault();                        
                                            }
                                            else
                                            {
                                                if(password != confirm_password)
                                                {
                                                    $("#confirm_password").focus();
                                                    alertify.error('Verify your password');
                                                    e.preventDefault();
                                                }
                                                else
                                                {
                                                    if(IsEmail(email) === false)
                                                    {
                                                        $("#email").focus();
                                                        alertify.error('You should write an email format');
                                                        e.preventDefault();
                                                    }
                                                    else
                                                    {
                                                        if(agree === false)
                                                        {
                                                            $("#agree").focus();
                                                            alertify.error('You should agree to all Terms & Conditions');
                                                            e.preventDefault();
                                                        }   
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
				}
			);
		}
	);
	</script>
  <!-- endinject -->
</body>

</html>

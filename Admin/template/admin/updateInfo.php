<?php
    require_once('../app/action/Admin/getInfoAdmin.php');
?>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update your information</h4>
                        <form class="forms-sample" method="POST" action="../app/action/Admin/update.php">
                            <div class="form-group">
                                <label for="login">Login</label>
                                <input type="text" name="login" value="<?php echo $admin->getLogin(); ?>" class="form-control" id="login" placeholder="Login">
                            </div>
                            <div class="form-group">
                                <label for="first_name">First name</label>
                                <input type="text" name="first_name" value="<?php echo $admin->getFirst_name(); ?>" class="form-control" id="first_name" placeholder="First name">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input type="text" name="last_name" value="<?php echo $admin->getLast_name(); ?>" class="form-control" id="last_name" placeholder="Last name">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" value="<?php echo $admin->getAddress(); ?>" class="form-control" id="address" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="<?php echo $admin->getEmail(); ?>" class="form-control" id="email" placeholder="Email">
                            </div>
                            <button id="btUpdate" type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
			$("#btUpdate").click
			(
				function(e)
				{
                    var login = $('#login').val();
                    var first_name = $('#first_name').val();
                    var last_name = $('#last_name').val();
                    var email = $('#email').val();
                    var address = $('#address').val();
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
                                        if(IsEmail(email) === false)
                                        {
                                            $("#email").focus();
                                            alertify.error('You should write an email format');
                                            e.preventDefault();
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
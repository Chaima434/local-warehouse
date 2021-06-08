<?php
  require_once('../app/session/sessionClient.php');
  $s = new SessionClient();
  $s->afterConnection();
?>
<!DOCTYPE html>
<html>
    <?php
        require_once('template/headPrincipal.php');
        require_once('../app/action/Client/findClientByLogin.php');
    ?>
    <body>
        <?php
            require_once('template/navbar.php');
            activePage('Profile');
        ?>
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Update your profile</h1>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <i class="fa fa-user"></i>
                            Update your datas
                        </div>
                        <div class="card-body">
                            <form action="../app/action/Client/update.php" method="POST">
                                <div class="form-group">
                                <label for="login">Login</label>
                                <input type="text" name="login" value="<?php echo $client->getLogin(); ?>" class="form-control" id="login" placeholder="Login">
                            </div>
                            <div class="form-group">
                                <label for="first_name">First name</label>
                                <input type="text" name="first_name" value="<?php echo $client->getFirst_name(); ?>" class="form-control" id="first_name" placeholder="First name">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input type="text" name="last_name" value="<?php echo $client->getLast_name(); ?>" class="form-control" id="last_name" placeholder="Last name">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" value="<?php echo $client->getAddress(); ?>" class="form-control" id="address" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="<?php echo $client->getEmail(); ?>" class="form-control" id="email" placeholder="Email">
                            </div>
                            <button id="btUpdate" type="submit" class="btn btn-primary mr-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <i class="fa fa-user"></i>
                            Update your password
                        </div>
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action="../app/action/Client/updatePassword.php">
                            <div class="form-group">
                                <label for="old_password">Old Password</label>
                                <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Old password">
                            </div>
                            <div class="form-group">
                                <label for="new_password">New password</label>
                                <input type="password" id="new_password" class="form-control" name="new_password"  placeholder="New password">
                            </div>
                            <div class="form-group">
                                <label for="conf_password">Confirm your new password</label>
                                <input type="password" id="conf_password" class="form-control"  placeholder="Confirm your new password">
                            </div>
                            <button id="btUpdatePassword" type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form>
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
        <script>
    $(document).ready
	(
		function()
		{
			$("#btUpdatePassword").click
			(
				function(e)
				{
                    var old_password = $('#old_password').val();
                    var new_password = $('#new_password').val();
                    var conf_password = $('#conf_password').val();
                    if(old_password === "")
                    {
                        $("#old_password").focus();
                        alertify.error('You Should enter your old password');
                        e.preventDefault();
                    }
                    else
                    {
                        if(new_password === "")
                        {
                            $("#new_password").focus();
                            alertify.error('You Should enter your new password');
                            e.preventDefault();
                        }
                        else
                        {
                            if(conf_password === "")
                            {
                                $("#conf_password").focus();
                                alertify.error('You Should confirm your new password');
                                e.preventDefault();
                            }
                            else
                            {
                                if(new_password != conf_password)
                                {
                                    $("#conf_password").focus();
                                    alertify.error('You Should verif your new pasword');
                                    e.preventDefault();
                                }
                            }
                        }
                    }
                }
            );
        }
    );
</script>
    </body>
</html>
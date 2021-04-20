<?php
    require_once('../app/action/Provider/findProviderById.php');
?>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <h4 class="card-title">Update this provider</h4>
                            <form method="POST" action="../app/action/Provider/update.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <input name="id" type="text" value="<?php echo $provider->getId(); ?>" hidden />
                                            <label for="first_name" class="col-sm-3 col-form-label">First Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="<?php echo $provider->getFirst_name(); ?>" name="first_name" id="first_name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="last_name" class="col-sm-3 col-form-label">Last Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" value="<?php echo $provider->getLast_name(); ?>" class="form-control" name="last_name" id="last_name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" value="<?php echo $provider->getEmail(); ?>" class="form-control" name="email" id="email" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="telephone" class="col-sm-3 col-form-label">Telephone</label>
                                            <div class="col-sm-9">
                                                <input type="text" value="<?php echo $provider->getTelephone(); ?>" name="telephone" id="telephone" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="address" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <input type="text" value="<?php echo $provider->getAddress(); ?>" id="address" name="address" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-sm-9">
                                                <button type="submit" id="btUpdateProvider" class="btn btn-primary btn-icon-text">
                                                    <i class="ti-file btn-icon-prepend"></i>
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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
			$("#btUpdateProvider").click
			(
				function(e)
				{
                    var first_name = $('#first_name').val();
                    var last_name = $('#last_name').val();
                    var email = $('#email').val();
                    var telephone = $('#telephone').val();
                    var address = $('#address').val();
                    if(first_name === "")
                    {
                        $("#first_name").focus();
                        alertify.error('You Should enter the first name of the provider');
                        e.preventDefault();    
                    }
                    else
                    {
                        if(last_name === "")
                        {
                            $("#last_name").focus();
                            alertify.error('You Should enter the last name of the provider');
                            e.preventDefault();
                        }
                        else
                        {
                            if(email === "")
                            {
                                $("#email").focus();
                                alertify.error('You Should enter the email of the provider');
                                e.preventDefault();
                            }
                            else
                            {
                                if(telephone === "")
                                {
                                    $("#telephone").focus();
                                    alertify.error('You Should enter the telephone of the provider');
                                    e.preventDefault();
                                }
                                else
                                {
                                    if(address === "")
                                    {
                                        $("#address").focus();
                                        alertify.error('You Should enter the address of the provider');
                                        e.preventDefault();
                                    }
                                    else
                                    {
                                        if(IsEmail(email) === false)
                                        {
                                            $("#email").focus();
                                            alertify.error('You Should enter an email format');
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
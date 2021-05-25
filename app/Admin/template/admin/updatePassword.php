<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Change your password</h4>
                        <form class="forms-sample" method="POST" action="../app/action/Admin/updatePassword.php">
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
</div>
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
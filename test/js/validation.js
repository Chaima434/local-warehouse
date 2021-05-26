$(document).ready
	(
		function()
		{
			$("#bt_submit").click
			(
				function(e)
				{
                    var first_name = $('#first_name').val();
                    var last_name = $('#last_name').val();
                    var email = $('#email').val();
                    var subject = $('#subject').val();
                    var message = $('#message').val();
                    if(first_name === "")
                    {
                        $("#first_name").focus();
                        alertify.error('Please ! enter your First name');
                        e.preventDefault();
                    }
                    else
                    {
                        if(last_name === "")
                        {
                            $("#last_name").focus();
                            alertify.error('Please ! enter your Last name');
                            e.preventDefault();
                        }
                        else
                        {
                            if(email === "")
                            {
                                $("#email").focus();
                                alertify.error('Please ! enter your email');
                                e.preventDefault();
                            }
                            else
                            {
                                if(subject === "")
                                {
                                    $("#subject").focus();
                                    alertify.error('Please ! enter the subject');
                                    e.preventDefault();
                                }
                                else
                                {
                                    if(message === "")
                                    {
                                        $("#message").focus();
                                        alertify.error('Please ! enter your message');
                                        e.preventDefault();
                                    }
                                    else
                                    {
                                        if(!IsEmail(email))
                                        {
                                            $("#email").focus();
                                            alertify.error('Please ! enter an email format');
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
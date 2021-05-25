<!DOCTYPE html>
<html lang="en">
    <?php
        require_once('template/head.php');
    ?>
    <body>
        <?php
            require_once('template/client/register.php');
        ?>
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
    </body>
</html>
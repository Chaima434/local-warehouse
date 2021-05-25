<!doctype html>
<html lang="en">
    <?php
        require_once('template/head.php');
    ?>
    <body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
        <?php   
            require_once('template/client/login.php');
        ?>
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
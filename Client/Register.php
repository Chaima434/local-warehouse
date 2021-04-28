<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.js"></script>
    </head>
    <body>
        <div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12">
            <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
                <form method="POST" action="../app/action/Client/add.php">
                    <h1 class="font-bold text-center text-2xl mb-5">Register</h1>  
                    <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
                        <div class="px-5 py-7">
                            <div>
                                <label for="login" class="font-semibold text-sm text-gray-600 pb-1 block">Login</label>
                                <input type="text" id="login" name="login" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                            </div>
                            <div>
                                <label class="font-semibold text-sm text-gray-600 pb-1 block" for="first_name">First name</label>
                                <input type="text" id="first_name" name="first_name" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                            </div>
                            <div>
                                <label for="last_name" class="font-semibold text-sm text-gray-600 pb-1 block">Last name</label>
                                <input type="text" id="last_name" name="last_name" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                            </div>
                            <div>
                                <label for="email" class="font-semibold text-sm text-gray-600 pb-1 block">Email</label>
                                <input type="email" id="email" name="email" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                            </div>
                            <div>
                                <label for="address" class="font-semibold text-sm text-gray-600 pb-1 block">Address</label>
                                <input type="text" id="address" name="address" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                            </div>
                            <div>
                                <label for="password" class="font-semibold text-sm text-gray-600 pb-1 block">Password</label>
                                <input type="password" id="password" name="password" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                            </div>
                            <div>
                                <label for="confirm_password" class="font-semibold text-sm text-gray-600 pb-1 block">Confirm your password</label>
                                <input type="password" id="confirm_password" name="confirm_password" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                            </div>
                            <div>
                                <label class="font-semibold text-sm text-gray-600 pb-1 block">
                                    <input id="agree" type="checkbox" class="form-checkbox h-4 w-4 text-gray-600" />
                                        I agree to all Terms & Conditions
                                </label>
                            </div>
                            <button type="submit" id="btRegister" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                <span class="inline-block mr-2">Register now</span>
                            </button>
                        </div>
                        <div class="py-5">
                            <div class="grid grid-cols-2 gap-1">
                                <div class="text-center sm:text-left whitespace-nowrap">
                                    <button class="transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-200 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                                        <span class="inline-block ml-1">Forgot Password</span>
                                    </button>
                                </div>
                                <div class="text-center sm:text-right  whitespace-nowrap">
                                    <button class="transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-200 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                                        <span class="inline-block ml-1">Help</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-5">
                        <div class="grid grid-cols-2 gap-1">
                            <div class="text-center sm:text-left whitespace-nowrap">
                                <button type="button" class="transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-gray-500 hover:bg-gray-200 focus:outline-none focus:bg-gray-300 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                                    <a href="login.php">
                                    <span class="inline-block ml-1">Login</span>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </form> 
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
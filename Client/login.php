 <!doctype html>
<html lang="en">
  <?php
    require_once("Template/head.php");
  ?>
    <body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
        <div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12">
            <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
                <form method="POST" action="../app/action/Client/auth.php">
                    <h1 class="font-bold text-center text-2xl mb-5">Authentification</h1>  
                    <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
                        <div class="px-5 py-7">
                            <label class="font-semibold text-sm text-gray-600 pb-1 block">Login</label>
                            <input type="text" name="login" id="login" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                            <label class="font-semibold text-sm text-gray-600 pb-1 block">Password</label>
                            <input type="text" name="password" id="password" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                            <button type="submit" id="btLogin" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                <span class="inline-block mr-2">Login</span>
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
                                <button class="transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-gray-500 hover:bg-gray-200 focus:outline-none focus:bg-gray-300 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                                    <span class="inline-block ml-1">Register</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
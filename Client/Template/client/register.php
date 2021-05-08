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
            </div>
            <div class="py-5">
                <div class="grid grid-cols-2 gap-1">
                    <div class="text-center sm:text-left whitespace-nowrap">
                        <a href="login.php">
                            <button type="button" class="transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-gray-500 hover:bg-gray-200 focus:outline-none focus:bg-gray-300 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                                <span class="inline-block ml-1">Login</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </form> 
    </div>
</div>
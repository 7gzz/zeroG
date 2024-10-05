<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/output.css">
    <title>zeroG - Login</title>
</head>

<body class="bg-black">
    <!-- Logoin -->
    <div class="container w-[85%] m-auto py-5">
        <div class="w-full flex flex-wrap items-center">
            <div class="md:w-1/2 w-full h-[90vh] rounded-xl overflow-hidden relative">
                <div>
                    <img src="./Assets/Login.png" class="w-full object-cover object-center" alt="">
                </div>
                <div class="absolute bottom-0 left-[50%] translate-x-[-50%]">
                    <img src="./Assets/black.png" class="w-full object-cover object-center" alt="">
                </div>
            </div>
            <div class="md:w-1/2 w-full py-3 overflow-hidden">
                <div>
                    <h1 class="text-3xl text-center">Login Account</h1>
                    <div class="px-8">
                        <form action="/login" method="POST">
                            <div class="w-full my-4">
                                <label for="userEmail" class="block mb-3">Email</label>
                                <input type="email" class="my-input w-full" placeholder="someone@example.com" id="userEmail" name="email" required>
                            </div>
                            <div class="w-full my-4">
                                <label for="userPassword" class="block mb-3">Password</label>
                                <input type="password" class="my-input w-full" id="userPassword" name="password" required>
                            </div>
                            <div class="w-full my-4 py-2">
                                <button type="submit" class="text-center block bg-white text-black w-full py-2 rounded-lg" id="loginBtn">Login</button>
                            </div>
                        </form>

                        <div class="w-full my-4 py-2">
                            <p class="text-center text-[#999]">Don't have an account? <a href="/signup" class="text-white">Sign Up</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Logoin -->
</body>

</html>
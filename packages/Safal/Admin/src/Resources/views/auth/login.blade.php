<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="{{ asset('vendor/safal/admin/assets/css/admin.css') }}" rel="stylesheet">
</head>
<body>
    <div class="flex w-full justify-center min-h-40 mt-16">
        <div class="bg-white shadow-2xl w-full m-2 lg:m-0 lg:w-1/4 p-4 rounded">
            <div class="text-center mb-4">
                <h1 class="text-2xl text-gray-500 text-thin">Please Login</h1>
                <img class="h-32 w-full" src="https://images.unsplash.com/photo-1584441405886-bc91be61e56a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGxvZ298ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" alt="">
            </div>
            <div class="flex flex-col space-y-4">
                <div class="w-ull border p-3 rounded">
                    <input type="text" placeholder="Username or Email address">
                </div>
                <div class="w-ull border p-3 rounded">
                    <input type="password" placeholder="Password">
                </div>
                <button type="submit" class="rounded p-4 bg-blue-500 text-white text-sm font-thin">Login</button>
                <div class="text-center">
                    <span class="text-gray-500 text-xs font-thin">or</span>
                </div>
                <hr>
                <div class="text-center">
                    <a href="" class="text-blue-500 text-sm font-thin">Forget Password?</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
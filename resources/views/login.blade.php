<!DOCTYPE html>
<html lang="en">
<head>
    <title>SIAKAD UNAND</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" href="/images/logo.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/css/pages/login.css')}}">
</head>

<body>
    <div class='contain'>
        <div>
            @foreach ($errors->all() as $error)

            <div class="flex flex-col align-center font-semibold bg-red-500 rounded my-2">
                <p class="mx-3 my-2">{{ $error }}</p>
            </div>

            @endforeach
            <div class='card'>
                <h1 class='title'>Login</h1>
                <form action="/session/signin" method='post' class='mx-8'>
                    @csrf
                    <label htmlFor="name" class='placeholder'>UNAND ID: </label>
                    <input type="text" name="name" value='{{Session::get('name')}}' placeholder="Enter your UNAND ID..." size=54 class='mb-5 p-1'/>
                    <label htmlFor="password" class='placeholder'>Password: </label>
                    <input type="password" name="password" placeholder="Password..." size=54 class='mb-5 p-1'/>
                    <div class='flex flex-row'>
                        <button type="submit" name="masuk" class="transition duration-200 basis-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded cursor-pointer mt-5">
                            Masuk
                        </button>
                    </div>
                    <div class='my-2'><a href='/' class='text-black transition duration-200 hover:text-yellow-600'>Forgot password?</a></div>
                </form>
            </div>
            <div class='flex flex-row justify-center text-white'>
                <p>© 2022 Universitas Andalas. v1.0.0</p>
            </div>
        </div>
    </div>
</body>
</html>

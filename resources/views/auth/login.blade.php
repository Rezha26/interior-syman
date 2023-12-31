<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
<body style="background-color: #f0ebe3" class="w-screen h-screen">
    
    <div class="container flex justify-center">

    <form class="flex flex-col items-center"
    method="POST" action="{{ route('login') }}">
            @csrf
            <div class="flex justify-center mt-10">
                <img class="w-8 h-8" src="asset/icon/profileicon.png" alt="">
            </div>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input style="width: 300px" name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-600 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata Sandi</label>
            <input name="password" style="width: 300px"type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-600 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <button type="submit" class="btn btn-neutral mt-3 ">LOGIN</button>
        <div
            class="my-4 w-80 flex justify-center before:mt-0.5 before:flex-1 border-t border-black after:mt-0.5 after:flex-1 border-t border-black">
            <p class="mb-0 mt-2 pt-1 text-sm font-semibold text-black">atau</p>
        </div>
        <div class="container mt-10 flex justify-center">
        <div class="flex items-center">
        <a class="mb-3 flex w-200 items-center justify-center rounded bg-primary px-7 pb-2.5 pt-3 text-center text-sm font-pippons uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" style="background-color: #ffff" href="#!" role="button" data-te-ripple-init
        data-te-ripple-color="light">
        <img src="asset/icon/search.png" alt="" class="w-6 h-6">
        Login Dengan Google
        </a>
        <a class="mb-3 ml-5 flex w-250 items-center justify-center rounded bg-info px-7 pb-2.5 pt-3 text-center text-sm font-pippons uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#54b4d3] transition duration-150 ease-in-out hover:bg-info-600 hover:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:bg-info-600 focus:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:outline-none focus:ring-0 active:bg-info-700 active:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(84,180,211,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)]"style="background-color: #ffff " href="#!" role="button" data-te-ripple-init
        data-te-ripple-color="light">
        <img src="asset/icon/facebook.png" alt="" class="w-6 h-6">
        Login Dengan Facebook</a>
        </div>
        </div>
        <div class="flex justify-center">
            <p class="mb-0 mt-2 pt-1 text-sm font-semibold text-white">
                Belum punya akun?
                <a href="/register" class="text-danger transition duration-150 ease-in-out hover:text-danger-600 focus:text-danger-600 active:text-danger-700">Daftar akun disini</a>
            </p>
        </div>
        </form>
    </div> 
</body>
</html>

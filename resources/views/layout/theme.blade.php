<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Elemen berukuran panjang dengan latar belakang merah -->
    @include('layout.navbar')
    <div class="flex w-full justify-center">
        <div class="container w-full h-full">
            @yield('content')
        </div>
    </div>
    
    @include('layout.footer')

</body>

</html>

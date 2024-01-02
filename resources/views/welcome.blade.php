<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>
<body class="w-screen h-screen">
    <div class="container w-screen h-screen" style="background: url('{{ asset('asset/image/background.jpg') }}') no-repeat center center; background-size: cover; overflow-y: auto;">
    @include('layout.navtrans')
    <div class="container justify-center items-center mt-10">
    <p class="text-black" style="color: #000; max-width: 600px; margin: 0 auto; font-family:'Courier New', Courier, monospace;font-size:20pt; line-height: 1.5; text-align:center; font-weight:bold;">
        Syman Interior merupakan penyedia jasa pemasangan sekaligus barang interior yang berfokus pada bidang plafon dan dinding. Kami berkomitmen untuk membantu anda dalam proses pembuatan rumah impian anda dengan model-model terkini
    </p>
    </div>
    </div>
    <div class="container w-screen h-screen" style="background-color: #f0ebe3;">
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8;">
            <div>
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Syman Interior</h2>
            <p class="mt-4 text-gray-500">“Bersama Kami Wujudkan Rumah Impian Mu”</p>
            <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">List Gypsum</dt>
                <dd class="mt-2 text-sm text-gray-500">Barang tersedia untuk memenuhi kebutuhan anda, ini terbuat dari bahan semen gypsum dengan campuran serat fiber agar membuat list gypsum tidak mudah patah</dd>
                </div>
                <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Plafon Gypsum</dt>
                <dd class="mt-2 text-sm text-gray-500">Pilihan yang banyak diminati saat ini karena salah satu kelebihannya tahan panas dan tidak mudah terbakar.</dd>
                </div>
                <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Plafon PVC</dt>
                <dd class="mt-2 text-sm text-gray-500">Plafon PVC adalah jenis plafon yang terbuat dari bahan Polyvinyl Chloride (PVC). Ini adalah bahan sintetis yang sering digunakan dalam berbagai aplikasi konstruksi, termasuk plafon.</dd>
                </div>
                <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Molding Wall</dt>
                <dd class="mt-2 text-sm text-gray-500">elemen dekoratif yang digunakan untuk meningkatkan tampilan estetika dinding dalam ruangan. Molding wall umumnya terbuat dari berbagai jenis bahan, termasuk kayu, MDF (Medium Density Fiberboard), atau bahan polimer. </dd>
                </div>
                <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Full Paint</dt>
                <dd class="mt-2 text-sm text-gray-500">layanan yang menyediakan solusi lengkap untuk kebutuhan pengecatan interior atau eksterior suatu bangunan.</dd>
                </div>
                <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Temukan dan Hubungi Kami</dt>
                <div class="flex" style="display: flex; align-items: center; margin-top:10px">
                <a href="https://wa.me/+62823-1120-4261" target="_blank" class="image-link" style="margin-right: 10px;">
                    <img class="w-7 h-7" src="asset/icon/profileicon.png" alt="">
                </a>
                <a href="https://www.facebook.com/profile.php?id=100089319498090" target="_blank" class="image-link" style="margin-right: 10px;">
                    <img class="w-7 h-7" src="asset/icon/facebook.png" alt="">
                </a>
                </div>
                </div>
            </dl>
            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
            <img src="asset/image/display1.jpg" alt="" class="rounded-lg bg-gray-100">
            <img src="asset/image/bg2.jpg" alt="" class="rounded-lg bg-gray-100">
            <img src="asset/image/pvc  display.png" alt="" class="rounded-lg bg-gray-100">
            <img src="asset/image/molding display.jpg" alt="" class="rounded-lg bg-gray-100">
            </div>
        </div>
    </div> 
</body>
</html>

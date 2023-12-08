<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keranjang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('layout.navbar')
    <article class="bg-yellow-700 w-full">
        <div class="centered">
        <div class="max-h bg-yellow-700">
            <div class="flex justify-center">
                <p style="font-family: Poppins;" class="text-black bg-white rounded text-5xl font-bold mt-3">KERANJANG</p>
            </div>
            <div class="grid" style="display: flex; justify-content:space-between">
                <div class="flex">
                <img src="/asset/image/keranjang.png" alt="" class="ml-8 mt-7 w-15 h-15">
                <div class="container">
                    <div class=" bg-white rounded-lg ml-40" width="30px" height="50">
                    <p style=" font-weight: bold; font-family: Poppins; justify-content:center; align-items:center;" class="text-center mt-40 ml-10 text-black text-2xl">"Keranjang Anda Kosong!"</p>
                    <p style="font-family: Poppins;" class="text-center  ml-10 text-black text-2xl">Ayo, belanja dan pesan sekarang!</p>
                    <a href="/home/barang" type="submit" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-200 sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-3  ml-40">Mulai Belanja</a>
                </div>
                </div>
                </div>
            </div>
        </article>
</body>
@include('layout.footer')
</html>
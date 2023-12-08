<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang</title>
    <!-- Memuat Tailwind CSS melalui CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('layout.navbar')
    <article class="bg-yellow-700 w-full">
        <div class="centered">
        <div class="max-full bg-yellow-700">
            <div class="flex justify-center">
                <p style="font-family: Poppins;" class="text-black bg-white rounded text-5xl font-bold mt-3">PRODUK</p>
            </div>
            <div class="flex flex-container">
                <div class="card w-30 h-50 bg-white shadow-xl rounded-lg mt-10 " style="width:25%">
                    <figure><img class="" src="/asset/image/kangkung.jpg" alt="" /></figure>
                        <div class="card-body">
                            <h2 class="card-title text-center" style="font-size: 25px">
                            List Kangkung</h2>
                            <div class="badge badge-secondary">Rp. 20000</div>
                            <div class="card-actions justify-end">
                            <div class="badge badge-outline">List</div> 
                            <div class="badge badge-outline">Products</div>
                        </div>
                </div>
                </div>
                <div class="card w-30 h-50 bg-white shadow-xl rounded-lg ml-10 mt-10" style="width:25%">
                    <figure><img class="width:25%" src="/asset/image/mata sapi.jpg" alt="" /></figure>
                        <div class="card-body">
                            <h2 class="card-title text-center" style="font-size: 25px">
                            List Mata Sapi</h2>
                            <div class="badge badge-secondary">Rp. 20000</div>
                            <div class="card-actions justify-end">
                            <div class="badge badge-outline">List</div> 
                            <div class="badge badge-outline">Products</div>
                        </div>
                </div>
                </div>
                <div class="card w-30 h-50 bg-white shadow-xl rounded-lg ml-10 mt-10" style="width:25%">
                    <figure><img class="width:25%" src="/asset/image/sawi.jpg" alt="" /></figure>
                        <div class="card-body">
                            <h2 class="card-title text-center" style="font-size: 25px">
                            List Sawi</h2>
                            <div class="badge badge-secondary">Rp. 25000</div>
                            <div class="card-actions justify-end">
                            <div class="badge badge-outline">List</div> 
                            <div class="badge badge-outline">Products</div>
                        </div>
                </div>
                </div>
                <div class="card w-30 h-50 bg-white shadow-xl rounded-lg ml-10 mt-10" style="width:25%">
                    <figure><img class="width:25%" src="/asset/image/piano.jpg" alt="" /></figure>
                        <div class="card-body">
                            <h2 class="card-title text-center" style="font-size: 25px">
                            List Piano</h2>
                            <div class="badge badge-secondary">Rp. 20000</div>
                            <div class="card-actions justify-end">
                                <div class="badge badge-outline">List</div> 
                            <div class="badge badge-outline">Products</div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="flex flex-container">
                    <div class="card w-30 h-50 bg-white shadow-xl rounded-lg mt-10 " style="width:25%">
                        <figure><img class="" src="/asset/image/lampu oval.jpg" alt="" /></figure>
                            <div class="card-body">
                                <h2 class="card-title text-center" style="font-size: 25px">
                                List polos</h2>
                                <div class="badge badge-secondary">Rp. 25000</div>
                                <div class="card-actions justify-end">
                                    <div class="badge badge-outline">List</div>
                                <div class="badge badge-outline">Products</div>
                            </div>
                    </div>
                    </div>
                    <div class="card w-30 h-50 bg-white shadow-xl rounded-lg ml-10 mt-10" style="width:25%">
                        <figure><img class="width:25%" src="/asset/image/lampu merak.jpg" alt="" /></figure>
                            <div class="card-body">
                                <h2 class="card-title text-center" style="font-size: 25px">
                                Lampu Merak</h2>
                                <div class="badge badge-secondary">Rp. 90000</div>
                                <div class="card-actions justify-end">
                                <div class="badge badge-outline">Lampu</div> 
                                <div class="badge badge-outline">Products</div>
                            </div>
                    </div>
                    </div>
                    <div class="card w-30 h-50 bg-white shadow-xl rounded-lg ml-10 mt-10" style="width:25%">
                        <figure><img class="width:25%" src="/asset/image/lampu kotak.jpg" alt="" /></figure>
                            <div class="card-body">
                                <h2 class="card-title text-center" style="font-size: 25px">
                                Lampu Kotak </h2>
                                <div class="badge badge-secondary">Rp. 60000</div>
                                <div class="card-actions justify-end">
                                    <div class="badge badge-outline">Lampu</div> 
                                <div class="badge badge-outline">Products</div>
                            </div>
                    </div>
                    </div>
                    <div class="card w-30 h-50 bg-white shadow-xl rounded-lg ml-10 mt-10" style="width:25%">
                        <figure><img class="width:25%" src="/asset/image/lampu sawi.jpg" alt="" /></figure>
                            <div class="card-body">
                                <h2 class="card-title text-center" style="font-size: 25px">
                                Lampu sawi</h2>
                                <div class="badge badge-secondary">Rp. 40000</div>
                                <div class="card-actions justify-end">
                                    <div class="badge badge-outline">Lampu</div> 
                                <div class="badge badge-outline">Products</div>
                            </div>
                        </div>
        </article>
        </div>
    @yield('content')
</body>
@include('layout.footer')
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang & Jasa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('layout.navbar')
    <article class="bg-yellow-700 w-full">
        <div class="centered">
        <div class="max-full bg-yellow-700">
            <div class="flex justify-center">
                <p style="font-family: Poppins;" class="text-black bg-white rounded text-5xl font-bold mt-3">PRODUK & JASA</p>
            </div>
            <div class="flex flex-container">
                <div class="card w-30 h-50 bg-white shadow-xl rounded-lg mt-10 " style="width:25%">
                    <figure><img class="" src="/asset/image/Molding blok.jpg" alt="" /></figure>
                        <div class="card-body">
                            <h2 class="card-title text-center" style="font-size: 25px">
                            Molding Standar</h2>
                            <div class="badge badge-secondary">Rp. 20000</div>
                            <div class="card-actions justify-end">
                            <div class="badge badge-outline">Molding</div> 
                            <div class="badge badge-outline">Products</div>
                        </div>
                </div>
                </div>
                <div class="card w-30 h-50 bg-white shadow-xl rounded-lg ml-10 mt-10" style="width:25%">
                    <figure><img class="width:25%" src="/asset/image/molding standar.jpg" alt="" /></figure>
                        <div class="card-body">
                            <h2 class="card-title text-center" style="font-size: 25px">
                            Molding Doble Block</h2>
                            <div class="badge badge-secondary">Rp. 20000</div>
                            <div class="card-actions justify-end">
                            <div class="badge badge-outline">Molding</div> 
                            <div class="badge badge-outline">Products</div>
                        </div>
                </div>
                </div>
                <div class="card w-30 h-50 bg-white shadow-xl rounded-lg ml-10 mt-10" style="width:25%">
                    <figure><img class="width:25%" src="/asset/image/plafongypsum1.jpg" alt="" /></figure>
                        <div class="card-body">
                            <h2 class="card-title text-center" style="font-size: 25px">
                            Plafon Block</h2>
                            <div class="badge badge-secondary">Rp. 20000</div>
                            <div class="card-actions justify-end">
                                <div class="badge badge-outline">Plafon Gypsum</div> 
                            <div class="badge badge-outline">Products</div>
                        </div>
                </div>
                </div>
                <div class="card w-30 h-50 bg-white shadow-xl rounded-lg ml-10 mt-10" style="width:25%">
                    <figure><img class="width:25%" src="/asset/image/plafongypsum2.jpg" alt="" /></figure>
                        <div class="card-body">
                            <h2 class="card-title text-center" style="font-size: 25px">
                            Plafon Up Down</h2>
                            <div class="badge badge-secondary">Rp. 20000</div>
                            <div class="card-actions justify-end">
                            <div class="badge badge-outline">Plafon Gypsum</div> 
                            <div class="badge badge-outline">Products</div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="flex flex-container">
                    <div class="card w-30 h-50 bg-white shadow-xl rounded-lg mt-10 " style="width:25%">
                        <figure><img class="" src="/asset/image/pvc wow.jpg" alt="" /></figure>
                            <div class="card-body">
                                <h2 class="card-title text-center" style="font-size: 25px">
                                PVC Grid</h2>
                                <div class="badge badge-secondary">Rp. 20000</div>
                                <div class="card-actions justify-end">
                                    <div class="badge badge-outline">PVC</div> 
                                <div class="badge badge-outline">Products</div>
                            </div>
                    </div>
                    </div>
                    <div class="card w-30 h-50 bg-white shadow-xl rounded-lg ml-10 mt-10" style="width:25%">
                        <figure><img class="width:25%" src="/asset/image/pvc blok.jpg" alt="" /></figure>
                            <div class="card-body">
                                <h2 class="card-title text-center" style="font-size: 25px">
                                PVC Block</h2>
                                <div class="badge badge-secondary">Rp. 20000</div>
                                <div class="card-actions justify-end">
                                <div class="badge badge-outline">PVC</div> 
                                <div class="badge badge-outline">Products</div>
                            </div>
                    </div>
                    </div>
                    <div class="card w-30 h-50 bg-white shadow-xl rounded-lg ml-10 mt-10" style="width:25%">
                        <figure><img class="width:25%" src="/asset/image/molding 3.jpg" alt="" /></figure>
                            <div class="card-body">
                                <h2 class="card-title text-center" style="font-size: 25px">
                                Molding Frame</h2>
                                <div class="badge badge-secondary">Rp. 20000</div>
                                <div class="card-actions justify-end">
                                    <div class="badge badge-outline">Molding</div>
                                <div class="badge badge-outline">Products</div>
                            </div>
                    </div>
                    </div>
                    <div class="card w-30 h-50 bg-white shadow-xl rounded-lg ml-10 mt-10" style="width:25%">
                        <figure><img class="width:25%" src="/asset/image/molding wall.jpg" alt="" /></figure>
                            <div class="card-body">
                                <h2 class="card-title text-center" style="font-size: 25px">
                                Molding Mirror</h2>
                                <div class="badge badge-secondary">Rp. 20000</div>
                                <div class="card-actions justify-end">
                                <div class="badge badge-outline">Molding</div> 
                                <div class="badge badge-outline">Products</div>
                            </div>
                        </div>
        </article>
</body>
@include('layout.footer')
</html>
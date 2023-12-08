@extends('layout.theme')
@section('content')
    <main class="flex flex-wrap justify-center items-start py-6 min-h-screen mt-10">
        <div class="flex flex-wrap justify-center">       
            
                <center>
                    <figure style="height: 100px; width: 100px">
                        <img class="w-full h-full" src="{{ asset('asset/image/polos.jpg') }}" alt="" />
                    </figure>
                </center>
                <div class="card-body">
                    <h2 class="card-title text-black">List Polos</h2>
                    <p class="text-black">Panjang = 300cm</p>
                    <p class="text-black">Lebar = 10cm</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="card card-compact shadow-2xl mx-1" style="width: 300px; background-color: #f0ebe3">
                <center>
                    <figure style="height: 100px; width: 100px">
                        <img class="w-full h-full" src="{{ asset('asset/image/list piano.jpg') }}" alt="Shoes" />
                    </figure>
                </center>
                <div class="card-body">
                    <h2 class="card-title text-black">List Piano</h2>
                    <p class="text-black">Panjang = 250cm</p>
                    <p class="text-black">Lebar = 8cm</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div><div class="card card-compact shadow-2xl mx-1" style="width: 300px; background-color: #f0ebe3">
                <center>
                    <figure style="height: 100px; width: 100px">
                        <img class="w-full h-full" src="{{ asset('asset/image/kangkung.jpg') }}" alt="Shoes" />
                    </figure>
                </center>
                <div class="card-body">
                    <h2 class="card-title text-black">List Kangkung</h2>
                    <p class="text-black">Panjang = 350cm</p>
                    <p class="text-black">Lebar = 15cm</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div><div class="card card-compact shadow-2xl mx-1" style="width: 300px; background-color: #f0ebe3">
                <center>
                    <figure style="height: 100px; width: 100px">
                        <img class="w-full h-full" src="{{ asset('asset/image/mata sapi.jpg') }}" alt="Shoes" />
                    </figure>
                </center>
                <div class="card-body">
                    <h2 class="card-title text-black">List Mata Sapi</h2>
                    <p class="text-black">Panjang = 250cm</p>
                    <p class="text-black">Lebar = 8cm</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
            <!-- Tambahkan card lainnya di sini jika diperlukan -->
        </div>
    </main>
@endsection

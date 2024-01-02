@extends('layout.theme')
@section('content')
    <main style="background-color: #f0ebe3" class="max-h py-6">
        <div class="flex flex-wrap justify-center">
            @foreach ($barang as $item)
            <div class="card card-compact bg-base-100 shadow-2xl mx-1" style="width: 300px;">
            <center>
                <figure style="height: 100px; width: 100px">
                    <img class="w-full h-full" src="{{ asset('storage/asset/produk/'.$item->gambar) }}" alt="Shoes" />
                </figure>
            </center>
            <div class="card-body">
                <h2 class="card-title">{{ $item->name }}</h2>
                <p>{{ $item->deskripsi }}</p>
                <small>Stock : {{ $item->stock }}</small>
                <p>Rp. {{ $item->harga }}</p>

                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
           @endforeach
            <!-- Tambahkan card lainnya di sini jika diperlukan -->
        </div>
    </main>
@endsection

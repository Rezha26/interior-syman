@extends('layout.theme_admin')
@section('content')
    <div style= "background-color:#f0ebe3" class="pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="col-lg-12 col-md-12 col-12 my-2">
            <!-- Page header -->
            <div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mb-2 mb-lg-0">
                        <h3 class="mb-0  text-white">Data Barang Admin Lab</h3>
                    </div>
                    <div>
                        <a href="{{ route('management-barang.create') }}" class="btn btn-white">Create New Items</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-12">
            <!-- card  -->
            <div class="card">
                <!-- card header  -->
                {{-- <div class="card-header bg-white  py-4">
                <h4 class="mb-0">Active Projects</h4>
            </div> --}}
                <!-- table  -->
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th></th>
                                <th>Nama</th> 
                                <th>deskripsi</th>
                                <th>Stock</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $item)
                            <tr>
                                <td class="align-middle">
                                #
                                </td>
                                <td class="align-middle">{{ $item->name }}</td>
                                <td class="align-middle">{{ $item->deskripsi }}</td>
                                <td class="align-middle">{{ $item->stock }}</td>
                                <td class="align-middle">{{ $item->harga }}</td>
                                <td class="align-middle">
                                    <img src="{{ asset('storage/asset/produk/'.$item->gambar) }}" width="25" alt="">
                                </td>

                                <td class="align-middle d-flex">
                                    <a href="{{ route('management-barang.edit',['id' => $item->id]) }}">
                                        <button class="btn btn-primary btn-sm">Edit</button>                                    
                                    </a>

                                    <form method="POST" action="{{ route('management-barang.delete',['id' => $item->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    

                                </td>
                            </tr>
                            @endforeach
                            
                            

                        </tbody>
                    </table>
                </div>
                <!-- card footer  -->
                <div class="card-footer bg-white text-center">
                    <a href="#" class="link-primary">View All Projects</a>

                </div>
            </div>

        </div>
    </div>
@endsection


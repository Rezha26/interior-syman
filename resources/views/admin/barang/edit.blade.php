@extends('layout.theme_admin')
@section('content')
<div class="container d-flex flex-column mt-2">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
      <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
        <!-- Card -->
        <div class="card smooth-shadow-md">
          <!-- Card body -->
          <div class="card-body p-6">
            <div class="mb-4">
            <h1>FORM CREATE BARANG</h1>
              <p class="mb-6">Please enter your user information.</p>
            </div>
            <!-- Form -->
            <form method="POST" action="{{ route('management-barang.update',['id' => $item->id]) }}">
            @csrf
            @method('put')
              <!-- Username -->
              <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input
                value="{{ $item->name }}"
                type="text" id="name" class="form-control" name="name" placeholder="name produk here" required="">
              </div>
              <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" id="deskripsi" class="form-control" name="deskripsi" placeholder="deskripsi produk here" required="">
              </div>
              <div class="mb-3">
                <label for="stock" class="form-label">stock</label>
                <input type="number" id="stock" class="form-control" name="stock" placeholder="stock produk here" required="">
              </div>
              <label for="harga" class="form-label">harga</label>
                <input type="number" id="harga" class="form-control" name="harga" placeholder="harga produk here" required="">
              </div>
              <div>
                <!-- Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>


            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
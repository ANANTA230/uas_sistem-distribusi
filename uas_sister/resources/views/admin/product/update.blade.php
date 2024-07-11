@extends('layouts.dashboard')
@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <form action="{{ route('admin/products/update', $products->id) }}" method="POST" enctype="multipart/form-data" class="row">
    @csrf
    @method('PUT')
      <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header">
                <h5>Edit Product</h5>
                @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    {{ Session::get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
                </div>
                @endif
            </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="name" class="form-label">Nama Produk</label>
              <input type="text" class="form-control" name="judul" id="name" placeholder="Nama" aria-describedby="name" required value="{{ old('judul', $products->judul) }}">
              @error('judul')
              <div id="name" class="form-text text-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="kategory" class="form-label">Kategori Produk</label>
              <input type="text" class="form-control" name="kategory" id="kategory" placeholder="Kategori" aria-describedby="kategory" required value="{{ old('judul', $products->kategory) }}">
              @error('kategory')
              <div id="kategory" class="form-text text-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="harga" class="form-label">Harga Produk</label>
              <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga" aria-describedby="harga" required value="{{ old('judul', $products->harga) }}">
              @error('harga')
              <div id="harga" class="form-text text-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-4">
                <label for="gambar" class="form-label">Gambar Produk</label>
                <input class="form-control" name="photo" type="file" id="gambar">
                @error('photo')
                <div id="harga" class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
          </div>
        </div>
      </div>
    </form>    
</div>
@endsection
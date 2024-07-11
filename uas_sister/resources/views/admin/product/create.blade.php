@extends('layouts.dashboard')
@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <form action="{{ url('admin/products/save') }}" method="POST" enctype="multipart/form-data" class="row">
    @csrf
      <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header">
                <h5>Tambah Product</h5>
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
              <label for="name" class="form-label">Nama Product</label>
              <input type="text" class="form-control" name="judul" id="name" placeholder="Nama" aria-describedby="name" required value="{{ old('judul') }}">
              @error('judul')
              <div id="name" class="form-text text-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="kategory" class="form-label">Kategori Product</label>
              <input type="text" class="form-control" name="kategory" id="kategory" placeholder="Kategori" aria-describedby="kategory" required value="{{ old('kategory') }}">
              @error('kategory')
              <div id="kategory" class="form-text text-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="harga" class="form-label">Harga Product</label>
              <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga" aria-describedby="harga" required value="{{ old('harga') }}">
              @error('harga')
              <div id="harga" class="form-text text-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-4">
                <label for="gambar" class="form-label">Gambar Product</label>
                <input class="form-control" name="photo" type="file" id="gambar" required>
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
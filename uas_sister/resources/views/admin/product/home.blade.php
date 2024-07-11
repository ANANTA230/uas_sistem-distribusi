@extends('layouts.dashboard')
@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    
    <!-- Responsive Table -->
    <div class="card">
        <div class="card-header">
            <h5>Daftar Produk</h5>
            <a href="{{('products/create') }}">
                <button type="button" class="btn btn-primary">
                    <span class="tf-icons bx bx-plus me-1"></span>Tambah Produk
                </button>
            </a>
            @if(Session::has('success'))
            <div class="mt-3 alert alert-info alert-dismissible" role="alert">
                {{ Session::get('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
              </button>
            </div>
            @endif
        </div>
      <div class="table-responsive text-nowrap px-4">
        <table class="table">
          <thead>
            <tr class="text-nowrap">
              <th>#</th>
              <th>Title</th>
              <th>Category</th>
              <th>Price</th>
              <th>Photo</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @forelse ($products as $product)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $product->judul }}</td>
              <td>{{ $product->kategory }}</td>
              <td>{{ number_format($product->harga, 0, '.', '.') }}</td>
              <td>
                @if ($product->photo)
                <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->judul }}" width="80" height="80" class="object-cover">
                @endif
              </td>
              <td>
                <a href="{{ route('admin/products/edit', ['id'=>$product->id]) }}">
                    <button type="button" class="btn btn-icon btn-warning">
                        <span class="tf-icons bx bx-pencil"></span>
                    </button>
                </a>
                <button type="button" class="btn btn-icon btn-danger" data-bs-toggle="modal" data-bs-target="#modalCenter-{{ $product->id }}">
                    <span class="tf-icons bx bx-trash"></span>
                </button>

                <div class="modal fade" id="modalCenter-{{ $product->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Apakah kamu yakin?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Data akan terhapus!</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Batal</button>
                        <a href="{{ route('admin/products/delete', ['id'=>$product->id]) }}" class="btn btn-danger">Hapus</a>
                        </div>
                    </div>
                    </div>
                </div>

              </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Product not found</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Responsive Table -->    
</div>
@endsection
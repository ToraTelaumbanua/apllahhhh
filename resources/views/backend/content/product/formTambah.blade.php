@extends('backend.layout.main')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Form Tambah Produk</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form id="form-tambah" action="{{ route('product.prosesTambah') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 row">
                        <label for="Product_Name" class="col-md-4 col-form-label text-md-right">Nama Produk</label>
                        <div class="col-md-6">
                            <input id="Product_Name" type="text" class="form-control" name="Product_Name" required autofocus>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Price" class="col-md-4 col-form-label text-md-right">Harga</label>
                        <div class="col-md-6">
                            <input id="Price" type="number" step="0.01" class="form-control" name="Price" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Description" class="col-md-4 col-form-label text-md-right">Deskripsi</label>
                        <div class="col-md-6">
                            <textarea id="Description" class="form-control" name="Description" required></textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="image" class="col-md-4 col-form-label text-md-right">Gambar</label>
                        <div class="col-md-6">
                            <input id="image" type="file" class="form-control-file" name="image">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_kategori" class="col-md-4 col-form-label text-md-right">{{ __('Kategori') }}</label>
                        <div class="col-md-6">
                            <select id="id_kategori" class="form-control @error('id_kategori') is-invalid @enderror" name="id_kategori" required>
                                @foreach($kategori as $row)
                                    <option value="{{ $row->id_kategori }}">{{ $row->nama_kategori }}</option>
                                @endforeach
                            </select>
                            @error('id_kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

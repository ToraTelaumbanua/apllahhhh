@extends('backend.layout.main')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Tambah Produk') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('product.prosesTambah') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="Product_Name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Produk') }}</label>

                    <div class="col-md-6">
                        <input id="Product_Name" type="text" class="form-control" name="Product_Name" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Price" class="col-md-4 col-form-label text-md-right">{{ __('Harga') }}</label>

                    <div class="col-md-6">
                        <input id="Price" type="number" step="0.01" class="form-control" name="Price" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Qty" class="col-md-4 col-form-label text-md-right">{{ __('Kuantitas') }}</label>

                    <div class="col-md-6">
                        <input id="Qty" type="number" class="form-control" name="Qty" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Description" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>

                    <div class="col-md-6">
                        <textarea id="Description" class="form-control" name="Description" required></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Gambar') }}</label>

                    <div class="col-md-6">
                        <input id="image" type="file" class="form-control-file" name="image">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="KategoriAA" class="col-md-4 col-form-label text-md-right">{{ __('Kategori') }}</label>

                    <div class="col-md-6">
                        <input id="KategoriAA" type="text" class="form-control" name="KategoriAA" required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Simpan') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

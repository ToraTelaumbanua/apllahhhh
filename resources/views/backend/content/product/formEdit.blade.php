@extends('backend.layout.main')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Edit Produk') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('product.update', $product->id_product) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label for="Product_Name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Produk') }}</label>

                    <div class="col-md-6">
                        <input id="Product_Name" type="text" class="form-control" name="Product_Name" value="{{ $product->Product_Name }}" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Price" class="col-md-4 col-form-label text-md-right">{{ __('Harga') }}</label>

                    <div class="col-md-6">
                        <input id="Price" type="number" class="form-control" name="Price" value="{{ $product->Price }}" required>
                    </div>
                </div>

                <!-- Tambahkan bagian form lainnya seperti Kuantitas, Deskripsi, Gambar, Kategori -->
                <!-- ... -->

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

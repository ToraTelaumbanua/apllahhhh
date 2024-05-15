@extends('frontend.layout.main')
@section('content')
    <section class="py-5 bg-light">
        <div class="container px-5">
            <div class="row gx-5">
                <div class="col-xl-8">
                    <!-- Bikin code nya di sini -->
                    <div class="text-start mb-5 mb-xl-0">
                        <!-- Tambah teks dengan font khusus -->
                        <p style="font-family: 'Montserrat', sans-serif; font-size: 40px; font-weight: bold;">
                            Tentang kami<br>
                            menyediakan Kopi Berkualitas <br>
                            dan siap diantar
                        </p>
                        <p style="font-family: 'Montserrat', sans-serif; font-size: 14px;">
                            We are a company specializing in the creation and distribution of delicious<br>
                            beverages. Our flagship product is crafted with a secret recipe, carefully honed<br>
                            to perfection, and served to customers worldwide. With a vision centered<br>
                            on delivering the finest coffee drinks, we strive to exceed the expectations of our<br>
                            customers at every sip.
                        </p>
                        <div class="d-flex justify-content-end align-items-start mt-2" style="width: 100%;">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Coffee Shop" style="width: 350px; height: auto;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="col-xl-4">
                    <div class="card border-0 h-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog preview section-->
    <section class="py-5" style="background-color: #f6ebda;">
        <div class="container px-5">
            <div class="row gx-5">
                @foreach($berita as $row)
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ route('storage',$row->gambar_berita) }}" alt="{{$row->judul_berita}}" />
                            <div class="card-body p-4">
                                @if($row->kategori)
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">{{$row->kategori->nama_kategori}}</div>
                                @endif
                                <a class="text-decoration-none link-dark stretched-link" href="{{route('home.detailBerita',$row->id_berita)}}">
                                    <div class="h5 card-title mb-3">
                                        {{$row->judul_berita}}
                                    </div></a>
                                <p class="card-text mb-0">{!! substr($row->isi_berita, 0, 200) !!}</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="small">
                                            <div class="fw-bold">Admin</div>
                                            <div class="text-muted">{{$row->created_at}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

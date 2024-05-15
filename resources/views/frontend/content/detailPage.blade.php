@extends('frontend.layout.main')
@section('content')
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5">

                <div class="col-lg-12">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">
                                <p style="font-family: 'Montserrat', sans-serif; font-size: 65px; font-weight: bold;">
                                    Enjoy your <span style="color: #ff902a;">Coffee</span><br>
                                    before your<br>
                                    activity
                                </p>
                            </h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">{{$page->created_at}}</div>
                        </header>
                        <!-- Logo -->
                        <div class="text-center">
                            <div class="d-flex justify-content-end align-items-start mt-2" style="width: 100%;">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Coffee Shop" style="width: 350px; height: auto;">
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection

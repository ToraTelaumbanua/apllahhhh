<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link href="{{asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-5 col-lg-12 col-md-9">

            <div class="login_form_container o-hidden border-0 shadow-lg my-5">
                    <div class="login_form p-5">
                        <div class="logo-container">
                            <div class="logo">
                                <img src="assets/img/logo.png" alt="Logo" />
                              </div>
                        </div>
                        <div class="text-center">
                            <h1 class="h1 text-gray-900 mb-4">Login</h1>
                        </div>

                        @if(session()->has('pesan'))
                            <div class="alert alert-danger">
                                {{session()->get('pesan')}}
                            </div>
                        @endif

                        <form class="user" method="post" action="{{route('auth.verify')}}">
                            @csrf
                            <div class="input_group">
                                <i class="fa fa-user"></i> &nbsp; &nbsp;
                                <input type="email" name="email" class="form-control form-control-user"
                                       id="exampleInputEmail" aria-describedby="emailHelp"
                                       placeholder="Enter Email Address...">
                            </div>
                            <div class="input_group">
                                <i class="fa fa-unlock-alt"></i> &nbsp; &nbsp;
                                <input type="password" name="password" class="form-control form-control-user"
                                       id="exampleInputPassword" placeholder="Password">
                            </div>
                            <div class="input_group">
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                    <label class="custom-control-label" for="customCheck">Remember
                                        Me</label>
                                </div>
                            </div>
                            <input type="submit" value="Login" class="btn btn-primary btn-user btn-block">
                        </form>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="login.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script>

</body>

</html>

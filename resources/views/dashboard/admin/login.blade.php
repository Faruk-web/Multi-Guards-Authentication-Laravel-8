




@include('admin.body.main_masterlink')
<!doctype html>
<html lang="en">

  <head>
    
    <meta charset="utf-8">
    <title>Login | Admiria - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    

    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css') }}">
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css" rel="stylesheet" type="text/css') }}">
    <!-- App Css-->
    <link href="{{ asset('backend/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css') }}">

</head>

    <body>

        <!-- Loader -->
            <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

         <!-- Begin page -->
         <div class="accountbg" style="background: url('assets/images/bg.jpg');background-size: cover;background-position: center;"></div>

        <div class="account-pages mt-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-5 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mt-4">
                                    <div class="mb-3">
                                        <a href="index.html"><img src="{{ asset('backend') }}/assets/images/logo.png" height="30" alt="logo"></a>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h4 class="font-size-18 mt-2 text-center">Welcome Back !</h4>
                                    <p class="text-muted text-center mb-4">Sign in to continue to Admiria.</p>
    
                                    {{-- <form class="form-horizontal" action="index.html"> --}}
                                      {{-- <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                                        @csrf --}}

                                        <form action="{{ route('admin.check') }}" method="post">
                                            @if (Session::get('fail'))
                                                <div class="alert alert-danger">
                                                    {{ Session::get('fail') }}
                                                </div>
                                            @endif
                                            @csrf
    
                                        <div class="mb-3">
                                            <label class="form-label" for="username">email</label>
                                            <input type="text" class="form-control" id="email" name="email" tabindex="1" placeholder="Enter email" value="{{ old('email') }}" required autofocus>
                                        </div>
    
                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" tabindex="2"class="form-control" name="password" id="password" placeholder="password" value="{{ old('password') }}">
                                        </div>
    
                                        <div class="row mt-4">
                                            <div class="col-sm-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="customControlInline">
                                                    <label class="form-check-label" for="customControlInline">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-end">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                        </div>
    
                                        <div class="mb-0 row">
                                            <div class="col-12 mt-4">
                                                <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                            </div>
                                        </div>
                                    </form>
    
                                </div>
    
                            </div>
                        </div>
                        <div class="mt-5 text-center position-relative">
                            <p class="text-white">Don't have an account ? <a href="pages-register.html" class="fw-bold text-primary"> Signup Now </a> </p>
                            <p class="text-white"><script>document.write(new Date().getFullYear())</script> © Admiria. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>

                             
        <!-- JAVASCRIPT -->
     
        
        
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
        
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        
        <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
        
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
        

        <script src="{{ asset('backend/assets/js/app.js') }}"></script>
        

    </body>
</html>
























{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body style="background-color:#c8d9e8 !important">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px">
                 <h4>Admin Login</h4><hr>
                 <form action="{{ route('admin.check') }}" method="post">
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                     <div class="form-group">
                         <label for="email">Email</label>
                         <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                         <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                         <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Login</button>
                     </div>
                 </form>
            </div>
        </div>
    </div>
</body>
</html> --}}
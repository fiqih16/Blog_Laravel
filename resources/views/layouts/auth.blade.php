<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <title>{{ config('app.name') }} - @yield('title')</title>

   {{-- <link rel="stylesheet" href="{{ asset('vendor/my-auth/css/auth.css')}}"> --}}

   <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('vendor2/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('vendor2/bootstrap/css/bootstrap.min.css')}}"> --}}
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor2/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('vendor2/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}"> --}}
    <!--===============================================================================================-->
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('vendor2/animate/animate.css')}}"> --}}
    <!--===============================================================================================-->
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('vendor2/css-hamburgers/hamburgers.min.css')}}"> --}}
    <!--===============================================================================================-->
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('vendor2/animsition/css/animsition.min.css')}}"> --}}
    <!--===============================================================================================-->
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('vendor2/select2/select2.min.css')}}"> --}}
    <!--===============================================================================================-->
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('vendor2/daterangepicker/daterangepicker.css')}}"> --}}
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor2/css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor2/css/main.css')}}">
    <!--===============================================================================================-->

</head>

<body class="bg-white d-flex flex-column min-vh-100">
    @yield('login')
   {{-- <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
         <main>
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-5">
                     <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                           <h3 class="text-center font-weight-light my-4">
                            @yield('title')
                           </h3>
                        </div>
                        <div class="card-body">
                           @yield('content')
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
      </div>
      <div id="layoutAuthentication_footer">
         @include('layouts._auth.footer')
      </div>
   </div> --}}

   {{-- <script src="{{ asset('vendor/jquery/jquery-3.6.0.min.js') }}"></script>
   <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('vendor/my-auth/js/auth.js') }}"></script> --}}


   <!--===============================================================================================-->
	{{-- <script src="{{ asset('vendor2/jquery/jquery-3.2.1.min.js')}}"></script> --}}
    <!--===============================================================================================-->
        {{-- <script src="{{ asset('vendor2/animsition/js/animsition.min.js')}}"></script> --}}
    <!--===============================================================================================-->
        <script src="{{ asset('vendor2/bootstrap/js/popper.js')}}"></script>
        {{-- <script src="{{ asset('vendor2/bootstrap/js/bootstrap.min.js')}}"></script> --}}
    <!--===============================================================================================-->
        <script src="{{ asset('vendor2/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
        {{-- <script src="{{ asset('vendor2/daterangepicker/moment.min.js')}}"></script> --}}
        {{-- <script src="{{ asset('vendor2/daterangepicker/daterangepicker.js')}}"></script> --}}
    <!--===============================================================================================-->
        {{-- <script src="{{ asset('vendor2/countdowntime/countdowntime.js')}}"></script> --}}
    <!--===============================================================================================-->
        <script src="{{ asset('vendor2/js/main.js')}}"></script>
</body>

</html>

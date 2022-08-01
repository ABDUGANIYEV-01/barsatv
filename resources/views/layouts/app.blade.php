<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>

    .img2{
        width: 25%;
    }



    .img2:hover  {

        width: 70%;
        position: sticky;
        transition:         all .5s ease-in-out;
    }

</style>
</head>
<body style=" position: relative; background: rgb(58,106,180);
background: linear-gradient(90deg, rgba(58,106,180,1) 0%, rgba(253,29,29,1) 50%, rgba(69,165,252,1) 100%);">
    <div  id="app">



        <nav  style="background: rgb(63,94,251);
background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,89,1) 100%);  width: 100%; " class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">


            <div class="container color">
                <div ><a class="navbar-brand" href="{{ url('/') }}">
                        <img style="width: 150px;"  src=" {{ asset('logo/logo_mob.png') }} " alt="">
                    </a></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto w-100 d-flex justify-content-between">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li style="margin-left: auto" class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <ul class="navbar-nav me-auto">
                                <li   class="nav-item ">
                                    <a style="color: white;" class="nav-link " href="http://ball.tv/ballnews#  ">news</a>
                                </li>
                                <li class="nav-item">
                                    <a style="color: white;" class="nav-link" href="/videos">videos</a>
                                </li>
                                <li class="nav-item">
                                    <a style="color: white;" class="nav-link" href="/lives  ">live</a>
                                </li>

                            </ul>
                            <li class="nav-item dropdown">
                                <a style="color: white;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a style="color: white;" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul>

                        @endguest



                </div>
            </div>
        </nav>
        @guest

        @else

<div style="display: flex; max-width:max-content;height: 300px; ">

    <div class="img2"  >
        <img class="with" style=" height: 100%;width: 100% ;" src="{{ asset('o/01.jpg') }}" alt="">
    </div>


    <div class="img2">
        <img style="height: 100%;width: 100% " src="{{ asset('o/o2.jpg') }}" alt="">
    </div>
    <div class="img2">
        <img style="height: 100%;width: 100% " src="{{ asset('o/03.jpg') }}" alt="">
    </div>
    <div class="img2">
        <img style="height: 100%; width: 100%;" src="{{ asset('o/04.jpg') }}" alt="">
    </div>


</div>
            @csrf

        @endguest

        <main   class="py-4 ">

            <div style="" class="container">

                @yield('content')
                @yield('index')
                @yield('abaut')
                @yield('video')
                @yield('live')
            </div>
        </main>


    </div>
   <footer>
       <section class="">
           <!-- Footer -->
           <footer class="text-center text-white" style="background: rgb(63,94,251);
background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,89,1) 100%); ">
               <!-- Grid container -->
               <div class="container p-4 pb-0">
                   <!-- Section: CTA -->
                   <section class="">
                       <p class="d-flex justify-content-center align-items-center">
                           <span class="me-3">Register for free</span>
                           <button type="button" class="btn btn-outline-light btn-rounded">
                               Sign up!
                           </button>
                       </p>
                   </section>
                   <!-- Section: CTA -->
               </div>
               <!-- Grid container -->

               <!-- Copyright -->
               <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                   © 2020 Copyright:
                   <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
               </div>
               <!-- Copyright -->
           </footer>
           <!-- Footer -->
       </section>
   </footer>
</body>

</html>

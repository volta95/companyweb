<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zealous It solution</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://unpkg.com/bootstrap-table@1.15.2/dist/bootstrap-table.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

        <!--animated css for animation------>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
             <!--owl carousel for slides------>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />

        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/2e5f65967e.js" crossorigin="anonymous"></script>


        <link href="{{ asset('css/panel.css') }}" rel="stylesheet">
        <!-- Styles -->
</head>
<body>



                    <!-- Right Side Of Navbar -->

                        <!-- Authentication Links -->
                        @guest
                        <main id="auth-main" class="bg-parallax">
                            @yield('content')
                        </main>
                        @else
                        <div id="app">
                        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
                            <div class="container">
                                <a class="navbar-brand" href="{{ url('/') }}">
                                    {{ config('app.name', 'Laravel') }}
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <!-- Left Side Of Navbar -->
                                    <ul class="navbar-nav mr-auto">

                                    </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fname . ' '.Auth::user()->lname }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="contents">
            <div id="side-bar">
                <div style="position:fixed">
                    <div style="position:relative">
                <div class="profile">
                    <div class="row">
                    <div class="col-lg-4 col-md-4">
                    <img src="{{Storage::url(Auth::user()->images)}}" class="round-pic">
                    </div>
                    <div class="col-lg-8 col-md-8">
                <h6><span class="welcome">Welcome,</span><br>{{ Auth::user()->fname . ' '.Auth::user()->lname }}<i class="fas icon-dropdwn fa-caret-down"></i></h6>
                    </div>
                    </div>
                </div>
                <div class="side-nav">
                    <ul>
                        <li><a href=""><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                        <li><a href=""><i class="fas fa-envelope"></i>Inbox App</a></li>
                        <li><a href="enquire"><i class="fas fa-inbox"></i>Enquires</a></li>
                        <li><a href="chat"><i class="fas fa-comments"></i>Chat App</a></li>
                        <div class="drpdwn-side">
                        <li><a class="drpwn-bottn" href="#"><i class="fas fa-briefcase"></i>Projects</a></li>
                        <div id="drpdwn-list" class="hide">
                                <li><a href=""><i class="fas fa-list"></i>View Projects</a></li>
                                <li><a href=""><i class="fas fa-plus-circle"></i>Add Projects</a></li>
                        </div>
                            </div>

                        <li><a href=""><i class="fas fa-handshake"></i>Clients</a></li>
                        <li><a href=""><i class="fas fa-globe"></i>Social</a></li>
                        <li><a href=""><i class="fas fa-users"></i>Employee</a></li>
                    <ul>
                </div>
                    </div>
              </div>
            </div>
            <main class="py-4">
                @yield('content')
            </main>
        </div>

    </div>
        @endguest

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/counter.js') }}" defer></script>

    <!--backstretch js-->
    <script src="{{ asset('js/backstretch.js') }}" defer></script>
    <!--ease js-->
    <script src="{{ asset('js/ease.js') }}" defer></script>

    <!-- Scripts -->
    <script src="{{ asset('js/script.js') }}" defer></script>
        </body>
    </html>

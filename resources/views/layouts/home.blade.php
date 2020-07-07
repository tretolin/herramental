<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'RentTracker') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/doughnut.js') }}"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">

                    <button class="item-contact-mobile show-contact navbar-toggler border-0 font-weight-bold" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="navbar-brand p-0 d-md-none" href="{{ url('/') }}">
                        <img width="100" src="{{ asset('images/rentracker-logo.png') }}" />
                    </a>

                    <div class="collapse navbar-collapse d-none d-md-block" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <a class="navbar-brand p-0 d-none d-md-block float-right"href="{{ url('/') }}">
                                <img width="100" src="{{ asset('images/rentracker-logo.png') }}" />
                            </a>
                        </ul>

                        <ul class="navbar-nav ml-auto">
                            @guest
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            @else
                                    <a class="link-green item-contact" href="#">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="contact-info text-blue shadow p-2 px-3 pt-3 pb-4 size-16 c-pointer" style="display: none">
                                        <div>Contacto:</div>
                                        <div class="font-weight-bold d-block">Ramiro A. Elizondo</div>
                                        <div class="font-weight-bold d-block">relizondo@herramental.com</div>
                                    </div>

                                    <a class="link-green" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="ml-4 icon material-icons">exit_to_app</i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            
            <div class="contact-info-mobile left-side text-blue shadow p-4 size-16 c-pointer" style="display: none">
                        <div class="c-pointer font-weight-bold mb-4">Realizar pago</div>
                        <div>Contacto:</div>
                        <div class="font-weight-bold d-block">Ramiro A. Elizondo</div>
                        <div class="font-weight-bold d-block mb-4">relizondo@herramental.com</div>
                        <div class="mt-2">
                            <a class="link-green d-inline" href="{{ route('logout') }}">
                                <i class="icon material-icons">exit_to_app</i>
                            </a>
                            <a class="link-green d-inline"style="vertical-align: 6px" href="{{ route('logout') }}">Salir</a>
                        </div>
                    </div>

            <main class="py-4">
                @yield('content')
            </main>
        </div>
        <style lang="css">
            body .modal-container {
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .modal-dialog {
                margin:0;
            }
        </style>
    </body>
</html>

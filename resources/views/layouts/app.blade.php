<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Atavism CMS') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
        <header class="app-header navbar">
            <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="/home">
                {{ config('app.name', 'Atavism CMS') }}
            </a>

            <ul class="nav navbar-nav d-md-down-none" style="display:none;">
                <li class="nav-item px-3">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="#">Users</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="#">Settings</a>
                </li>
            </ul>

            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                        <img class="img-avatar" src="{{ "https://www.gravatar.com/avatar/" . md5( strtolower( trim( Auth::user()->email ) ) ) . "&s=48" }}" alt="{{ Auth::user()->name }}">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header text-center">
                            <strong>Account</strong>
                        </div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <i class="fa fa-lock"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </header>
        <div class="app-body">
            <div class="sidebar">
                <nav class="sidebar-nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">
                                <i class="nav-icon icon-speedometer"></i> Dashboard
                            </a>
                        </li>

                        <li class="nav-title">Game content</li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home">
                                <i class="nav-icon icon-pencil"></i> Quests
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <main class="main" id="app">
                <!-- Breadcrumb-->
                @section('breadcrumb')
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/home">Home</a>
                    </li>

                    <!-- Breadcrumb Menu-->
                    <!-- li class="breadcrumb-menu d-md-down-none">
                        <div class="btn-group" role="group" aria-label="Button group">
                            <a class="btn" href="#">
                                <i class="icon-speech"></i>
                            </a>
                            <a class="btn" href="./"><i class="icon-graph"></i>  Dashboard</a>
                            <a class="btn" href="#"><i class="icon-settings"></i>  Settings</a>
                        </div>
                    </li -->
                </ol>
                @show

                <div class="container-fluid">
                    <div class="animated fadeIn">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
        <footer class="app-footer">
            <div>
                <a href="https://github.com/kimselius/atavism-cms">Atavism CMS</a>
                <span>&copy; 2018</span>
            </div>
            <div class="ml-auto">
                <span>Powered by</span>
                <a href="https://coreui.io" target="_blank">CoreUI</a>
                and
                <a href="https://laravel.com" target="_blank">Laravel</a>
            </div>
        </footer>
    </body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        @import 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet';

        :root {
            --dk-gray-100: #F3F4F6;
            --dk-gray-200: #E5E7EB;
            --dk-gray-300: #D1D5DB;
            --dk-gray-400: #9CA3AF;
            --dk-gray-500: #6B7280;
            --dk-gray-600: #4B5563;
            --dk-gray-700: #374151;
            --dk-gray-800: #1F2937;
            --dk-gray-900: #111827;
            --dk-dark-bg: #313348;
            --dk-darker-bg: #2a2b3d;
            --navbar-bg-color: #6f6486;
            --sidebar-bg-color: #252636;
            --sidebar-width: 250px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--dk-darker-bg);
            font-size: .925rem;
        }

        #wrapper {
            margin-left: var(--sidebar-width);
            transition: all .3s ease-in-out;
        }

        #wrapper.fullwidth {
            margin-left: 0;
        }



        /** --------------------------------
        -- Sidebar
        -------------------------------- */
        .sidebar {
            background-color: var(--sidebar-bg-color);
            width: var(--sidebar-width);
            transition: all .3s ease-in-out;
            transform: translateX(0);
            z-index: 9999999
        }

        .sidebar .close-aside {
            position: absolute;
            top: 7px;
            right: 7px;
            cursor: pointer;
            color: #EEE;
        }

        .sidebar .sidebar-header {
            border-bottom: 1px solid #2a2b3c
        }

        .sidebar .sidebar-header h5 a {
            color: var(--dk-gray-300)
        }

        .sidebar .sidebar-header p {
            color: var(--dk-gray-400);
            font-size: .825rem;
        }

        .sidebar .search .form-control ~ i {
            color: #2b2f3a;
            right: 40px;
            top: 22px;
        }

        .sidebar > ul > li {
            padding: .7rem 1.75rem;
        }

        .sidebar ul > li > a {
            color: var(--dk-gray-400);
            text-decoration: none;
        }

        /* Start numbers */
        .sidebar ul > li > a > .num {
            line-height: 0;
            border-radius: 3px;
            font-size: 14px;
            padding: 0px 5px
        }

        .sidebar ul > li > i {
            font-size: 18px;
            margin-right: .7rem;
            color: var(--dk-gray-500);
        }



        /* Start dropdown menu */
        .sidebar ul .sidebar-dropdown {
            padding-top: 10px;
            padding-left: 30px;
            display: none;
        }
        .sidebar ul .sidebar-dropdown.active {
            display: block;
        }

        .sidebar ul .sidebar-dropdown > li > a {
        font-size: .85rem;
            padding: .5rem 0;
            display: block;
        }
        /* End dropdown menu */

        .show-sidebar {
            transform: translateX(-270px);
        }

        @media (max-width: 767px) {
            .sidebar ul > li {
                padding-top: 12px;
                padding-bottom: 12px;
            }

            .sidebar .search {
                padding: 10px 0 10px 30px
            }
        }
        .hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between > div:nth-child(1) > p {m}
        .hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between > div:nth-child(2) {display: none;}
    </style>
</head>
<body class="bg-dark admin">
    <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand text-light" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('admin.login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link text-light dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
        <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
        <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
          <img
               class="rounded-pill img-fluid mr-3"
               width="65"
               src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance"
               alt="">
          <div class="ms-2">
            <h5 class="fs-6 mb-0">
              <a class="text-decoration-none">{{ Auth::user()->name }}</a>
            </h5>
          </div>
        </div>

        <ul class="list-unstyled">
          <li class="has-dropdown">
            <a href="{{ route('admin.home') }}"> Home</a>
          </li>
          <li class="has-dropdown">
            <a href="{{ route('admin.course.all') }}"> Courses</a>
          </li>
          <li class="has-dropdown">
            <a href="{{ route('admin.teacher.all') }}"> Teachers</a>
          </li>
          <li class="has-dropdown">
            <a href="{{ route('admin.user.all') }}"> Users</a>
          </li>

        </ul>
      </aside>

      <section id="wrapper" class="py-5">
            <div class="container-fluid">
                <div class=" bg-white rounded shadow p-3">
                    @yield('content')
                </div>
            </div>
      </section>
</body>
</html>

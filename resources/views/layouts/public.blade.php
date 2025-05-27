<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield("title", "Vinarija Miković")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSS --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/theme-1.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />

    {{-- Dugmad za auth --}}
    <style>
        .btn-wine {
            display: inline-block;
            padding: 8px 20px;
            margin-left: 10px;
            font-weight: 600;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 16px;
            text-decoration: none;
            border-radius: 30px;
            background: #7b1f27;
            color: #f7e9e9;
            box-shadow: 0 4px 12px rgba(123, 31, 39, 0.5);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            border: 2px solid transparent;
            cursor: pointer;
        }

        .btn-wine:hover {
            background-color: #a6323a;
            box-shadow: 0 6px 16px rgba(166, 50, 58, 0.7);
            text-decoration: none;
            color: #fff;
        }

        .btn-wine-register {
            background: #5a131a;
            border-color: #a6323a;
        }

        .btn-wine-register:hover {
            background-color: #7b1f27;
            border-color: #f7e9e9;
            color: #fff;
        }

        @media (max-width: 576px) {
            .auth-links {
                position: static;
                text-align: center;
                margin: 15px 0;
            }
            .btn-wine {
                margin: 5px 10px;
            }
        }

        body {
            background-image: url('{{ asset('img/main_image.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .main-container {
            background-color: rgba(255, 255, 255, 0.6);
            padding: 2rem;
            border-radius: 10px;
            margin-top: 130px;
        }

        .nav-container {
            background-color: rgba(0, 0, 0, 0.6);
        }

        .nav-container a {
            color: #000000 !important;
        }
    </style>

    {{-- Fontovi --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Raleway:700" rel="stylesheet" />
</head>
<body>

    {{-- Dugmad za auth --}}
    @if (Route::has('login'))
      <div class="auth-links" style="position: fixed; top: 20px; right: 20px; z-index: 1000;">
          @auth
              <a href="{{ url('/dashboard') }}" class="btn-wine">Dashboard</a>
          @else
              <a href="{{ route('login') }}" class="btn-wine">Log in</a>
              @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="btn-wine btn-wine-register">Register</a>
              @endif
          @endauth
      </div>
    @endif

    {{-- Navigacija --}}
    <div class="nav-container">
        <nav class="centered-logo top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="{{ url('/') }}">
                            <img class="logo logo-dark" alt="Logo" src="{{ asset('img/logotype_dark.png') }}">
                        </a>
                    </div>
                </div>

                <div class="row nav-menu">
                    <div class="col-sm-12 columns text-center">
                        <ul class="menu">
                            <li><a href="{{ url('/') }}">Ponuda Mjeseca</a></li>
                            <li><a href="{{ route('katalog') }}">Katalog</a></li>
                            <li><a href="{{ url('/onama') }}">O nama</a></li>
                            <li><a href="{{ url('/kontakt') }}">Kontakt</a></li>
                        </ul>
                    </div>
                </div>

                <div class="mobile-toggle">
                    <i class="icon icon_menu"></i>
                </div>
            </div>
            <div class="bottom-border"></div>
        </nav>
    </div>

    {{-- Sadržaj --}}
    <main class="main-container py-5">
        @yield("content")
    </main>

    {{-- Footer --}}
    <footer class="short bg-secondary-1 text-center py-4">
        <p class="text-white mb-0">&copy; {{ date('Y') }} Miković Vinarija</p>
    </footer>

    {{-- JS --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>

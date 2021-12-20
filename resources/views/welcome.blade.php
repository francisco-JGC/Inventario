<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('style/login.css')}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <section>
        <div class="blob">
            <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                width="100%" id="blobSvg">
                <defs>
                    <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" style="stop-color: rgb(238, 205, 163);"></stop>
                        <stop offset="100%" style="stop-color: rgb(239, 98, 159);"></stop>
                    </linearGradient>
                </defs>
                <path fill="url(#gradient)">
                    <animate attributeName="d" dur="10000ms" repeatCount="indefinite" values="
                        M368.5,309.5Q369,369,309.5,429.5Q250,490,167,453Q84,416,116.5,333Q149,250,171.5,222Q194,194,222,107.5Q250,21,312.5,73Q375,125,371.5,187.5Q368,250,368.5,309.5Z;
                        
                        M384.5,300Q350,350,300,349.5Q250,349,188,361.5Q126,374,113.5,312Q101,250,109,183.5Q117,117,183.5,97.5Q250,78,280.5,133.5Q311,189,365,219.5Q419,250,384.5,300Z;

                        M368.5,309.5Q369,369,309.5,429.5Q250,490,167,453Q84,416,116.5,333Q149,250,171.5,222Q194,194,222,107.5Q250,21,312.5,73Q375,125,371.5,187.5Q368,250,368.5,309.5Z;

                        "></animate>
                </path>
            </svg>
        </div>

        <div class="blob">
            <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                width="100%" id="blobSvg">
                <defs>
                    <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" style="stop-color: rgb(233, 100, 67);"></stop>
                        <stop offset="100%" style="stop-color: rgb(144, 78, 149);"></stop>
                    </linearGradient>
                </defs>
                <path id="blob" fill="url(#gradient)">
                    <animate attributeName="d" dur="10000ms" repeatCount="indefinite" values="
                        M448.5,289.5Q400,329,384.5,375.5Q369,422,319,415Q269,408,226,417Q183,426,145.5,401Q108,376,72.5,339.5Q37,303,69,258Q101,213,118,180.5Q135,148,152,92Q169,36,222,42Q275,48,321,64.5Q367,81,378.5,128.5Q390,176,443.5,213Q497,250,448.5,289.5Z;

                        M401.5,289.5Q401,329,377.5,365Q354,401,313,418Q272,435,232.5,417.5Q193,400,131,405Q69,410,82.5,349Q96,288,54,239.5Q12,191,55,153Q98,115,143,101Q188,87,232.5,59Q277,31,316.5,63.5Q356,96,384.5,130.5Q413,165,407.5,207.5Q402,250,401.5,289.5Z;

                        M448.5,289.5Q400,329,384.5,375.5Q369,422,319,415Q269,408,226,417Q183,426,145.5,401Q108,376,72.5,339.5Q37,303,69,258Q101,213,118,180.5Q135,148,152,92Q169,36,222,42Q275,48,321,64.5Q367,81,378.5,128.5Q390,176,443.5,213Q497,250,448.5,289.5Z;

                    "></animate>
                </path>
            </svg>
        </div>

        <div class="blob">
            <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                width="100%" id="blobSvg">
                <defs>
                    <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" style="stop-color: rgb(194, 229, 156);"></stop>
                        <stop offset="100%" style="stop-color: rgb(100, 179, 244);"></stop>
                    </linearGradient>
                </defs>
                <path id="blob" fill="url(#gradient)">
                    <animate attributeName="d" dur="10000ms" repeatCount="indefinite" values="
                        M305,349.5Q135,449,134,248.5Q133,48,304,149Q475,250,305,349.5Z;

                        M306.5,357Q126,464,131,258Q136,52,311.5,151Q487,250,306.5,357Z;

                        M305,349.5Q135,449,134,248.5Q133,48,304,149Q475,250,305,349.5Z;

                    "></animate>
                </path>
            </svg>
        </div>
    </section>


    <div class="main">
        <div class="decoration-left">
            <div class="decoration-left-top">
                <img src="{{asset('img/marca_color1.gif')}}" alt="">
                <h4>
                    {{ __('Farmacia HJ') }}
                </h4>
            </div>
            <div class="decoration-left-bottom">

            </div>
        </div>
        <div class="login">
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form class="form" id="register" method="POST" action="{{ route('login') }}">
                @csrf

                <h2>{{__('Iniciar Sesion')}}</h2>

                <br>
                <br>
                <div class="box">
                    <input type="email" name="email" id="email" required autofocus>
                    <div class="underline"></div>
                    <label for="email">{{__('Correo')}}</label>
                </div>
                <br>
                <div class="box">
                    <input type="password" name="password" id="password" required>
                    <div class="underline"></div>
                    <label for="password">{{__('Contraseña')}}</label>
                </div>
                <br><br><br>

                <button type="submit">{{__('Iniciar Sesion')}}</button>

            </form>
        </div>
        <div class="decoration-right">
            <div class="decoration-right-top">
            </div>
            <div class="decoration-right-bottom">

            </div>
        </div>
    </div>
    <!--     
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>

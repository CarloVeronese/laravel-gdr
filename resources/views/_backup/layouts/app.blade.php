<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="vh-100 d-flex flex-column">
    <header>
        <div class="container py-1">
            <div class="row">
                <div class="col-auto me-auto">
                    Game session 4
                </div>
                <nav class="col-auto">
                    <ul class="d-flex gap-2">
                        {{-- <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li> --}}
                        <li>
                            <a href="{{ route('characters.index') }}">Characters</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="flex-grow-1">
        @yield('content')
    </main>



</body>

</html>
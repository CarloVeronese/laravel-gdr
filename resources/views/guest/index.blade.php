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

<body>

    <section class="main-section">
        <div class="container my-3">
            <div class="row gap-2">
                <h2 class="text-center">
                    Characters
                </h2>
                <table class="table table-primary table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Bio</th>
                            <th scope="col">Defence</th>
                            <th scope="col">Speed</th>
                            <th scope="col">Hp</th>
                            <th scope="col">Strenght</th>
                            <th scope="col">Class</th>
                        </tr>
                    </thead>
                    @forelse ($characters as $character)
                        <tbody>
                            <tr>
                                <td>{{ $character->name }}</td>
                                <td>{{ $character->bio }}</td>
                                <td>{{ $character->defense }}</td>
                                <td>{{ $character->speed }}</td>
                                <td>{{ $character->hp }}</td>
                                <td>{{ $character->strength }}</td>
                                <td>{{ $character->class }}</td>
                            </tr>
                        @empty
                            non ci sono risultati
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>


</body>

</html>

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

    <main>

        <section class="py-5">
            <div class="container">
                <div class="row gap-3 justify-content-center">
                    @foreach($movies as $movie) 
                    <div class="col-4 text-center">
                        <div class="card p-3 d-flex justify-content-center">
                            <h1 class="card_title"> {{ $movie->title }} </h1>
                            @if ($movie->title != $movie->original_title)

                                <p class="m-0">{{ $movie->original_title }}</p>
    
                            @endif
                            <ul class="list-unstyled">
                                <li>Nazionalit&agrave;: {{ $movie->nationality }}</li>
                                <li>Data: {{ $movie->date }}</li>
                                <li>Voto: {{ $movie->vote }} </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
    
            </div>
        </section>
       
    </main>

</body>

</html>
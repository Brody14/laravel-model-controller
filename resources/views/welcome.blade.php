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

        <section class="p-5">
            <div class="container">
                <div class="row gap-2">
                    @foreach($movies as $movie) 
                    <div class="col-12 text-center">
                        <div class="card p-2">
                            <h1> {{ $movie->title }} </h1>
                            @if ($movie->title != $movie->original_title)

                                <h4> {{ $movie->original_title }} </h4>
    
                            @endif
                            <p class="m-0"> Nazionalit&agrave;: {{ $movie->nationality }} </p>
                            <p class="m-0"> Data: {{ $movie->date }} </p>
                            <p class="m-0"> Voto: {{ $movie->vote }} </p>
                        </div>
                    </div>
                    @endforeach
                </div>
    
            </div>
        </section>
       
    </main>

</body>

</html>
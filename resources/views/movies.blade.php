<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-model-controller</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lista film</h1>
        {{-- {{dd($movies)}} --}}
        <ul>
            @foreach ($movies as $this_movie)
                <li>
                    <h3>{{ $this_movie->title }}</h3>
                    <p>Original title: {{ $this_movie->original_title }}</p>
                    <p>Paese d'origine: {{ $this_movie->nationality }}</p>
                    <p>Data rilascio: {{ $this_movie->date }}</p>
                    <p>Vote: {{ $this_movie->vote }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
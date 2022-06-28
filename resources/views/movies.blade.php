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

<h1>Lista film</h1>
{{-- {{dd($movies)}} --}}
<ul>
    @foreach ($movies as $this_movie)
        <li>{{$this_movie->title}}</li>
    @endforeach
</ul>
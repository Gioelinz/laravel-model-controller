@extends('layouts.main')


@section('content')
    <div class="container">

        <div class="row">
            @forelse ($movies as $movie)
                <div class="col-4">
                    <div class="card border-info my-3">
                        <div class="card-header fs-5">{{ $movie->title }}</div>
                        <div class="card-body">
                            <h5 class="card-title">Vote: {{ $movie->vote }}</h5>
                            <p class="card-text">Published: {{ date('d M Y', strtotime($movie->date)) }}</p>
                            <a href="{{ route('movies.show', ['id' => $movie->id]) }}" class="card-link">See More</a>
                        </div>
                    </div>
                </div>

            @empty
                <h1 class="text-center">Non ci sono Film!</h1>
            @endforelse
        </div>
    </div>
@endsection

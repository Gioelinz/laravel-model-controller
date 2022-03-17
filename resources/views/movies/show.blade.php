@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="card border-success my-5">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }} | {{ $movie->nationality }}</h6>
                <p class="card-text">Date of publish: <span
                        class="text-decoration-underline">{{ date('d M Y', strtotime($movie->date)) }}</span></p>
                <h6 class="card-title">Vote: {{ $movie->vote }}</h6>

            </div>
        </div>
    </div>
@endsection

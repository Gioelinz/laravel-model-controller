@extends('layouts.main')


@section('content')
    <div class="container text-center">
        <h1 class="my-5">Welcome to My Movies</h1>
        <a href="{{ route('movies.index') }}" class="btn btn-success">Show Movies</a>
    </div>
@endsection

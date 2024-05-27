@extends('layouts.app')

@section('content')
    <div class="container form-container position-relative">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>{{ isset($movie) ? 'Edit Movie' : 'Add Movie' }}</h1>
            <div class="action-buttons">
                @if(isset($movie))
                    <form action="{{ url('movies/' . $movie->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-secondary btn-lg">Delete</button>
                    </form>
                @endif
                <button type="submit" form="movie-form" class="btn btn-lg btn-primary">Save</button>
            </div>
        </div>
        <form id="movie-form" method="POST" action="{{ isset($movie) ? url('movies/' . $movie->id) : url('movies') }}">
            @csrf
            @if(isset($movie))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $movie->title ?? '') }}" required>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="director">Director</label>
                <input type="text" class="form-control @error('director') is-invalid @enderror" id="director" name="director" value="{{ old('director', $movie->director ?? '') }}" required>
                @error('director')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="summary">Summary</label>
                <textarea class="form-control @error('summary') is-invalid @enderror" id="summary" name="summary" maxlength="100">{{ old('summary', $movie->summary ?? '') }}</textarea>
                @error('summary')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="genres">Genres</label>
                <div>
                    @foreach (['Drama', 'Action', 'Animation', 'Sci-Fi', 'Horror'] as $genre)
                        <label class="btn btn-outline-primary @if(old('genres') && in_array($genre, old('genres'))) active @elseif(isset($movie) && in_array($genre, json_decode($movie->genres))) active @endif">
                            <input type="checkbox" name="genres[]" value="{{ $genre }}" @if(old('genres') && in_array($genre, old('genres'))) checked @elseif(isset($movie) && in_array($genre, json_decode($movie->genres))) checked @endif> {{ $genre }}
                        </label>
                    @endforeach
                </div>
                @error('genres')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <a href="{{ url('/') }}" class="btn btn-secondary">Back to Home</a>
            </div>
        </form>
    </div>
@endsection

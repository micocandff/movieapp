@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Movies Collection</h1>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <input class="form-control mb-4" id="search" type="text" placeholder="Search by title...">
        <div id="movie-list">
            @foreach ($movies as $movie)
                <div class="movie-card">
                    <a href="{{ url('movies/' . $movie->id . '/edit') }}" class="d-block text-decoration-none text-dark mb-3">                        
                        <h4 class="movie-title">{{ $movie->title }}</h4>
                        <p><strong>{{ $movie->director }}</strong></p>
                        <p>{{ implode(' / ', json_decode($movie->genres)) }}</p>                        
                    </a>
                </div>
            @endforeach
        </div>
        </div>
            <a href="{{ url('movies/create') }}" class=" btn btn-primary btn-floating float-right">+</a>
        </div>  
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#search').on('input', function() {
                var query = $(this).val();
                $.ajax({
                    url: '{{ route('movies.search') }}',
                    type: 'GET',
                    data: { q: query },
                    success: function(data) {
                        $('#movie-list').empty();
                        if (data.length === 0) {
                            $('#movie-list').append('<p>No movies found</p>');
                        } else {
                            data.forEach(function(movie) {
                                var movieCard = `
                                    <div class="movie-card">
                                        <a href="/movies/${movie.id}/edit" class="d-block text-decoration-none text-dark mb-3">
                                            <div class="card p-3">
                                                <h4 class="movie-title">${movie.title}</h4>
                                                <p><strong>${movie.director}</strong></p>
                                                <p>${JSON.parse(movie.genres).join(' / ')}</p>
                                            </div>
                                        </a>
                                    </div>
                                `;
                                $('#movie-list').append(movieCard);
                            });
                        }
                    }
                });
            });
        });
    </script>
@endsection

@extends('layout')

@section('content')
    <div class="container">
        <h2>Watchlist</h2>
        <div class="row">
            @foreach ($movieData as $movie)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/' . $movie['foto_sampul']) }}" class="card-img-top"
                            alt="{{ $movie['judul'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie['judul'] }}</h5>
                            <p class="card-text">{{ $movie['sinopsis'] }}</p>
                            <p>Tahun: {{ $movie['tahun'] }}</p>
                            <p>Pemain: {{ implode(', ', $movie['pemain']) }}</p>
                            <a href="{{ route('detail', ['id' => $movie['id']]) }}" class="btn btn-success">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

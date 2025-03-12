@extends('layout')

@section('content')
    <div class="mt-4">
        <div class="row">
            @foreach ($movieData as $movie)
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset('images/' . $movie['foto_sampul']) }}" class="card-img"
                                    alt="{{ $movie['judul'] }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $movie['judul'] }}</h5>
                                    <p class="card-text">{{ $movie['sinopsis'] }}</p>
                                    <a href="{{ route('detail', ['id' => $movie['id']]) }}"
                                        class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

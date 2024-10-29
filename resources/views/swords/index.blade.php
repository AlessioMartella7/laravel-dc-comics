@extends('layouts.app')

@section('page-title', 'Swords')

@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-5 text-warning">
                    Swords
                </h1>
            </div>
            <div class="row">
                @forelse ($swords as $sword)
                    <div class="col-3 mb-4">
                        <div class="card">
                            <img src="{{ $sword['image'] }}" class="card-img-top" alt="{{ $sword['name'] }}"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $sword['name'] }}</h5>
                                <p class="card-text"><strong>Weight:</strong> {{ $sword['weight'] }} kg</p>
                                <p class="card-text"><strong>Length:</strong> {{ $sword['length'] }} cm</p>
                                <p class="card-text"><strong>Material:</strong> {{ $sword['material'] }}</p>
                                <p class="card-text"><strong>Type:</strong> {{ $sword['type'] }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-warning" role="alert">
                            No swords found.
                        </div>
                    </div>
                @endforelse
            </div>


        </div>
    </div>

@endsection

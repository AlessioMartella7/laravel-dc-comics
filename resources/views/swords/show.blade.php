@extends('layouts.app')

@section('page-title', 'Sword Show')

@section('main-content')

    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-12">
                <h1 class="text-center my-5 text-warning">
                    Sword Show
                </h1>
            </div>
            <div class="col-5 mb-4">
                <div class="card bg-dark border border-warning">
                    <img src="{{ $sword['image'] }}" class="card-img-top" alt="{{ $sword['name'] }}"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body bg-dark text-warning">
                        <h5 class="card-title">{{ $sword['name'] }}</h5>
                        <p class="card-text"><strong>Weight:</strong> {{ $sword['weight'] }} kg</p>
                        <p class="card-text"><strong>Length:</strong> {{ $sword['length'] }} cm</p>
                        <p class="card-text"><strong>Material:</strong> {{ $sword['material'] }}</p>
                        <p class="card-text"><strong>Type:</strong> {{ $sword['type'] }}</p>
                    </div>
                </div>
            </div>


        @endsection

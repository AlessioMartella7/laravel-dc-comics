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
            <div class="row mb-5">
                @forelse ($swords as $sword)
                    <div class="col-3 mb-4">
                        <a href="{{ route('sword.show', $sword['id']) }}">
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
                                <div class="d-flex justify-content-start">
                                    <div>
                                        <a href="{{ route('sword.edit', $sword->id) }}"><button
                                                class="btn btn-warning fw-bold m-2" type="submit">Edit</button></a>
                                    </div>

                                    <form action="{{ route('sword.delete', $sword->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger fw-bold m-2 text-black" type="submit">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </a>
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

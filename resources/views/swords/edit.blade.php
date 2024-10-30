@extends('layouts.app')

@section('page-title', 'Sword Editing')

@section('main-content')

    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-12">
                <h1 class="text-center my-5 text-warning">
                    Sword Create
                </h1>
            </div>
            <div class="col-6 mb-4">
                <form class="row g-3" method="POST" action="{{ route('swords.update') }}">
                    @method('PUT')
                    @csrf

                    <div class="col-12">
                        <label for="sword-name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="sword-name" placeholder="Sword Name" name="name"
                            value="{{ $sword->name }}">
                    </div>
                    <div class="col-12">
                        <label for="sword-weight" class="form-label">Weight</label>
                        <input type="text" class="form-control" id="sword-weight" placeholder="Sword Weight"
                            name="weight" value="{{ $sword->weight }}">
                    </div>
                    <div class="col-12">
                        <label for="sword-image" class="form-label">Image Url</label>
                        <input type="text" class="form-control" id="sword-image" placeholder="Sword Image Url"
                            name="image" value="{{ $sword->image }}">
                    </div>
                    <div class="col-12">
                        <label for="sword-length" class="form-label">Length</label>
                        <input type="text" class="form-control" id="sword-length" placeholder="Sword Length"
                            name="length" value="{{ $sword->length }}">
                    </div>
                    <div class="col-12">
                        <label for="sword-material" class="form-label">Material</label>
                        <input type="text" class="form-control" id="sword-material" placeholder="Sword Material"
                            name="material" value="{{ $sword->material }}">
                    </div>
                    <div class="col-12">
                        <label for="sword-type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="sword-type" placeholder="Sword Type" name="type"
                            value="{{ $sword->type }}">
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <div class="col-2">
                            <a href="{{ route('swords.update', $sword->id) }}" class="btn btn-primary">Edit</a>
                        </div>
                        <div class="col-2">
                            <button type="reset" class="btn btn-warning">Clear</button>
                        </div>
                    </div>
                </form>
            @endsection

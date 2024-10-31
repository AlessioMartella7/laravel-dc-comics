@extends('layouts.app')

@section('page-title', 'Sword Editing')

@section('main-content')

    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-12">
                <h1 class="text-center my-5 text-warning">
                    Sword Editing
                </h1>
            </div>
            <div class="col-6 mb-4">
                <form class="row g-3" method="POST" action="{{ route('sword.update', $sword['id']) }}">
                    @method('PUT')
                    @csrf

                    <div class="col-12">
                        <label for="sword-name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="sword-name" placeholder="Sword Name" name="name"
                            value="{{ old('name', $sword->name) }}">
                        @error('name')
                            <div class="alert alert-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="sword-weight" class="form-label">Weight</label>
                        <input type="text" class="form-control" id="sword-weight" placeholder="Sword Weight"
                            name="weight" value="{{ old('weight', $sword->weight) }}">
                        @error('weight')
                            <div class="alert alert-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="sword-image" class="form-label">Image Url</label>
                        <input type="text" class="form-control" id="sword-image" placeholder="Sword Image Url"
                            name="image" value="{{ old('image', $sword->image) }}">
                        @error('image')
                            <div class="alert alert-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="sword-length" class="form-label">Length</label>
                        <input type="text" class="form-control" id="sword-length" placeholder="Sword Length"
                            name="length" value="{{ old('length', $sword->length) }}">
                        @error('length')
                            <div class="alert alert-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="sword-material" class="form-label">Material</label>
                        <input type="text" class="form-control" id="sword-material" placeholder="Sword Material"
                            name="material" value="{{ old('material', $sword->material) }}">
                        @error('material')
                            <div class="alert alert-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="sword-type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="sword-type" placeholder="Sword Type" name="type"
                            value="{{ old('type', $sword->type) }}">
                        @error('type')
                            <div class="alert alert-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <div class="col-2">
                            <a href="{{ route('sword.index') }}">
                                <button class="btn btn-primary" type="submit">Apply</button>
                            </a>
                        </div>
                    </div>
                </form>
            @endsection

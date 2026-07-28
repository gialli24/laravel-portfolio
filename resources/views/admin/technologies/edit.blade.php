@extends('layouts.admin')

@section('title', 'Technologies')

@section('content')
<div class="container">

    <div class="d-flex align-items-center justify-content-between my-3">
        <h2 class="fs-4 text-secondary my-4">
            Edit Technology
        </h2>
    </div>

    {{-- Create Technology Form --}}
    <form action="{{ route('technologies.update', $technology) }}" method="POST">
        @csrf

        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Technology Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $technology->name }}" required>
        </div>

        <div class="mb-3">
            <label for="color" class="form-label">Technology Color</label>
            <input type="color" class="form-control" id="color" name="color" value="{{ $technology->color }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Technology</button>
    </form>
</div>
@endsection
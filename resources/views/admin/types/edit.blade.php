@extends('layouts.admin')

@section('title', 'Types')

@section('content')
<div class="container">

    <div class="d-flex align-items-center justify-content-between my-3">
        <h2 class="fs-4 text-secondary my-4">
            Edit Type
        </h2>
    </div>

    {{-- Create Type Form --}}
    <form action="{{ route('types.update', $type) }}" method="POST">
        @csrf

        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Type Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $type->name }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Type Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"
                required>{{ $type->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Type</button>
    </form>
</div>
@endsection
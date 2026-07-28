@extends('layouts.admin')

@section('title', 'Types')

@section('content')
<div class="container">

    <div class="d-flex align-items-center justify-content-between my-3">
        <h2 class="fs-4 text-secondary my-4">
            {{ $type->name }}
        </h2>

        <div>
            <a href="{{ route('types.edit', $type->id) }}" class="btn btn-outline-primary me-2">Edit</a>

            <form action="{{ route('types.destroy', $type->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger"
                    onclick="return confirm('Are you sure you want to delete this types?')">Delete</button>
            </form>
        </div>
    </div>

    {{-- types Details --}}
    <div class="card mb-3">
        <div class="card-body">
            <p>{{ $type->name }}</p>
            <p class="card-text">{{ $type->description }}</p>
        </div>
    </div>
</div>
@endsection
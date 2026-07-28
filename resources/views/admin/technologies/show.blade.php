@extends('layouts.admin')

@section('title', 'Technologies')

@section('content')
<div class="container">

    <div class="d-flex align-items-center justify-content-between my-3">
        <h2 class="fs-4 text-secondary my-4">
            {{ $technology->name }}
        </h2>

        <div>
            <a href="{{ route('technologies.edit', $technology->id) }}" class="btn btn-outline-primary me-2">Edit</a>

            <form action="{{ route('technologies.destroy', $technology->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger"
                    onclick="return confirm('Are you sure you want to delete this types?')">Delete</button>
            </form>
        </div>
    </div>

    {{-- Technologies Details --}}
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex align-items-center gap-2">
                <div style="width: 20px; height: 20px; border-radius: 50%; background-color: {{ $technology->color }};">
                </div>
                {{ $technology->color }}
            </div>
        </div>
    </div>
</div>
@endsection
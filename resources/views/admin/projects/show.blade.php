@extends('layouts.admin')

@section('title', 'Projects')

@section('content')
<div class="container">

    <div class="d-flex align-items-center justify-content-between my-3">
        <h2 class="fs-4 text-secondary my-4">
            {{ $project->name }}
        </h2>

        <div>
            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-outline-primary me-2">Edit</a>

            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger"
                    onclick="return confirm('Are you sure you want to delete this project?')">Delete</button>
            </form>
        </div>
    </div>

    {{-- Project Details --}}
    <div class="card mb-3">
        <div class="card-body">
            <div>
                @foreach ($project->technologies as $technology)
                <span class="badge" style="background-color: {{ $technology->color }}">{{ $technology->name
                    }}</span>
                @endforeach
            </div>
            <p>{{ $project->type->name }}</p>
            <h5>{{ $project->customer }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Period: {{ $project->period }}</h6>
            <p class="card-text">{{ $project->description }}</p>
        </div>
    </div>
</div>
@endsection
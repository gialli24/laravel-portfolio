@extends('layouts.admin')

@section('title', 'Projects')

@section('content')
<div class="container">

    <div class="d-flex align-items-center justify-content-between my-3">
        <h2 class="fs-4 text-secondary my-4">
            Projects
        </h2>

        <button class="btn btn-primary mb-3" onclick="window.location.href='{{ route('projects.create') }}'">
            Add New Project
        </button>
    </div>

    {{-- Projects List --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Technologies</th>
                <th>Customer</th>
                <th>Period</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->type->name }}</td>
                <td>{{ $project->technologies->pluck('name')->implode(', ') }}</td>
                <td>{{ $project->customer }}</td>
                <td>{{ $project->period }}</td>
                <td>{{ $project->description }}</td>
                <td class="text-nowrap">
                    {{-- Show --}}
                    <a href="{{ route('projects.show', $project->id) }}" class="btn btn-outline-primary me-2">Show</a>

                    {{-- Edit --}}
                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-outline-secondary me-2">Edit</a>

                    {{-- Delete --}}
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger"
                            onclick="return confirm('Are you sure you want to delete this project?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
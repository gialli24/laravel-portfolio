@extends('layouts.admin')

@section('title', 'Technologies')

@section('content')
<div class="container">

    <div class="d-flex align-items-center justify-content-between my-3">
        <h2 class="fs-4 text-secondary my-4">
            Technologies
        </h2>

        <button class="btn btn-primary mb-3" onclick="window.location.href='{{ route('technologies.create') }}'">
            Add New Technology
        </button>
    </div>

    {{-- Technologies List --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Color</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($technologies as $technology)
            <tr>
                <td>{{ $technology->id }}</td>
                <td>{{ $technology->name }}</td>
                <td>
                    <div class="d-flex align-items-center gap-2">
                        <div
                            style="width: 20px; height: 20px; border-radius: 50%; background-color: {{ $technology->color }};">
                        </div>
                        {{ $technology->color }}
                    </div>
                </td>
                <td class="text-nowrap">
                    {{-- Show --}}
                    <a href="{{ route('technologies.show', $technology->id) }}"
                        class="btn btn-outline-primary me-2">Show</a>

                    {{-- Edit --}}
                    <a href="{{ route('technologies.edit', $technology->id) }}"
                        class="btn btn-outline-secondary me-2">Edit</a>

                    {{-- Delete --}}
                    <form action="{{ route('technologies.destroy', $technology->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger"
                            onclick="return confirm('Are you sure you want to delete this technology?')">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
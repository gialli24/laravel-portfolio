@extends('layouts.admin')

@section('title', 'Types')

@section('content')
<div class="container">

    <div class="d-flex align-items-center justify-content-between my-3">
        <h2 class="fs-4 text-secondary my-4">
            Types
        </h2>

        <button class="btn btn-primary mb-3" onclick="window.location.href='{{ route('types.create') }}'">
            Add New Type
        </button>
    </div>

    {{-- Types List --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
            <tr>
                <td>{{ $type->id }}</td>
                <td>{{ $type->name }}</td>
                <td>{{ $type->description }}</td>
                <td class="text-nowrap">
                    {{-- Show --}}
                    <a href="{{ route('types.show', $type->id) }}" class="btn btn-outline-primary me-2">Show</a>

                    {{-- Edit --}}
                    <a href="{{ route('types.edit', $type->id) }}" class="btn btn-outline-secondary me-2">Edit</a>

                    {{-- Delete --}}
                    <form action="{{ route('types.destroy', $type->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger"
                            onclick="return confirm('Are you sure you want to delete this type?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
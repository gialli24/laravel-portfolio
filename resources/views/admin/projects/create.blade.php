@extends('layouts.admin')

@section('title', 'Projects')

@section('content')
<div class="container">

    <div class="d-flex align-items-center justify-content-between my-3">
        <h2 class="fs-4 text-secondary my-4">
            Add New Project
        </h2>
    </div>

    {{-- Create Project Form --}}
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Project Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Project Type</label>
            <select name="type_id" class="form-control" id="type" required>
                @foreach ($types as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="customer" class="form-label">Project Customer</label>
            <input type="text" class="form-control" id="customer" name="customer" required>
        </div>

        <div class="mb-3">
            <label for="period" class="form-label">Project Period</label>
            <input type="text" class="form-control" id="period" name="period" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Project Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Project</button>
    </form>
</div>
@endsection
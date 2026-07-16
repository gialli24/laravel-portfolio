@extends('layouts.admin')

@section('title', 'Projects')

@section('content')
<main class="main-content">

    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
        <div>
            <h1 class="h3 fw-bold mb-1">Dettagli Progetto</h1>
            <p class="text-muted m-0">Visualizza e gestisci i dettagli del progetto selezionato.</p>
        </div>
    </div>

    <div class="card-custom p-4 mb-4">
        <h5 class="fw-bold mb-3">Informazioni Progetto</h5>
        <p><strong>Nome:</strong> {{ $project->name }}</p>
        <p><strong>Cliente:</strong> {{ $project->customer }}</p>
        <p><strong>Periodo:</strong> {{ $project->period }}</p>
        <p><strong>Descrizione:</strong> {{ $project->description }}</p>
    </div>

    <div class="card-custom p-4">
        <h5 class="fw-bold mb-3">Azioni</h5>
        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-outline-primary me-2">Modifica Progetto</a>
        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger"
                onclick="return confirm('Sei sicuro di voler eliminare questo progetto?')">Elimina Progetto</button>
        </form>
    </div>

</main>
@endsection
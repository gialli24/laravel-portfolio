@extends('layouts.admin')

@section('title', 'Projects')

@section('content')
<main class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
        <div>
            <h1 class="h3 fw-bold mb-1">I tuoi Progetti</h1>
            <p class="text-muted m-0">Gestisci, modifica e aggiungi lavori al tuo portfolio.</p>
        </div>
        <button class="btn btn-minimal">
            <i class="bi bi-plus-lg me-2"></i> Nuovo Progetto
        </button>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-12 col-md-4">
            <div class="card-custom">
                <span class="text-muted d-block mb-1 text-uppercase fw-semibold" style="font-size: 0.75rem;">Progetti
                    Pubblicati</span>
                <h2 class="fw-bold m-0">12</h2>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card-custom">
                <span class="text-muted d-block mb-1 text-uppercase fw-semibold"
                    style="font-size: 0.75rem;">Visualizzazioni Totali</span>
                <h2 class="fw-bold m-0">1.4K</h2>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card-custom">
                <span class="text-muted d-block mb-1 text-uppercase fw-semibold" style="font-size: 0.75rem;">Nuovi
                    Contatti (Mese)</span>
                <h2 class="fw-bold m-0">8</h2>
            </div>
        </div>
    </div>

    <div class="card-custom p-0 overflow-hidden">
        <div class="p-4 border-bottom d-flex justify-content-between align-items-center flex-wrap gap-2">
            <h5 class="m-0 fw-bold">Ultimi Caricamenti</h5>
            <button class="btn btn-outline-minimal btn-sm">Vedi tutti</button>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0 text-nowrap">
                <thead class="table-light" style="background-color: var(--bg-body);">
                    <tr>
                        <th class="ps-4 py-3 border-0">Progetto</th>
                        <th class="py-3 border-0">Cliente</th>
                        <th class="py-3 border-0">Periodo</th>
                        <th class="pe-4 py-3 border-0 text-end">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <td class="ps-4">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-light rounded p-1"
                                    style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-window fs-4 text-secondary"></i>
                                </div>

                                <div>
                                    <h6 class="m-0 fw-semibold">{{ $project->name }}</h6>
                                </div>
                            </div>
                        </td>

                        <td>{{ $project->customer }}</td>
                        <td>{{ $project->period }}</td>
                        <td class="pe-4 text-end">
                            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-link text-dark p-1 me-2"
                                title="Modifica">
                                Visualizzza
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection
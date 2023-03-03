@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            <div class="card-header text-center bg-white mb-3">
                <h1>{{ $tool->name }}</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h3 clasS="text-muted">{{ $tool->name }}</h3>
                        <img src="{{ $tool->image_url }}" alt="{{ $tool->name }}">
                        <div>{{ $tool->description }}</div>
                        <div>{{ $tool->category }}</div>
                        <div>{{ $tool->release_year }}</div>
                        <div>{{ $tool->latest_version }}</div>
                        <div>{{ $tool->download_link }}</div>
                        <div>{{ $tool->supported_os }}</div>
                        <div>{{ $tool->vote }}</div>

                    </div>
                </div>
            </div>
            {{-- <div class="card-footer bg-white d-flex justify-content-end">
            <form action="{{ route('teams.destroy', $tool->id) }}" method="POST" class="delete-form"
              data-name="{{ $tool->short_name }}">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger me-2">Elimina</button>
            </form>
            <a href="{{ route('teams.edit', $tool->id) }}" class="btn btn-warning me-2">Modifica</a>
            <a href="{{ route('teams.index') }}" class="btn btn-secondary">Indietro</a> --}}
        </div>
        </div>
    </main>
@endsection

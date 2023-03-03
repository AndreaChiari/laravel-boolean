@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            <div class="row row-cols-6">
                @foreach ($tools as $tool)
                    @include('includes.card')
                @endforeach
            </div>
            <div>
                <a href="{{ route('tools.create') }}">Create tool</a>
            </div>
            <div>
                {{-- <a href="{{ route('tools.create') }}" class="btn btn-primary mt-3">Add Tool</a> --}}
            </div>
        </div>
    </main>
@endsection

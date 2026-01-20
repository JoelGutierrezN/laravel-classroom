@extends('layouts.app')
@section('title', 'Welcome')

@section('content')
    <x-page-title title="Welcome" />

    @forelse($apartments as $apartment)
        <span class="text-white">{{ $apartment->name }}</span>
        <span class="text-sky-400">{{ $apartment->admin->name }}</span>
    @empty
        <h3>No hay departamentos registrados</h3>
    @endforelse

    {{ $apartments->links() }}
@endsection

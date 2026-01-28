@extends('layouts.app')
@section('title', 'Welcome')

@section('content')
    <x-page-title title="Welcome" />

    <a
       class="text-white hover:text-yellow-400 hover:scale-95 transition-all duration-500 px-2 py-1 rounded-lg bg-orange-600"
       href="{{ route('apartments.create') }}"
    >
        Crear nuevo departamento
    </a>

    <table class="table-auto mt-4 rounded-lg bg-gray-800 overflow-hidden my-5">
        <thead>
            <tr>
                <th class="px-4 py-1 text-white">Nombre</th>
                <th class="px-4 py-1 text-white">Administrador</th>
                <th class="px-4 py-1 text-white">fecha de alta</th>
            </tr>
        </thead>
        <tbody class="bg-gray-800">
            @forelse($apartments as $apartment)
                <tr>
                    <td class="px-4 py-1">
                        <span class="text-white">{{ $apartment->name }}</span>
                    </td>
                    <td class="px-4 py-1">
                        <div class="flex flex-col items-center">
                            <span class="text-sky-400">{{ $apartment->admin->name }}</span>
                            <span class="text-zinc-400 text-xs">{{ $apartment->admin->formattedDate() }}</span>
                        </div>
                    </td>
                    <td class="px-4 py-1">
                        <span class="text-sky-400">
                            {{ $apartment->formattedDate() }}
                        </span>
                    </td>
                </tr>
            @empty
                <h3>No hay departamentos registrados</h3>
            @endforelse
        </tbody>
    </table>


    {{ $apartments->links() }}
@endsection

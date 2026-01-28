@extends('layouts.app')
@section('title', 'Departamentos')

@section('content')
    <x-page-title title="Departamentos" />

    <form
        action="{{ route('apartments.store') }}"
        method="POST"
        class="flex gap-3 flex-col items-center justify-between"
    >
        @method('POST')
        @csrf

        <select name="admin_id" class="text-gray-400" >
            <option value="" selected disabled>Selecciona un administrador</option>
            <option value="6" @selected(old('admin_id') == "6")>
                Leo
            </option>
            @forelse($admins as $admin)
                <option
                    value="{{ $admin->id }}"
                    @selected(old('admin_id') == $admin->id)
                >
                    {{ $admin->name }}
                </option>
            @empty
                <option value="" disabled class="text-red-400 uppercase">No hay administradores disponibles</option>
            @endforelse
        </select>
        @error('admin_id')
            <span class="text-red-400"> {{ $message }} </span>
        @enderror

        <div class="my-2 p-2 text-center flex flex-col gap-2">
            <label
                for="name"
                class="text-gray-400"
            >
                Nombre del departamento
            </label>
            <input
                type="text"
                name="name"
                id="name"
                class="w-full p-2 border-2 border-gray-400 text-white rounded-lg"
                value="{{ old('name') }}"
            >
            @error('name')
                <span class="text-red-400"> {{ $message }} </span>
            @enderror
        </div>

        <button
            type="submit"
            class="text-white hover:text-yellow-400 hover:scale-95 transition-all duration-500 px-2 py-1 rounded-lg bg-orange-600"
        >
            Crear Departamento
        </button>
    </form>
@endsection

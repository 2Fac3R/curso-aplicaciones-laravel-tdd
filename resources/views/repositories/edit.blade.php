<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Repositorios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <form action="{{ route('repositories.update', $repository) }}" method="POST" class="max-w-md">
                    @csrf
                    @method('PUT')

                    <label class="block m-2 text-sm font-medium text-gray-700">URL *</label>
                    <input class="w-full m-2 rounded-md shadow-sm form-input" type="text" name="url"
                        value="{{ $repository->url }}">

                    <label class="block m-2 text-sm font-medium text-gray-700">Descripción *</label>
                    <textarea class="w-full m-2 rounded-md shadow-sm form-input" type="text" name="description">{{ $repository->description }}</textarea>

                    <input type="submit" value="Editar"
                        class="px-4 py-2 m-2 font-bold text-right text-white bg-blue-500 rounded-md">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

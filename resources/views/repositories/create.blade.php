<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Repositorios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <form action="{{ route('repositories.store') }}" method="POST" class="max-w-md">
                    @csrf

                    <label class="block text-sm font-medium text-gray-700">URL *</label>
                    <input class="w-full rounded-md shadow-sm form-input" type="text" name="url">

                    <label class="block text-sm font-medium text-gray-700">Descripción *</label>
                    <textarea class="w-full rounded-md shadow-sm form-input" type="text" name="description"></textarea>

                    <hr class="my-4">

                    <input type="submit" value="Guardar" class="px-4 py-2 font-bold text-white bg-blue-500 rounded-md">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Repositorios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex-auto mx-auto max-w-7xl sm:px-6 lg:px-8">
            <p class="mb-4 text-right">
                <a href="{{ route('repositories.create') }}"
                    class="px-4 py-2 font-semibold text-white bg-blue-500 rounded-md text-md">
                    Agregar un nuevo repositorio
                </a>
            </p>
            <div class="p-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Enlace</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($repositories as $repository)
                            <tr>
                                <td class="px-6 py-2">{{ $repository->id }}</td>
                                <td class="px-6 py-2">{{ $repository->url }}</td>
                                <td class="px-2">
                                    <a href="{{ route('repositories.show', $repository) }}"
                                        class="px-4 text-white bg-blue-500 rounded-md">
                                        Ver
                                    </a>
                                </td>
                                <td class="px-2">
                                    <a href="{{ route('repositories.edit', $repository) }}"
                                        class="px-4 text-white bg-green-500 rounded-md">
                                        Editar
                                    </a>
                                </td>
                                <td class="px-2">
                                    <form action="{{ route('repositories.destroy', $repository) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Eliminar"
                                            class="px-4 text-white bg-red-500 rounded-md">
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No hay repositorios creados</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

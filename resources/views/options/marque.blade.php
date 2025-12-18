@section('title', 'Marques')
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">Modifier les Marques</h2>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-8">
        <form method="POST" action="{{ url('/options/marque') }}" class="mb-6">
            @csrf
            <div class="flex gap-4">
                <input name="name" type="text" placeholder="Nom de la marque" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm" required>
                <x-primary-button type="submit">Ajouter</x-primary-button>
            </div>
        </form>

        <ul class="space-y-2">
            @foreach ($marques as $marque)
                <li class="flex justify-between items-center p-4 border rounded bg-white dark:bg-gray-800 gap-4">
                    <form method="POST" action="{{ url('/options/marque/'.$marque->id) }}" class="flex justify-between items-center gap-4 w-full">
                        @csrf @method('PUT')
                        <input type="text" name="name" value="{{ $marque->name }}" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                        <x-primary-button type="submit">Modifier</x-primary-button>
                    </form>
                        <form method="POST" action="{{ url('/options/marque/'.$marque->id) }}">
                            @csrf @method('DELETE')
                            <x-danger-button type="submit">Supprimer</x-danger-button>
                        </form>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
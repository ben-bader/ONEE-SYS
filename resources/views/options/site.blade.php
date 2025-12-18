@section('title', 'Sites')
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">Modifier les Sites</h2>
    </x-slot>

    <div class="max-w-5xl mx-auto mt-8">
        <form method="POST" action="{{ url('/options/site') }}" class="mb-6 space-y-4">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <input name="nom_adresse_site" type="text" placeholder="Nom ou Adresse du Site" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm" required>
                <input name="code_postal" type="text" placeholder="Code postal (facultatif)" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
            </div>
            <x-primary-button type="submit" class="">Ajouter</x-primary-button>
        </form>

        <ul class="space-y-2 py-5">
            @foreach ($sites as $site)
                <li class="p-4 flex items-center border rounded bg-white dark:bg-gray-800 gap-4">
                    <form method="POST" action="{{ url('/options/site/'.$site->id) }}" class="flex justify-between items-center gap-4 w-full">
                        @csrf @method('PUT')
                        <input type="text" name="nom_adresse_site" value="{{ $site->nom_adresse_site }}" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                        <input type="text" name="code_postal" value="{{ $site->code_postal }}" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                        <x-primary-button type="submit">Modifier</x-primary-button>
                    </form>
                    <form method="POST" action="{{ url('/options/site/'.$site->id) }}">
                        @csrf @method('DELETE')
                        <x-danger-button type="submit">Supprimer</x-danger-button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
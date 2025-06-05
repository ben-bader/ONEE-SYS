
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Détails du Périphérique') }}
        </h2>
    </x-slot>

    <div class="max-w-xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ $peripherique->nom }}</h3>
                <h4 class=" text-gray-900 dark:text-gray-100 font-semibold">Numero de série: {{ $peripherique->numero_serie }}</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Type:</span> {{ $peripherique->type }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Etat:</span> {{ $peripherique->etat }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Sous famile:</span> {{ $peripherique->sous_famille }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Interface:</span> {{ $peripherique->interface }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Description:</span> {{ $peripherique->description }}</p>

                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Date d'ajout:</span> {{ $peripherique->created_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
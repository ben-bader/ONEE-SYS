<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex flex-col py-12 gap-4 max-sm:px-4">
        @foreach ($peripheriques as $peripherique)
            <div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex justify-between bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ $peripherique->nom }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Type: {{ $peripherique->type }}</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Date d'ajout: {{ $peripherique->created_at->format('d/m/Y H:i') }}</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Etat: {{ $peripherique->etat }}</p>
                        </div>
                         <div class="flex items-center justify-center p-6 ">
                            
                            <a href="{{ route('peripherique.show', $peripherique->id) }}">
                             <x-primary-button class="mt-4">
                                {{ __('Voir Détails') }}
                             </x-primary-button>   
                            </a>

                         </div>
                    </div>
                   

                </div>
            </div>
        @endforeach
    </div>
    <div class="w-full mx-auto max-sm:px-4 max-sm:pb-4 lg:px-8 lg:pb-8">
        {{ $peripheriques->links() }}
    </div>
</x-app-layout>

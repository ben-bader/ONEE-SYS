@section('title', 'Tableau de bord')
<x-app-layout>
    <div class="p-2 mt-4 flex justify-end max-sm:p-0">
        <div
            class="flex flex-col w-[596px] max-sm:w-[400px] max-sm:gap-2 max-sm:items-center shadow-sm bg-white dark:bg-gray-800 rounded-3xl">
            <form method="GET" action="/dashboard" class="flex flex-1 w-full items-center relative">
                <x-text-input type="text" name="search" placeholder="Chercher..." value="{{ request('search') }}"
                    class="p-3 w-full absolute !rounded-3xl" />
                <button type="submit"
                    class="p-1 bg-transparent text-gray-700 dark:text-gray-400 z-10 relative left-[92%]">
                    <x-heroicon-o-magnifying-glass class="w-8 h-8 duration-300" />
                </button>
            </form>

            <div class="flex flex-col gap-2 w-full">
                @forelse ($items as $item)
                    <a href="{{ route('peripherique.show', $item->id) }}">
                        <div class="flex items-center mt-4 gap-2 m-2">
                            <h2 class="text-md font-semibold dark:text-gray-200">{{ $item->designiation_article }}</h2>
                            <p class="text-sm text-gray-600 dark:text-gray-200">{{ $item->numero_serie }}</p>
                        </div>
                    </a>
                @empty
                @endforelse

            </div>

        </div>
        
    </div>
    <div class="flex flex-col py-12 gap-4 max-sm:px-4">
        
        @foreach ($peripheriques as $peripherique)
            <div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div
                        class="flex justify-between max-sm:flex-col bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg border border-gray-300 dark:border-gray-500">
                        <div class="p-6 bg-white dark:bg-gray-800 ">
                            <h4 class=" text-gray-900 dark:text-gray-50 font-semibold">Designation article: <span
                                    class="text-gray-600 dark:text-gray-200">{{ $peripherique->designiation_article }}</span>
                            </h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Marque: {{ $peripherique->marque }}</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Numero de serie:
                                {{ $peripherique->numero_serie }}</p>
                        </div>
                        <div class="flex items-center justify-center p-6 ">

                            <a href="{{ route('peripherique.show', $peripherique->id) }}">
                                <x-primary-button class="">
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
    <div class="flex justify-end fixed right-0 bottom-0 max-sm:justify-center mb-4 p-4">
            <a href="{{ url('/print-database') }}" target="_blank">
                <x-primary-button>Imprimer toutes les tables</x-primary-button>
            </a>
        </div>
</x-app-layout>

@section('title', 'Options')

<x-app-layout>
    @php
        $options = ['marque', 'employe', 'site'];
    @endphp
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gestion des options') }}
        </h2>
    </x-slot>
    <div class="flex flex-col py-12 gap-4 max-sm:px-4">
        @foreach ($options as $o)
            <a href="{{ route('options.' . $o) }}">
                <div>
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div
                            class="flex justify-between max-sm:flex-col bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg border border-gray-300 dark:border-gray-500">
                            <div class="p-6 bg-white dark:bg-gray-800 ">
                                <h1 class="text-gray-900 dark:text-gray-50 font-semibold uppercase">{{ $o }}S
                                </h1>
                            </div>
                            <div class="flex items-center justify-center p-4 ">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</x-app-layout>

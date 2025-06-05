<x-app-layout>
    
         <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajouter peripherique') }}
        </h2>
    </x-slot>
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 py-12">
       
    <form method="POST" action="{{ route('peripherique.store') }}">
        @csrf
        <!-- nom de peripherique -->
        <div>
            <x-input-label for="nom" :value="__('Nom')" />
            <x-text-input id="nom" class="block w-full mb-4" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>
        <!-- Name -->
        <div>
            <x-input-label for="numero_serie" :value="__('Numéro de série')" />
            <x-text-input id="num_serie" class="block mt-1 w-full" type="text" name="numero_serie" :value="old('numero_serie')" required autofocus autocomplete="numero-serie" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="type" :value="__('Type')" />
            <select id="type" name="type" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 dark:focus:border-indigo-500 dark:focus:ring-indigo-500">
                @foreach(['Ordinateur', 'Imprimante', 'Scanner', 'Serveur', 'Autre'] as $type)
                    <option value="{{ $type }}" {{ old('type') == $type ? 'selected' : '' }}>{{ $type }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __("J'ai déja un compte?") }}
            </a>

            <x-primary-button class="ms-4">
                {{ __("S'inscrire") }}
            </x-primary-button>
        </div>
    </form>
    </div>
   
</x-app-layout>

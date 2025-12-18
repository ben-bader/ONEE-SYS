@section('title', 'Détails du périphérique')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Détails du Périphérique') }}
        </h2>
    </x-slot>

    <div class="max-w-xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
           <div class="flex justify-end items-center px-6 py-3  border-b border-gray-200 dark:border-gray-700">
                <div class="flex gap-4 items-center">
                <form action="{{ route("peripherique.destroy",$peripherique->id) }}" method="POST" class="mt-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce périphérique ?')">
                        <x-heroicon-s-trash class="w-8 h-8 text-red-600 cursor-pointer border p-2 rounded border-red-500" />
                    </button>
                </form>
                <a href="{{ route("peripherique.edit",$peripherique) }}">
                     <x-heroicon-s-pencil class="w-8 h-8 text-gray-600 dark:text-white cursor-pointer border p-2 rounded border-gray-500" />
                </a>
                <button onclick="printDiv('printArea')">
                    <x-heroicon-s-printer class="w-8 h-8 text-gray-600 dark:text-white cursor-pointer border p-2 rounded border-gray-500" />
                </button>
                
            </div>
           </div>
           
            <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700" id="printArea">
                <h4 class=" text-gray-900 dark:text-gray-100 font-semibold">Numero de série: {{ $peripherique->numero_serie }}</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Sous Famille:</span> {{ $peripherique->sous_famille }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Designation article:</span> {{ $peripherique->designiation_article }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Activité:</span> {{ $peripherique->activite }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Marque:</span> {{ $peripherique->marque }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Modèle:</span> {{ $peripherique->modele }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Code ONEE:</span> {{ $peripherique->code_onee }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Nom affectataire:</span> {{ $peripherique->nom_affectataire }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Matricule affectataire:</span> {{ $peripherique->matricule_affectataire }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Entité:</span> {{ $peripherique->entite }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Nom et adresse du site:</span> {{ $peripherique->nom_adresse_site }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Contrat d'acquisition:</span> {{ $peripherique->contrat_acquisition }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Type:</span> {{ $peripherique->type }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">N°:</span> {{ $peripherique->num_contrat }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Date de debut:</span> {{ $peripherique->date_debut_contrat }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Année:</span> {{ $peripherique->annee }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Objet:</span> {{ $peripherique->objet }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Titulaire de marché:</span> {{ $peripherique->titulaire_marche }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Observations:</span> {{ $peripherique->obs }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><span class="text-md text-gray-900 dark:text-gray-100 font-semibold">Etage:</span> {{ $peripherique->etage}}</p>
            </div>
        </div>
    </div>
 
</x-app-layout>
@section('title', 'Modifier péripherique')
<x-app-layout>
    @php
        $sousFamilles = ["IMPRESSION ET NUMÉRISATION", "ORDINATEURS ET SERVEURS", "RESEAU", "PERIPHERIQUE"];
        $designations = ["ORDINATEUR FIX", "SWITCH", "ROUTEUR TCP/IP", "IMPRIMENTE LASER", "ORDINATEUR PORTABLE", "SCANNER", "SERVEUR D'APPLICATION", "TERMEC", "AUTOMATIQUE ID", "COFFRET INFORMATIQUE"];
        $activites = ["AUCUN","BUREAUTIQUE", "COMMERCIALE", "LECTEUR DE VIGNETTES"];
        $marques = ["AUCUN","ACER", "CISCO", "DELL", "HP", "EPSON", "LENOVO", "LEXMARQUE", "OKI", "PERFECTION", "RICHOH", "SIEMENS", "SAMSUNG", "TALLY GENICOM"];
        $types = ["AUCUN","M", "E"];
        $sites = ["AS5/1", "MY DRISS", "SBAA AYOUN", "AZZROU", "IFRANE", "AIN TAOUJDATE", "ELHAJEB", "BOUFEKRANE"];
    @endphp

    <div class="max-w-5xl mx-auto py-10 sm:px-6 lg:px-24 px-8">
        <form method="POST" action="{{ route('peripherique.update',$peripherique->id) }}">
            @csrf
            @method('PATCH')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Sous Famille -->
                <x-input-label for="sous_famille" :value="__('Sous Famille')" />
                <select name="sous_famille" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                    <option value="{{ $peripherique->sous_famille }}">{{ $peripherique->sous_famille }}</option>
                    @foreach($sousFamilles as $sf)
                        <option value="{{ $sf }}">{{ $sf }}</option>
                    @endforeach
                </select>

                <!-- Designation Article -->
                <x-input-label for="designiation_article" :value="__('Désignation Article')" />
                <select name="designiation_article" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                    <option value="{{ $peripherique->designiation_article }}">{{ $peripherique->designiation_article }}</option>
                    @foreach($designations as $d)
                        <option value="{{ $d }}">{{ $d }}</option>
                    @endforeach
                </select>

                <!-- Activité -->
                <x-input-label for="activite" :value="__('Activité')" />
                <select name="activite" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                    <option value="{{ $peripherique->activite }}">{{ $peripherique->activite }}</option>
                    @foreach($activites as $a)
                        <option value="{{ $a }}">{{ $a }}</option>
                    @endforeach
                </select>

                <!-- Marque -->
                <x-input-label for="marque" :value="__('Marque')" />
                <select name="marque" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                    <option value="{{ $peripherique->marque }}">{{ $peripherique->marque }}</option>
                    @foreach($marques as $m)
                        <option value="{{ $m }}">{{ $m }}</option>
                    @endforeach
                </select>

                <!-- Modele -->
                <x-input-label for="modele" :value="__('Modèle')" />
                <x-text-input name="modele" class="w-full" value="{{ $peripherique->modele }}" />

                <!-- Code ONEE -->
                <x-input-label for="code_onee" :value="__('Code ONEE')" />
                <x-text-input name="code_onee" class="w-full" value="{{ $peripherique->code_onee }}" />

                <!-- Numéro Série -->
                <x-input-label for="numero_serie" :value="__('Numéro de Série')" />
                <x-text-input name="numero_serie" class="w-full" value="{{ $peripherique->numero_serie }}"/>

                <!-- Nom Affectataire -->
                <x-input-label for="nom_affectataire" :value="__('Nom Affectataire')" />
                <x-text-input name="nom_affectataire" class="w-full" value="{{ $peripherique->nom_affectataire }}"/>

                <!-- Matricule Affectataire -->
                <x-input-label for="matricule_affectataire" :value="__('Matricule Affectataire')" />
                <x-text-input name="matricule_affectataire" class="w-full" value="{{ $peripherique->matricule_affectataire }}"/>

                <!-- Entité -->
                <x-input-label for="entite" :value="__('Entité')" />
                <x-text-input name="entite" class="w-full" value="{{ $peripherique->entite }}"/>

                <!-- Nom Adresse Site -->
                <x-input-label for="nom_adresse_site" :value="__('Nom Adresse Site')" />
                <select name="nom_adresse_site" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                    <option value="{{ $peripherique->nom_adresse_site }}">{{ $peripherique->nom_adresse_site }}</option>
                    @foreach($sites as $s)
                        <option value="{{ $s }}">{{ $s }}</option>
                    @endforeach
                </select>

                <!-- Contrat Acquisition -->
                <x-input-label for="contrat_acquisition" :value="__('Contrat Acquisition')" />
                <x-text-input name="contrat_acquisition" class="w-full" value="{{ $peripherique->contrat_acquisition }}"/>

                <!-- Type -->
                <x-input-label for="type" :value="__('Type')" />
                <select name="type" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                    <option value="{{ $peripherique->type }}">{{ $peripherique->type }}</option>
                    @foreach($types as $t)
                        <option value="{{ $t }}">{{ $t }}</option>
                    @endforeach
                </select>

                <!-- Num Contrat -->
                <x-input-label for="num_contrat" :value="__('Num Contrat')" />
                <x-text-input name="num_contrat" class="w-full" value="{{ $peripherique->num_contrat }}"/>

                <!-- Date Début Contrat -->
                <x-input-label for="date_debut_contrat" :value="__('Date Début Contrat')" />
                <x-text-input name="date_debut_contrat" type="date" class="w-full" value="{{ $peripherique->date_debut_contrat }}"/>

                <!-- Année -->
                <x-input-label for="annee" :value="__('Année')" />
                <x-text-input name="annee" type="number" class="w-full" value="{{ $peripherique->annee }}" />

                <!-- Objet -->
                <x-input-label for="objet" :value="__('Objet')" />
                <x-text-input name="objet" class="w-full" value="{{ $peripherique->objet }}"/>

                <!-- Titulaire Marché -->
                <x-input-label for="titulaire_marche" :value="__('Titulaire Marché')" />
                <x-text-input name="titulaire_marche" class="w-full" value="{{ $peripherique->titulaire_marche }}"/>

                <!-- Observations -->
                <x-input-label for="obs" :value="__('Observations')" />
                <textarea name="obs" rows="2" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm" >{{ $peripherique->obs }}</textarea>

                <!-- Étage -->
                <x-input-label for="etage" :value="__('Étage')" />
                <x-text-input name="etage" class="w-full" value="{{ $peripherique->etage }}"/>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end mt-6">
                <x-primary-button>
                    {{ __('Enregistrer') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>

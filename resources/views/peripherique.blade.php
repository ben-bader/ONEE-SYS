@section('title', 'Ajouter péripherique')

<x-app-layout>
    @php
        $sousFamilles = ["IMPRESSION ET NUMÉRISATION", "ORDINATEURS ET SERVEURS", "RESEAU", "PERIPHERIQUE"];
        $designations = ["ORDINATEUR FIX", "SWITCH", "ROUTEUR TCP/IP", "IMPRIMENTE LASER", "ORDINATEUR PORTABLE", "SCANNER", "SERVEUR D'APPLICATION", "TERMEC", "AUTOMATIQUE ID", "COFFRET INFORMATIQUE"];
        $activites = ["AUCUN","BUREAUTIQUE", "COMMERCIALE", "LECTEUR DE VIGNETTES"];
        // $marques = ["AUCUN","ACER", "CISCO", "DELL", "HP", "EPSON", "LENOVO", "LEXMARQUE", "OKI", "PERFECTION", "RICHOH", "SIEMENS", "SAMSUNG", "TALLY GENICOM"];
        $types = ["AUCUN","M", "E"];
        // $sites = ["AS5/1", "MY DRISS", "SBAA AYOUN", "AZZROU", "IFRANE", "AIN TAOUJDATE", "ELHAJEB", "BOUFEKRANE"];
    @endphp

    <div class="max-w-5xl mx-auto py-10 sm:px-6 lg:px-24 px-8">
        <form method="POST" action="{{ route('peripherique.store') }}">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Sous Famille -->
                <x-input-label for="sous_famille" :value="__('Sous Famille')" />
                <select name="sous_famille" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                    <option value="" disabled selected>Sélectionner</option>
                    @foreach($sousFamilles as $sf)
                        <option value="{{ $sf }}">{{ $sf }}</option>
                    @endforeach
                </select>
                 <x-input-error :messages="$errors->get('sous_famille')" class="mt-2" />
                <!-- Designation Article -->
                <x-input-label for="designiation_article" :value="__('Désignation Article')" />
                <select name="designiation_article" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                    <option value="" disabled selected>Sélectionner</option>
                    @foreach($designations as $d)
                        <option value="{{ $d }}">{{ $d }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('designiation_article')" class="mt-2" />

                <!-- Activité -->
                <x-input-label for="activite" :value="__('Activité')" />
                <select name="activite" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                    <option value="" disabled selected>Sélectionner</option>
                    @foreach($activites as $a)
                        <option value="{{ $a }}">{{ $a }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('activite')" class="mt-2" />

                <!-- Marque -->
                <x-input-label for="marque" :value="__('Marque')" />
                <select name="marque" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                    <option value="" disabled selected>Sélectionner</option>
                    @foreach($marques as $m)
                        <option value="{{ $m->name }}">{{ $m->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('marque')" class="mt-2" />

                <!-- Modele -->
                <x-input-label for="modele" :value="__('Modèle')" />
                <x-text-input name="modele" class="w-full" />
                <x-input-error :messages="$errors->get('modele')" class="mt-2" />

                <!-- Code ONEE -->
                <x-input-label for="code_onee" :value="__('Code ONEE')" />
                <x-text-input name="code_onee" class="w-full" />
                <x-input-error :messages="$errors->get('code_onee')" class="mt-2" />

                <!-- Numéro Série -->
                <x-input-label for="numero_serie" :value="__('Numéro de Série')" />
                <x-text-input name="numero_serie" class="w-full" />
                <x-input-error :messages="$errors->get('numero_serie')" class="mt-2" />

                <!-- Nom Affectataire -->
                <x-input-label for="nom_affectataire" :value="__('Nom Affectataire')" />
                <select name="nom_affectataire" id="" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                    <option value="" disabled selected>Sélectionner</option>
                    @foreach($employe as $e)
                        <option value="{{ $e->nom }}">{{ $e->nom }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('nom_affectataire')" class="mt-2" />

                <!-- Matricule Affectataire -->
                <x-input-label for="matricule_affectataire" :value="__('Matricule Affectataire')" />
                <x-text-input name="matricule_affectataire" class="w-full" />
                <x-input-error :messages="$errors->get('matricule_affectataire')" class="mt-2" />

                <!-- Entité -->
                <x-input-label for="entite" :value="__('Entité')" />
                <x-text-input name="entite" class="w-full" value="AS5/1"/>

                <!-- Nom Adresse Site -->
                <x-input-label for="nom_adresse_site" :value="__('Nom Adresse Site')" />
                <select name="nom_adresse_site" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                    <option value="" disabled selected>Sélectionner</option>
                    @foreach($sites as $s)
                        <option value="{{ $s->nom_adresse_site }}">{{ $s->nom_adresse_site }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('nom_adresse_site')" class="mt-2" />

                <!-- Contrat Acquisition -->
                <x-input-label for="contrat_acquisition" :value="__('Contrat Acquisition')" />
                <x-text-input name="contrat_acquisition" class="w-full" />
                <x-input-error :messages="$errors->get('contrat_acquisition')" class="mt-2" />

                <!-- Type -->
                <x-input-label for="type" :value="__('Type')" />
                <select name="type" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                    <option value="" disabled selected>Sélectionner</option>
                    @foreach($types as $t)
                        <option value="{{ $t }}">{{ $t }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('type')" class="mt-2" />

                <!-- Num Contrat -->
                <x-input-label for="num_contrat" :value="__('Num Contrat')" />
                <x-text-input name="num_contrat" class="w-full" />
                <x-input-error :messages="$errors->get('num_contrat')" class="mt-2" />

                <!-- Date Début Contrat -->
                <x-input-label for="date_debut_contrat" :value="__('Date Début Contrat')" />
                <x-text-input name="date_debut_contrat" type="date" class="w-full" />
                <x-input-error :messages="$errors->get('date_debut_contrat')" class="mt-2" />

                <!-- Année -->
                <x-input-label for="annee" :value="__('Année')" />
                <x-text-input name="annee" type="number" class="w-full" />
                <x-input-error :messages="$errors->get('annee')" class="mt-2" />

                <!-- Objet -->
                <x-input-label for="objet" :value="__('Objet')" />
                <x-text-input name="objet" class="w-full" />
                <x-input-error :messages="$errors->get('objet')" class="mt-2" />

                <!-- Titulaire Marché -->
                <x-input-label for="titulaire_marche" :value="__('Titulaire Marché')" />
                <x-text-input name="titulaire_marche" class="w-full" />
                <x-input-error :messages="$errors->get('titulaire_marche')" class="mt-2" />

                <!-- Observations -->
                <x-input-label for="obs" :value="__('Observations')" />
                <textarea name="obs" rows="2" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">NULL</textarea>

                <!-- Étage -->
                <x-input-label for="etage" :value="__('Étage')" />
                <x-text-input name="etage" class="w-full" />
                <x-input-error :messages="$errors->get('etage')" class="mt-2" />

            </div>

            <!-- Submit Button -->
            <div class="flex justify-end mt-6">
                <x-primary-button  >
                    {{ __('Créer') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    

</x-app-layout>

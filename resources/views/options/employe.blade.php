@section('title', 'Employes')
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">Modifier les Employés</h2>
    </x-slot>

    <div class="max-w-5xl mx-auto mt-8">
        <form method="POST" action="{{ url('/options/employe') }}" class="mb-6 space-y-4">
            @csrf
            <div class="grid grid-cols-4 gap-4">
                <input name="matricule" type="text" placeholder="Matricule" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm" required>
                <input name="nom" type="text" placeholder="Nom" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm" required>
                <input name="email" type="email" placeholder="Email" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm" required>
                <input name="telephone" type="text" placeholder="Téléphone (facultatif)" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
            </div>
            <x-primary-button type="submit" >Ajouter</x-primary-button>
        </form>

        <ul class="space-y-2 pb-4">
            @foreach ($employes as $employe)
                <li class="p-4 flex items-center justify-between  gap-4 border rounded bg-white dark:bg-gray-800">
                    <form method="POST" action="{{ url('/options/employe/'.$employe->matricule) }}" class="flex justify-between w-full gap-4 items-center">
                        @csrf @method('PUT')
                        <input type="text" name="nom" value="{{ $employe->nom }}" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                        <input type="email" name="email" value="{{ $employe->email }}" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                        <input type="text" name="telephone" value="{{ $employe->telephone }}" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 rounded-md shadow-sm">
                        <x-primary-button type="submit" >Modifier</x-primary-button>
                        
                    </form>
                    <form method="POST" action="{{ url('/options/employe/'.$employe->matricule) }}">
                            @csrf @method('DELETE')
                            <x-danger-button type="submit">Supprimer</x-danger-button>
                    </form>
                </li>
            @endforeach
            
        </ul>
    </div>
</x-app-layout>
<?php

namespace App\Http\Controllers;

use App\Models\employe;
use App\Models\marque;
use App\Models\Peripherique;
use App\Models\site;
use Illuminate\Http\Request;

class PeripheriqueController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');

        $items = !empty($query)
    ? peripherique::query()
        ->where(function ($q) use ($query) {
            $q->where('designiation_article', 'like', "%{$query}%")
              ->orWhere('numero_serie', 'like', "%{$query}%")
              ->orWhere('nom_affectataire', 'like', "%{$query}%")
              ->orWhere('matricule_affectataire', 'like', "%{$query}%");
        })
        ->paginate(10)
        ->appends(['search' => $query])
    : collect();
        $peripheriques = Peripherique::with('user')->orderBy('created_at','desc')->paginate(10);
        return view('dashboard',array('peripheriques' => $peripheriques , 'items' => $items,'query' => $query)); // Logic to list all peripherals
    }
    public function create()
    {
        $peripheriques = Peripherique::all();
        $sites = site::all();
        $marques = marque::all();
        $employe = employe::all();
        return view('peripherique',['peripheriques' => $peripheriques,'marques' => $marques ,'sites' => $sites ,'employe' => $employe ]); // Logic to show the form for creating a new peripheral
    }
    public function store(Request $request)
{
    $validated = $request->validate([
        'sous_famille' => 'required|string',
        'designiation_article' => 'required|string',
        'activite' => 'nullable|string',
        'marque' => 'required|string',
        'modele' => 'nullable|string',
        'code_onee' => 'nullable|string',
        'numero_serie' => 'required|string|unique:peripheriques,numero_serie',
        'nom_affectataire' => 'nullable|string',
        'matricule_affectataire' => 'nullable|string',
        'entite' => 'nullable|string',
        'nom_adresse_site' => 'nullable|string',
        'contrat_acquisition' => 'nullable|string',
        'type' => 'nullable|string',
        'num_contrat' => 'nullable|integer',
        'date_debut_contrat' => 'nullable|date',
        'annee' => 'nullable|integer',
        'objet' => 'nullable|string',
        'titulaire_marche' => 'nullable|string',
        'obs' => 'string',
        'etage' => 'nullable|integer',
    ]);

    $peripherique = Peripherique::create($validated);

    return redirect()->route('peripherique.show', ['id' => $peripherique->id])
        ->with('success', 'Peripherique crée avec succés.');
}
    public function show($id)
    {
        // Logic to show a specific peripheral
        $peripherique = Peripherique::findOrFail($id);
        return view('peripherique.show', ['id' => $id, 'peripherique' => $peripherique]);
    }
    public function destroy(Peripherique $peripherique)
    {
        // Logic to delete a specific peripheral
        $peripherique->delete();
        return redirect()->route('dashboard')->with('success', 'Peripherique est suprimer avec succés.');
    }
    public function edit($id)
    {
        $peripherique = Peripherique::findOrFail($id);
        return view('peripherique.edit', compact('peripherique')); // Logic to show the form for editing a specific peripheral
    }
   public function update(Request $request, $id)
{
    $peripherique = Peripherique::findOrFail($id);

    $validated = $request->validate([
        'sous_famille' => 'required|string',
        'designiation_article' => 'required|string',
        'activite' => 'required|string',
        'marque' => 'required|string',
        'modele' => 'required|string',
        'code_onee' => 'required|string',
        'numero_serie' => 'required|string|unique:peripheriques,numero_serie,' . $id,
        'nom_affectataire' => 'required|string',
        'matricule_affectataire' => 'required|string',
        'entite' => 'required|string',
        'nom_adresse_site' => 'required|string',
        'contrat_acquisition' => 'required|string',
        'type' => 'required|string',
        'num_contrat' => 'required|integer',
        'date_debut_contrat' => 'required|date',
        'annee' => 'required|integer',
        'objet' => 'required|string',
        'titulaire_marche' => 'required|string',
        'obs' => 'nullable|string',
        'etage' => 'required|integer',
    ]);

    $peripherique->update($validated);

    return redirect()->route('dashboard')
        ->with('success', 'Peripherique est mis à jour avec succés.');
}
}
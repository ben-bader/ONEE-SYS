<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marque;
use App\Models\employe;
use App\Models\site;
class OptionsController extends Controller
{
    

public function marque() {
    return view('options.marque', ['marques' => marque::all()]);
}

public function storeMarque(Request $request) {
    marque::create(['name' => $request->name]);
    return back();
}

public function updateMarque(Request $request, $id) {
    marque::findOrFail($id)->update(['name' => $request->name]);
    return back();
}

public function deleteMarque($id) {
    marque::destroy($id);
    return back();
}

// Employe
public function employe() {
    return view('options.employe', ['employes' => employe::all()]);
}

public function storeEmploye(Request $request) {
    employe::create($request->only('matricule', 'nom', 'email', 'telephone'));
    return back();
}

public function updateEmploye(Request $request, $matricule) {
    employe::findOrFail($matricule)->update($request->only('nom', 'email', 'telephone'));
    return back();
}

public function deleteEmploye($matricule) {
    employe::destroy($matricule);
    return back();
}

// Site
public function site() {
    return view('options.site', ['sites' => site::all()]);
}

public function storeSite(Request $request) {
    site::create($request->only('nom_adresse_site', 'code_postal'));
    return back();
}

public function updateSite(Request $request, $id) {
    site::findOrFail($id)->update($request->only('nom_adresse_site', 'code_postal'));
    return back();
}

public function deleteSite($id) {
    site::destroy($id);
    return back();
}
}

<?php

namespace App\Http\Controllers;
use App\Models\Peripherique;
use Illuminate\Http\Request;

class PeripheriqueController extends Controller
{
    public function index()
    {
        $peripheriques = Peripherique::with('user')->orderBy('created_at','desc')->paginate(10);
        return view('dashboard',array('peripheriques' => $peripheriques)); // Logic to list all peripherals
    }
    public function create()
    {
        $peripheriques = Peripherique::all();
        return view('peripherique',['peripheriques' => $peripheriques ]); // Logic to show the form for creating a new peripheral
    }
    public function store(Request $request)
    {
        
        // Validate the request data
        $validatedData = $request->validate([
            'numero_serie' => 'required|string|max:255|unique:peripheriques',
            'nom' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'sous_famille' => 'required|string|max:255',
            'description' => 'nullable|string',
            'etat' => 'required|string|in:actif,inactif',
            'interface' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ]);
        Peripherique::create($validatedData); // Create a new peripheral with the validated data
        return redirect()->route('dashboard'); // Logic to store a new peripheral
    }
    public function show($id)
    {
        // Logic to show a specific peripheral
        $peripherique = Peripherique::findOrFail($id);
        return view('peripherique.show', ['id' => $id, 'peripherique' => $peripherique]);
    }
    public function edit($id)
    {
        // Logic to show the form for editing a specific peripheral
        return view('peripherique.edit', ['id' => $id]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\employe;
class peripherique extends Model
{
    /** @use HasFactory<\Database\Factories\PeripheriqueFactory> */
    protected $fillable = [ 'sous_famille', 'designiation_article', 'activite', 'marque', 'modele', 'code_onee', 'numero_serie', 'nom_affectataire', 'matricule_affectataire', 'entite', 'nom_adresse_site', 'contrat_acquisition', 'type', 'num_contrat', 'date_debut_contrat', 'annee', 'objet', 'titulaire_marche', 'obs', 'etage', ];
    use HasFactory;
    public function employe(){
        return $this->belongsTo(employe::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'matricule_affectataire', 'matricule');
    }
}

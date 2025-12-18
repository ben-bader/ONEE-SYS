<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\peripherique;

class site extends Model
{
    /** @use \Illuminate\Database\Eloquent\Factories\HasFactory<\Database\Factories\SiteFactory> */
    protected $fillable = ['nom_adresse_site', 'code_postal'];
    use HasFactory;

    public function peripheriques()
    {
        return $this->hasMany(peripherique::class, 'nom_adresse_site', 'nom_adresse_site');
    }
}

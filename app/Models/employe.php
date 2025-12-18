<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    protected $primaryKey = 'matricule';
    public $incrementing = false;
    protected $keyType = 'string';
    /** @use \Illuminate\Database\Eloquent\Factories\HasFactory<\Database\Factories\EmployeFactory> */
    protected $fillable = ['matricule', 'nom', 'email', 'telephone'];
    use  HasFactory;

    public function peripheriques()
    {
        return $this->hasMany(peripherique::class, 'matricule_affectataire', 'matricule');
    }
}

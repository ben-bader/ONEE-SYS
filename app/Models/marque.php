<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\peripherique;
class marque extends Model
{
    /** @use \Illuminate\Database\Eloquent\Factories\HasFactory<\Database\Factories\MarqueFactory> */
    protected $fillable = ['name'];
    use HasFactory;

    public function peripheriques()
    {
        return $this->hasMany(peripherique::class, 'marque', 'name');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class peripherique extends Model
{
    /** @use HasFactory<\Database\Factories\PeripheriqueFactory> */
    public $fillable = [
        'numero_serie',
        'nom',
        'type',
        'sous_famille',
        'description',
        'interface',
        'etat',
        'user_id',
    ];
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
}

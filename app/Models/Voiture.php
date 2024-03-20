<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Voiture extends Model
{
    use HasFactory;

    protected $fillable = [
        'marque',
        'modele',
        'annne_fabrication',
        'prix',
        'image',
        'description',
        'disponibilite',
        'agence_id'
    ];

    public function agence(){
        return $this->belongsTo(User::class);
    }
}

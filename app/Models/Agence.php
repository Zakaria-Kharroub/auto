<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Agence extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'ville',
        'adresse',
        'phone',
        'email',
        'chef_agence'

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

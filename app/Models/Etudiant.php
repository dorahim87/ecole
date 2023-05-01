<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ville;
use App\Models\User;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'adresse',
        'phone',
        'email',
        'date_de_naissance',
        'ville_id',
        'user_id'
    ];

    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }

    public function etudiantHasVille()
    {
        return $this->hasOne('App\Models\Ville', 'id', 'ville_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->onDelete('cascade');
    }


    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}

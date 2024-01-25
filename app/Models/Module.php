<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['nom', 'description', 'professeur_id'];

    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }

    // Ajoutez d'autres relations ou méthodes personnalisées ici si nécessaire
}

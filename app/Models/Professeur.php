<?php

namespace App;

use App\Models\Annonce;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    protected $fillable = ['nom', 'prenom', 'email', 'telephone'];

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }

    // Mutateurs ou méthodes personnalisées ici
}

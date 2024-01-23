<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Module;
use App\Models\User;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'titre',
        'contenu',
        'date_annonce',
        'user_id', // Ajoutez le champ user_id
    ];

    // public function module()
    // {
    //     return $this->belongsTo(Module::class);
    // }

    // Relation avec le modèle User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Méthode pour récupérer les annonces postées par les rôles Professeur et Responsable de Filière
    public static function annoncesByRoles()
    {
        return Annonce::whereHas('user', function ($query) {
            $query->where('role', 'Professeur')
                  ->orWhere('role', 'Responsable de Filiere');
        })->get();
    }
}

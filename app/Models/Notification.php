<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'content',
        'announcement_id',
        // Ajoutez d'autres colonnes au besoin
    ];

    // Relation avec le modèle User (si vous souhaitez récupérer l'utilisateur associé à la notification)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec le modèle Announcement (si vous souhaitez récupérer l'annonce associée à la notification)
    public function announcement()
    {
        return $this->belongsTo(Annonce::class);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller
{
    // Autres méthodes du contrôleur...

    public function create(Request $request)
    {
        // Vérifiez si l'utilisateur actuel a le rôle de professeur responsable de module ou de responsable de filière
        if (!auth()->user()->hasRole(['professeur_responsable_module', 'responsable_filiere'])) {
            // Redirigez l'utilisateur vers une page d'erreur ou une autre page appropriée
            return redirect()->route('home')->with('error', 'Vous n\'avez pas la permission de créer une annonce.');
        }

        // Logique pour créer une annonce
        $annonce = new Annonce();
        $annonce->titre = $request->input('titre');
        $annonce->contenu = $request->input('contenu');
        $annonce->date_annonce = now(); // Ajoutez la date d'annonce, si nécessaire
        $annonce->save();

        // Obtenez l'utilisateur connecté (professeur)
        $professeur = Auth::user();

        // Créez une notification pour le professeur
        Notification::create([
            'user_id' => $professeur->id,
            'content' => 'Nouvelle annonce créée : ' . $annonce->titre,
            'announcement_id' => $annonce->id,
        ]);

        // Redirigez le professeur ou effectuez d'autres actions nécessaires
        return redirect()->route('dashboard')->with('success', 'Annonce créée avec succès!');
    }

    public function showCreateForm()
    {
        // Vérifiez si l'utilisateur actuel a le rôle de professeur responsable de module ou de responsable de filière
        if (auth()->user()->hasRole(['professeur_responsable_module', 'responsable_filiere'])) {
            return view('annonces.create');
        } else {
            // Redirigez l'utilisateur vers une page d'erreur ou une autre page appropriée
            return redirect()->route('home')->with('error', 'Vous n\'avez pas la permission de créer une annonce.');
        }
    }
}

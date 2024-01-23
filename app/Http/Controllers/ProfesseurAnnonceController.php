<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Annonce;
use App\Models\User;

class ProfesseurAnnonceController extends Controller
{
    public function index()
    {
        $professeur = Auth::user(); // Récupérer le professeur connecté
        $annonces = $professeur->annonces; // Assurez-vous que la relation est correcte dans votre modèle Professeur

        return view('annonces.index', ['annonces' => $annonces]);
    }

    public function create()
    {
        return view('annonces.create');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            // Autres règles de validation
        ]);

        // Créer une nouvelle annonce associée au professeur
        $professeur = Auth::user();
        $annonce = new Annonce($validatedData);
        $professeur->annonces()->save($annonce);

        return redirect()->route('annonces.index');
    }

    public function cancelSeance($annonceId)
    {
        // Implémenter la logique pour annuler une séance
        // ...

        return redirect()->route('annonces.index');
    }

    // Ajoutez d'autres méthodes en fonction de vos besoins
}

<!-- resources/views/annonces/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Liste des Annonces</h2>

    @foreach($annonces as $annonce)
        <div>
            <h3>{{ $annonce->titre }}</h3>
            <p>{{ $annonce->contenu }}</p>
            <!-- Afficher d'autres détails de l'annonce si nécessaire -->
            <a href="{{ route('annonces.cancelSeance', $annonce->id) }}">Annuler Séance</a>
        </div>
        <hr>
    @endforeach
@endsection




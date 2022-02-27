@extends('layouts.master')
@section('contenu')
<div class="container">
    <form action=" {{ route('update-voiture') }}" method="POST">
        @csrf
        <div class="form-group">
        <input type="hidden" name="id" value="{{ $voiture->id }}">
        <label for="marque">marque</label>
        <input type="text" name="marque" id="marque" value="{{ $voiture->marque }}" class="form-control">
        <label for="modele">modele</label>
        <input type="text" name="modele" id="modele" value="{{ $voiture->modele }}" class="form-control">
        <label for="annee">annee</label>
        <input type="year" name="annee" id="annee" value="{{ $voiture->annee }}" class="form-control">
        <label for="moteur">moteur</label>
        <input type="text" name="moteur" id="moteur" value="{{ $voiture->moteur }}" class="form-control">
        <label for="date">date sortie</label>
        <input type="date" name="date_sortie" id="date_sortie" value="{{ $voiture->date_sortie }}" class="form-control">
        <label for="description">description</label>
        <input type="text" name="description" id="description" value="{{ $voiture->description }}" class="form-control"> <br>
        <input type="submit" class="btn btn-primary" value="modifier">
        </div>
        
    </form>
</div>
@endsection
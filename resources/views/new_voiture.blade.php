@extends('layouts.master')
@section('contenu')
<div class="container">
    <form id="monformulaire">
        @csrf
        <div class="form-group">
        <label for="marque">marque</label>
        <input type="text" name="marque" id="marque" class="form-control">
        <label for="modele">modele</label>
        <input type="text" name="modele" id="modele" class="form-control">
        <label for="annee">annee</label>
        <input type="year" name="annee" id="annee" class="form-control">
        <label for="moteur">moteur</label>
        <input type="text" name="moteur" id="moteur" class="form-control">
        <label for="date">date sortie</label>
        <input type="date" name="date_sortie" id="date_sortie" class="form-control">
        <label for="description">description</label>
        <input type="text" name="description" id="description" class="form-control"> <br>
        <input type="submit" class="btn btn-primary" value="enregistrer">
        </div>
        
    </form>
</div>
@endsection

@section('monscript')
    <script>
        $('#monformulaire').submit(function(event){
            event.preventDefault();

            $.ajax({
                url : '{{ route("store-voiture") }}',
                method : 'POST',
                data : new FormData(this),
                processData : false,
                contentType : false,
                cache : false,
                headers : {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
                
                success : function(data){
                    alert('Inserted succes');
                    $('#monformulaire')[0].reset();
                }
                

            });
        });
    </script>
@endsection
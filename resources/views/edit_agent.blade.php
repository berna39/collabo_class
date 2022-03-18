@extends('layouts.master')
@section('content')
<div class="container">   
    <form action="{{route('agent.update')}}" method="POST" >
       @csrf       
       <input type="hidden" value="{{$agent->id}}" name="id">          
            <div class="form-group">
                <label for="noms">Noms</label>
                <input type="text" name="noms" id="noms" value="{{$agent->noms}}" placeholder="noms" class="form-control">
            </div>
            <div class="form-group">
                <label for="sexe">Sexe</label>
                <select name="sexe" id="sexe" class="form-control"  value="{{$agent->sexe}}">
                    <option>M</option>
                    <option>F</option>
                </select>
            </div>
            <div class="form-group">
                <label for="datenaissance">Date naissance</label>
                <input type="date" name="date_naissance" id="date_naissance" value="{{$agent->date_naissance}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="poste">Poste</label>
                <input type="text" name="poste" id="poste" placeholder="Poste" value="{{$agent->poste}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="salaire">Salaire</label>
                <input type="number" name="salaire" id="salaire" placeholder="Salaire" value="{{$agent->salaire}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="biographie">Biographie</label>
                <input type="text" name="biographie" id="biographie" placeholder="Biographie" value="{{$agent->biographie}}" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Modifier">
            </div>
    </form>
</div>
@endsection

@extends('master')
@section('content')
<div class="container">
    
  <form method="POST" action="{{route('update_produit')}}">
  @csrf  
  <input type="hidden" value="{{$produit->id}}" name="id">
  <div class="input-group mb-3">
      <div class="input-group-prepend">
      </div>
      <input type="text" class="form-control" value="{{$produit->designation}}" placeholder="designation" id="designation" name="designation">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
      </div>
      <input type="text" class="form-control" placeholder="categorie" value="{{$produit->categorie}}" id="categorie" name="categorie">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
      </div>
      <input type="text" class="form-control" placeholder="prix" value="{{$produit->prix}}" id="prix" name="prix">
    </div> 


    <div class="input-group mb-3">
      <div class="input-group-prepend">
      </div>
      <input type="text" class="form-control" placeholder="description" id="description" value="{{$produit->description}}" name="description">
    </div> 

    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="temperature" id="temprerature" value="{{$produit->temprerature}}" name="temprerature">
      <div class="input-group-append">
      </div>
    </div>
    <input class="btn btn-primary btn-block" type="submit" value="Modifier">
  </form>
</div>
@endsection
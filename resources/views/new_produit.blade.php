@extends('master')
@section('content')
<div class="container mt-3">
  @if(Session::has('message'))
  <div class="alert alert-success">Insertion reussie</div>
  @endif

  <form id="monForm">
  @csrf  
  <div class="input-group mb-3">
      <div class="input-group-prepend">
      </div>
      <input type="text" class="form-control" placeholder="designation" id="designation" name="designation">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
      </div>
      <input type="text" class="form-control" placeholder="categorie" id="categorie" name="categorie">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
      </div>
      <input type="text" class="form-control" placeholder="prix" id="prix" name="prix">
    </div> 

    <div class="input-group mb-3">
      <div class="input-group-prepend">
      </div>
      <input type="text" class="form-control" placeholder="description" id="description" name="description">
    </div> 

    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="temperature" id="temperature" name="temperature">
      <div class="input-group-append">
      </div>
    </div>
    <input class="btn btn-primary btn-block" type="submit" value="enregistrer">
  </form>
</div>
@endsection

@section('script')
<script>
  $('#monForm').submit(function (event){
    event.preventDefault();

    $.ajax({
      url : '{{ route("store_produit") }}',
      method : 'POST',
      data : new FormData(this),
      processData: false,
      contentType: false,
      cache: false,
      headers: { 'X-CSRF-Token' : $('meta[name="csrf-token"]').attr('content') },


      success: function (data){
        alert(' successfully');
        $('#monForm')[0].reset();
      }
    });
  });
</script>

@endsection
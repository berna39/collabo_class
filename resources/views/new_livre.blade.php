@extends('layout.index');
@section ('contenu')


<div class="container">
<br><br><br><br>

<form method="{{Route('store_livre')}}" action="POST"  id="monformulaire">
 @csrf
 <div class="row">
     <div class="col-md-4">
     <input type="text" class="form-control" name="titre" placeholder="entre le titre du livre " id="titre"> <br>  <br> 

     </div>
     <div class="col-md-4">
     <input type="text" class="form-control" name="annee" placeholder="entre l'annee" id="annee"> <br>  <br> 

     </div>
     <div class="col-md-4">    <input type="text" class="form-control" name="edition" placeholder="entre l'edition" id="edition"> <br>  <br> 
</div>
 </div>
 <div class="row">
     <div class="col-md-4">    <input type="text" class="form-control" name="auteur" placeholder="entre l'auteur" id="auteur"> <br>  <br> 
</div>
     <div class="col-md-4">    <input type="text" class="form-control" name="editeur" placeholder="entre l'editeur" id="editeur"> <br>  <br> 
</div>
     <div class="col-md-4">    <input type="text" class="form-control" name="resume" placeholder="entre un resume" id="resume"> <br>  <br> 
</div>
 </div>
  <input type="date" class="form-control" name="date_publication"  id="date_publication">
<br>
    <input  type="submit" value="enregistrer" class="btn btn-primary">

</form>
</div>

@endsection


@section('monscript')
<script>
$('#monformulaire').submit(function(event){
   event.preventDefault();
   $.ajax({ 
      url:'{{ route("store_livre") }}',
      method:'POST',
      data: new FormData(this),
      processData:false,
      contentType:false,
      cache:false,
      headers:{'X-CSRF-Token':$('meta[name="csrf-token"]').attr('content')},
      success:function(data)
      {
         alert('inserted succefully');
         $('#monformulaire')[0].reset();
      }
   });
});
</script>

@endsection
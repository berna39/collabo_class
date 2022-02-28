@extends('./layout.index')
@section('contenu')
<br><br><br><br>
<div class="container mt-2">
<form action="{{ Route('livre.update')}}" method="post">
     @csrf
     <input type="hidden" value="{{$livre->id}}" name="id">
   <input type="text" class="form-control" value="{{$livre->titre}} " name="titre" placeholder="entre le titre du livre " id="titre"> <br> 
    <input type="text" class="form-control" value="{{$livre->annee}} " name="annee" placeholder="entre l'annee" id="annee"> <br> 
    <input type="text" class="form-control" value="{{$livre->edition}} " name="edition" placeholder="entre l'edition" id="edition"> <br> 
    <input type="text" class="form-control"  value="{{$livre->auteur}} "name="auteur" placeholder="entre l'auteur" id="auteur"> <br> 
    <input type="text" class="form-control" value="{{$livre->editeur}} " name="editeur" placeholder="entre l'editeur" id="editeur"> <br> 
    <input type="text" class="form-control" value="{{$livre->resume}} " name="resume" placeholder="entre un resume" id="resume"> <br> 
 <input type="date" name="date_publication"  value="{{$livre->date_publication}} "id="date_publication">

     <input type="submit" value="Modifier" class="btn btn-primary">
 </form>
</div>


@endsection
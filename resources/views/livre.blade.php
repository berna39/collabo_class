@extends('layout.index')
@section('contenu')
 <div class="container">
 <br><br><br><br><br>
 <h2>NOS LIVRES</h2>
     <a href="{{route('new_livre')}}" class="offset-8 btn btn-primary">Nouveau livre</a>
     <table class="table  table-bordered stripped mt-2">

      <thead>
          <th>Numero</th>
          <th>Livre</th>
          <th>Annee</th>
          <th>Edition</th>
          <th>Auteur</th>
          <th>Editeur</th>
          <th>Resume</th>
          <th>Date publication</th>
          <th>Action</th>
      </thead>
      <tbody>
          @foreach($liv as $item)
          <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->titre}}</td> 
              <td>{{$item->annee}}</td>
              <td>{{$item->edition}}</td>
              <td>{{$item->auteur}}</td>
              <td>{{$item->editeur}}</td>
              <td>{{$item->resume}}</td>
              <td>{{$item->date_publication}}</td>
              <td>
              <a href="{{'/edit_livre/'.$item->id}} " class="btn btn-success">edit </a>
              <a href="{{'/delete_livre/'.$item->id}}"  class="btn btn-danger">delete</a>

              </td>
          </tr>
          @endforeach
      </tbody>
     </table>
 </div> 

@endsection
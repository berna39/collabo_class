@extends('layout.master')
@section('contenu')

<a href="new_vol" class="btn btn-primary"> new vol</a>
<div class="container">
<h6> LA LISTE DES VOLS</h>
</div>


<table class="table table-bordered table-stripped m-2">
    <thead>
        <tr>
        <th>Code</th>
        <th>Avion</th>
        <th>Ville de depart</th>
        <th>Ville de destination</th>
        <th>Date</th>
        <th>Description</th>
        <th>Action</th>
        </tr>
      

    </thead>
    <tbody>
    @foreach ($vols as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->avion}}</td>
            <td>{{$item->depart}}</td>
            <td>{{$item->destination}}</td>
            <td>{{$item->dates}}</td>
            <td>{{$item->description}}</td>
          
            <td>
            <a href="{{'/edit_vol/'.$item->id}}" class="btn btn-primary">edit |</a>
  
  <a href="{{'/destroy_vol/'.$item->id}} " class="btn btn-warning">delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection
@extends('master')

@section('content')
<div class="container">
  @if(\Session::has('message'))
      <div class="alert alert-primary">{{\Session::get('message')}}</div>
  @endif
  <a href="{{route('new_produit')}}" class="btn btn-primary offset-10">New produit</a>
  <table class="table table-bordered mt-3">
    <thead>
      <tr>
        <th>#</th>
        <th>designation</th>
        <th>categorie</th>
        <th>prix</th>
        <th>description</th>
        <th>temperature</th>
      </tr>
    </thead>
    <tbody>
    @foreach($produits as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->designation}}</td>
        <td>{{$item->categorie}}</td>
        <td>{{$item->prix}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->temprerature}}</td>
        <td>
          <a class="btn btn-success" href="{{'/edit_produit/'.$item->id}}".$id>Edit</a>
          <a class="btn btn-danger" href="{{'/delete_produit/'.$item->id}}">delete</a>
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
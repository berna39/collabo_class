@extends('layouts.master')
@section('content')
<div class="container">
    @if(\Session::has('message'))
        <div class="alert alert-primary">{{ \Session::get('message')}}</div>
    @endif
   
    <a class="btn btn-primary offset-10 mt-5" href="{{ route('new_agent') }}">Add New agents</a>
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Noms</th>
                <th>Sexe</th>
                <th>Date de naissance</th>
                <th>Poste</th>
                <th>Salaire</th>
                <th>Biographie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
             @foreach ($agent as $item)
            <tr>              
                <td>{{$item->id}}</td>
                <td>{{$item->noms}}</td>
                <td>{{$item->sexe}}</td>
                <td>{{$item->date_naissance}}</td>
                <td>{{$item->poste}}</td>
                <td>{{$item->salaire}}</td>
                <td>{{$item->biographie}}</td>
                <td>
                    <a class="btn btn-success" href="{{'/agent.edit/'.$item->id}}".$id>edit</a>
                    <a class="btn btn-danger" href="{{'/agent.delete/'.$item->id}}">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
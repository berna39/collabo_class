@extends('layouts.master')
@section('contenu')
    <div class="container">
       <a href="{{ route('voitures') }}" class="btn btn-info">New Voiture</a>
        <table class="table table-striped table-bordered table-hover mt-2">
            <thead>
                <tr>
                    <th>id</th>
                    <th>marque</th>
                    <th>modele</th>
                    <th>annee</th>
                    <th>moteur</th>
                    <th>date sortie</th>
                    <th>description</th>
                </tr>    
            </thead>
            <tbody>
                @foreach($voiture as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->marque }}</td>
                    <td>{{ $item->modele }}</td>
                    <td>{{ $item->annee }}</td>
                    <td>{{ $item->moteur }}</td>
                    <td>{{ $item->date_sortie }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <a href="{{'/edit-voiture/'.$item->id }}">edit</a> | 
                        <a href="{{ '/delete-voiture/'.$item->id }}">delete</a>
                    </td>
                </tr>
                @endforeach
            
            </tbody>
            </table>
            
    </div>
@endsection
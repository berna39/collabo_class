@extends('layout.master')
@section('contenu')


<div class="container">
    <form  action=" {{ route('update_vol')}}"  method="POST" >
    @csrf
 <div class="form-group">
 <input type="hidden" value="{{$vol->id}}" name="id">
 </div>
<div class="form-group">
    <label for="">avion</label>
    <input type="text" name="avion" id="avion" class="form-control"  value="{{$vol->avion}}">
</div>
<div class="line"></div>
<div class="form-group">
    <label for="">ville de depart</label>
    <input type="text" name="depart" id="depart" class="form-control" value="{{$vol->depart}}">
</div>
<div class="line"></div>
<div class="form-group">
    <label for="">ville de destination</label>
    <input type="text" name="destination" id="destination" class="form-control" value="{{$vol->destination}}">
</div>
<div class="line"></div>
<div class="form-group">
    <label for="">date</label>
    <input type="date" name="dates" id="dates" class="form-control" value="{{$vol->dates}}">
</div>
<div class="line"></div>
<div class="form-group">
    <label for="">description</label>
    <input type="text" name="description" id="description" class="form-control" value="{{$vol->description}}">
</div>
<div class="line"></div>
<input type="submit" value="edit">
</form>
</div>

@endsection
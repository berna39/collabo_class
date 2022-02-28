@extends('layouts.master')
@section('content')
<div class="container">
    @if($errors->any())
        <div class="alert alert-primary">
            @foreach ($errors->all() as $item)
                <p>{{ $item }}</p>
            @endforeach
        </div>
    @endif
   
    <form id="monForm">
       @csrf                 
            <div class="form-group">
                <label for="noms">Noms</label>
                <input type="text" name="noms" id="noms" placeholder="noms" class="form-control">
            </div>
            <div class="form-group">
                <label for="sexe">Sexe</label>
                <select name="sexe" id="sexe" class="form-control" >
                    <option>M</option>
                    <option>F</option>
                </select>
            </div>
            <div class="form-group">
                <label for="datenaissance">Date naissance</label>
                <input type="date" name="date_naissance" id="date_naissance" class="form-control">
            </div>
            <div class="form-group">
                <label for="poste">Poste</label>
                <input type="text" name="poste" id="poste" placeholder="Poste" class="form-control">
            </div>
            <div class="form-group">
                <label for="salaire">Salaire</label>
                <input type="number" name="salaire" id="salaire" placeholder="Salaire" class="form-control">
            </div>
            <div class="form-group">
                <label for="biographie">Biographie</label>
                <input type="text" name="biographie" id="biographie" placeholder="Biographie" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enregistrer">
            </div>
    </form>
</div>
@endsection

@section('script')
    <script>
        $('#monForm').submit(function(event){

            event.preventDefault();
            
            $.ajax({
                url:'{{ route("store_agent")}}',
                method: 'POST',
                data: new FormData(this),
                processData:false,
                contentType:false,
                cache:false,
                headers:{'X-CSRF-Token':$('meta[name="csrf-token"]').attr('content')},
                
                success: function(data){
                    alert('insert successfully');
                    $('#monForm')[0].reset();
                }
            });
        });
    </script>
@endsection
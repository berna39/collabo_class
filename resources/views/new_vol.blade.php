@extends('layout.master')
@section('contenu')
<div class="container">  <p> veuillez entrer les coordonnees </p></div>
    
   <div class="container-fluid">



 
   <!-- <form method="POST" action="{{Route('store_vol')}}"> -->

   <form id="monvol">      
   @csrf
           <div class="form-group">
               <label for="">avion</label>
               <input type="text" name="avion" id="avion" class="form-control" required>
           </div>
           <div class="line"></div>
           <div class="form-group">
               <label for="">ville de depart</label>
               <input type="text" name="depart" id="depart" class="form-control" required>
           </div>
           <div class="line"></div>
           <div class="form-group">
               <label for="">ville de destination</label>
               <input type="text" name="destination" id="destination" class="form-control" required>
           </div>
           <div class="line"></div>
           <div class="form-group">
               <label for="">date</label>
               <input type="date" name="dates" id="dates" class="form-control" required>
           </div>
           <div class="line"></div>
           <div class="form-group">
               <label for="">description</label>
               <input type="text" name="description" id="description" class="form-control" required>
           </div>
           <div class="line"></div>
           <input type="submit" value="enregistrer">
       </form>
   </div> 

@endsection
@section('script')
<script>
$('#monvol').submit(function(event){
    // alert('submitted');
    event.preventDefault();

    $.ajax({
        url:'{{route("store_vol")}}',
        method:'POST',
        data: new FormData(this),
        processData:false,
        contentType:false,
        cache:false,
        headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},

        success: function(data)
        {
            alert('inserted succefully');
            $('#monvol')[0].reset();

        }
    });
});

</script>

@endsection





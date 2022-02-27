<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit-Player || Collabo_class</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-5">
        @if(Session::has('message'))
        <div class="alert alert-success text-center">
            <h4>PLAYER UPDATED SUCCESSFULLY</h4>
        </div>
        @endif

        <h3>Edit player</h3>
        <form action="{{ route('update_player') }}" method="POST">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$player->id}}">
            <div class="form-group">
                <label for="noms">Noms : </label>
                <input type="text" class="form-control" id="noms" name="noms" required value="{{ $player->noms }}">
            </div>
            <div class="form-group">
                <label for="date_naissance">Date de Naissance : </label>
                <input type="date" class="form-control" id="date_naissance" name="date_naissance" required value="{{ $player->date_naissance }}>
            </div>
            <div class="form-group">
                <label for="nationalite">Nationalité</label>
                <select class="form-control" id="nationalite" name="nationalite" required value="{{ $player->nationalite }}">
                    <option value="Congolaise">Congolaise</option>
                    <option value="Rwandaise">Rwandaise</option>
                    <option value="Ougandaise">Ougandaise</option>
                    <option value="Kenyanne">Kenyanne</option>
                    <option value="Burundaise">Burundaise</option>
                </select>
            </div>
            <div class="form-group">
                <label for="poids">Poids: </label>
                <input type="number" class="form-control" id="poids" name="poids" required value="{{ $player->poids }}">
            </div>
            <div class="form-group">
                <label for="taille">Taille: </label>
                <input type="number" class="form-control" id="taille" name="taille" required value="{{ $player->taille }}">
            </div>
            <div class="form-group">
                <label for="biographie">Biographie</label>
                <textarea class="form-control" id="biographie" rows="3" name="biographie" required>{{ $player->biographie }}</textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
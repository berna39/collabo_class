<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player || Collabo_class</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-5">
        @if(Session::has('message'))
        <div class="alert alert-success text-center">
            <h4>PLAYER INSERTED SUCCESSFULLY</h4>
        </div>
        @endif

        @if(Session::has('messageEdit'))
        <div class="alert alert-success text-center">
            <h4>PLAYER UPDATED SUCCESSFULLY</h4>
        </div>
        @endif

        @if(Session::has('messageDelete'))
        <div class="alert alert-success text-center">
            <h4>PLAYER DELETED SUCCESSFULLY</h4>
        </div>
        @endif

        <h3>Players list</h3>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            New Player
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Player</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('store_player') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="noms">Noms : </label>
                                <input type="text" class="form-control" id="noms" name="noms" required>
                            </div>
                            <div class="form-group">
                                <label for="date_naissance">Date de Naissance : </label>
                                <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
                            </div>
                            <div class="form-group">
                                <label for="nationalite">Nationalité</label>
                                <select class="form-control" id="nationalite" name="nationalite" required>
                                    <option value="Congolaise">Congolaise</option>
                                    <option value="Rwandaise">Rwandaise</option>
                                    <option value="Ougandaise">Ougandaise</option>
                                    <option value="Kenyanne">Kenyanne</option>
                                    <option value="Burundaise">Burundaise</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="poids">Poids: </label>
                                <input type="number" class="form-control" id="poids" name="poids" required>
                            </div>
                            <div class="form-group">
                                <label for="taille">Taille: </label>
                                <input type="number" class="form-control" id="taille" name="taille" required>
                            </div>
                            <div class="form-group">
                                <label for="biographie">Biographie</label>
                                <textarea class="form-control" id="biographie" rows="3" name="biographie" required></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="container pt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Noms</th>
                        <th scope="col">Date Naissance</th>
                        <th scope="col">Nationalité</th>
                        <th scope="col">Poids</th>
                        <th scope="col">Taille</th>
                        <th scope="col">Biographie</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($players as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->noms }}</td>
                        <td>{{ $item->date_naissance}}</td>
                        <td>{{ $item->nationalite }}</td>
                        <td>{{ $item->poids }}</td>
                        <td>{{ $item->taille }}</td>
                        <td>{{ $item->biographie }}</td>
                        <td><a href="edit_player/{{$item->id}}" class="btn btn-primary">Edit</a>&nbsp;&nbsp;<a href="destroy_player/{{$item->id}}" class="btn btn-danger">Delete</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
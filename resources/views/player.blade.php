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
    <div class="container">
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
                        <form>
                            <div class="form-group">
                                <label for="noms">Noms : </label>
                                <input type="text" class="form-control" id="noms" name="noms">
                            </div>
                            <div class="form-group">
                                <label for="date_naissance">Date de Naissance : </label>
                                <input type="date" class="form-control" id="date_naissance" name="date_naissance">
                            </div>
                            <div class="form-group">
                                <label for="nationalite">Nationalité</label>
                                <select class="form-control" id="nationalite" name="nationalite">
                                    <option value="Congolaise">Congolaise</option>
                                    <option value="Rwandaise">Rwandaise</option>
                                    <option value="Ougandaise">Ougandaise</option>
                                    <option value="Kenyanne">Kenyanne</option>
                                    <option value="Burundaise">Burundaise</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="poids">Poids: </label>
                                <input type="number" class="form-control" id="poids" name="poids">
                            </div>
                            <div class="form-group">
                                <label for="taille">Taille: </label>
                                <input type="number" class="form-control" id="taille" name="taille">
                            </div>
                            <div class="form-group">
                                <label for="biographie">Biographie</label>
                                <textarea class="form-control" id="biographie" rows="3" name="biographie"></textarea>
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
        <div class="container">
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</body>

</html>
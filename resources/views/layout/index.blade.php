<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>livres</title>
    <meta name="csrf-token" content="{{csrf_token()}}"/>
    
</head>
<body>
    <!-- menu  -->
    <div class="container">


        <div class="navbar navbar-expand bg-dark fixed-top">
        <ul id="menu " class="navbar nav">
        <li class="nav-item"><a href="{{Route('livre')}}" class="nav-link">LIVRES</a></li>
     
    </ul>
        </div>


    </div>
   
    <!-- fin menu -->


    @yield('contenu')
    @yield('monscript')

    @yield('monscript')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
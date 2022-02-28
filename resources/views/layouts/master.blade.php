<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Agents</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
   @yield('content')
   @yield('script')
=======
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    
    
    <style>

        #menu{
            background-color:black;
        }
        #menu li a{
            color: #fff;
            text-decoration: none;
        }
        li{
            
        }
    </style>
</head>
<body>
    <!-- Menu -->
    <ul id="menu">
        <li><a href="#">Voiture</a></li>
    </ul>
    <!--End Menu --> 

    @yield('contenu')

    @yield('monscript')
    


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    

>>>>>>> bbb982687cc7292b6fcf0a6e2006d7a4b66c6b68
</body>
</html>
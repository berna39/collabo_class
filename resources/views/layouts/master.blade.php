<!DOCTYPE html>
<html lang="en">
<head>
    
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

    

</body>
</html>
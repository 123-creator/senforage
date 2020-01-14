@extends('layout')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LISTE_CLIENT</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Styles -->

</head>
<body>
<div>
                <div>
                        <a href="/" class="btn btn-info">HOME</a>
                        
                        <a href="/Client" class="btn btn-info">AJOUTER_CLIENT</a>
                
                
                </div>


    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col" class="text-info">#</th>
            <th scope="col" class="text-info">nom_famille</th>
            <th scope="col" class="text-info">nom_chef</th>
            <th scope="col" class="text-info">nom_village</th>
            <th scope="col" class="text-info">adresse</th>
            <th scope="col" class="text-info">Telephone</th>
            <th scope="col" class="text-info">Modification</th>
            <th scope="col" class="text-info">supprimer</th>


        </tr>
        </thead>
        @foreach($c as $Client)
        <tbody>
        <tr>
            <th scope="row" class="text-info">{{$Client->idC}}</th>
            <td class="text-info">{{$Client->nomfamille}}</td>
            <td class="text-info">{{$Client->nomchef}}</td>
            <td class="text-info">{{$Client->village}}</td>
            <td class="text-info">{{$Client->adresse}}</td>
            <td class="text-info">{{$Client->tel}}</td>
            <td>
                <p>
                    <a  class="btn btn-primary" href="/Client/{{$Client->idC}}/edit">editer</a>
                </p>
            </td>
            <td>
            <form action="/Client/{{$Client->idC}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form>

            </td>
            
            
        </tr>
        </tbody>

@endforeach
    </table>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>

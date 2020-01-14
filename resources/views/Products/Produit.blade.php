<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- @foreach($u as $Utilisateur)
    <h3>{{$Utilisateur->login}}{{$Utilisateur->password}}</h3>
    @endforeach -->

    <table>
        <tr>
            <td><h4>login</h4></td>
            <td><h4>password</h4></td>

        </tr>
        @foreach($u as $Utilisateur)
        <tr>
        <td>{{$Utilisateur->login}}</td>
        <td>{{$Utilisateur->password}}</td>
        </tr>
    
    @endforeach
        
       
    </table>
    

</body>
</html>
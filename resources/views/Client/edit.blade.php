@extends('layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDITER_CLIENT</title>
</head>
<body>


        <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form action="{{route('update_client',['client'=>$client->idC])}}" method="post">
          @csrf
          @method('patch')
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Nom de famille</label>
                <input class="form-control" name="nomfamille" value="{{$client->nomfamille}}" id="Nom de famille" type="text" placeholder="Nom de famille" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Nom du chef de village</label>
                <input class="form-control" name="nomchef" value="{{$client->nomchef}}" id="Nom du chef de village" type="text" placeholder="Nom du chef de village" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Nom du village</label>
                <input class="form-control" name="village" value="{{$client->village}}" id="Nom du village" type="text" placeholder="Nom du village" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Adresse</label>
                <input class="form-control" name="adresse" value="{{$client->adresse}}" id="Adresse" type="text" placeholder="Adresse Email" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>numero de telephone</label>
                <input class="form-control" name="tel" value="{{$client->tel}}" id="numero de telephone" type="tel" placeholder="Numero de Telephone" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">AJOUTER</button>
              <a class="btn btn-danger btn-xl" href="/Client/list.blade.php"> ANNULER</a>

            </div>
          </form>
        </div>
      </div>

    </div>
</body>

</html>
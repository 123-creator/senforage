@extends('layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDITER_COMPTEUR</title>
</head>
<body>


        <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form action="{{route('update_compteur',['compteur'=>$compteur->numC])}}" method="post">
          @csrf
          @method('patch')
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>NUMERO_COMPTEUR</label>
                <input class="form-control" name="num_compteur" value="{{$compteur->num_compteur}}" id="NUMERO_COMPTEUR" type="text" placeholder="NUMERO_COMPTEUR " required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Consommation</label>
                <input class="form-control"  name="consomation" value="{{$compteur->consomation}}"id="Consommation" type="text" placeholder="Consommation" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>numero_Abonnement</label>
                <input class="form-control" name="numA" value="{{$compteur->numA}}" id="numero_Abonnement" type="text" placeholder="numero_Abonnement" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            
            
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">AJOUTER</button>
              <a class="btn btn-danger btn-xl" href="/compteur/compteur.blade.php"> ANNULER</a>

            </div>
          </form>
        </div>
      </div>

    </div>
</body>

</html>
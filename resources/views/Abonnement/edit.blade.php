@extends('layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDITER_ABONNEMENT</title>
</head>
<body>


        <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form action="{{route('update_abonnement',['abonnement'=>$abonnement->numA])}}" method="post">
          @csrf
          @method('patch')
         
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>date_Abonnement</label>
                <input class="form-control" name="dateA" id="date_Abonnement" value="{{$abonnement->dateA}}" type="date" placeholder="date_Abonnement" required="required" data-validation-required-message="SVP renseigner une date.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>descriptif</label>
                <input class="form-control" name="descriptif" id="descriptif" value="{{$abonnement->descriptif}}" type="text" placeholder="descriptif" required="required" data-validation-required-message="SVP renseigner une description.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>id_clients</label>
                <input class="form-control" name="idC" id="id_clients" value="{{$abonnement->idC}}" type="text" placeholder="id_clients" required="required" data-validation-required-message="SVP renseigner ce champ.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            
            
            
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">AJOUTER</button>
              <a class="btn btn-danger btn-xl" href="/Abonnement/list.blade.php"> ANNULER</a>

            </div>
          </form>
        </div>
      </div>

    </div>
</body>

</html>
@extends('layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJOUT_AB0NNEMENT</title>
</head>
<body>


        <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form action="{{route('Abonnement.store')}}" method="post">
          @csrf
         
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>date_Abonnement</label>
                <input class="form-control" name="dateA" id="date_Abonnement" type="date" placeholder="date_Abonnement" required="required" data-validation-required-message="SVP renseigner une date.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>descriptif</label>
                <input class="form-control" name="descriptif" id="descriptif" type="text" placeholder="descriptif" required="required" data-validation-required-message="SVP renseigner une description.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div>
                <select name="idC" id="id_Client" class="form-control">
                    <option value=""></option>
                    @foreach($client as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>

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
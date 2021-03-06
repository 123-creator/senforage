@extends('layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJOUT_CONSOMMATION</title>
</head>
<body>


        <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form action="{{route('Consommation.store')}}" method="post">
          @csrf
          <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Consommation</label>
                <input class="form-control" name="cons" id="Consommation" type="text" placeholder="Consommation" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Date_consommation</label>
                <input class="form-control" name="datecons" id="date_consommation" type="date" placeholder="date_consommation" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            
            <div>
                <select name="numC" id="numero_compteur" class="form-control">
                    <option value=""></option>
                    @foreach($compteur as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>

              </div>


            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">AJOUTER</button>
              <a class="btn btn-danger btn-xl" href="/Consommation/list.blade.php"> ANNULER</a>

            </div>
          </form>
        </div>
      </div>

    </div>
</body>

</html>
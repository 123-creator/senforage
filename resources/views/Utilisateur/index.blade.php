<div class="container">

            <!-- Modal inscription -->
            <div class="modal fade" id="inscription" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">INSCRIPTION</h5>
                          
                        </div>
                        
                             <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form action="{{route('Utilisateur.store')}}" method="post" name="sentMessage" id="contactForm" novalidate="novalidate">
              
          @csrf
              
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>LOGIN</label>
                  <input class="form-control" id="email" type="email" placeholder="Adresse Email" >
                  
                </div>
              </div>
              <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>PASSWORD</label>
                    <input class="form-control" id="prenom" type="password" placeholder="Password" >
                    
                  </div>
                </div>

                <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">S'INSCRIRE</button>
              </div>
             
             
              
              
              
            </form>
    </div>
@extends('layout')

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>projetKhalil</title>

  <!-- Custom fonts for this theme -->
  <!-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> -->
  <link href="{{asset('css/all.min.css')}}" rel="stylesheet" type="text/css"> 
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <link href="{{asset('css/freelancer.min.css')}}" rel="stylesheet">
  <!-- <link href="{{asset('css/all.min.css')}}" rel="stylesheet"> -->

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <div class="col-lg-4 mr-auto">
          <!-- a propos Avatar Image -->
      <a href="#page-top"><img  class="masthead-avatar mb-0" src="img/10.svg" alt=""></a>
            <!-- <a class="navbar-brand js-scroll-trigger font-weight-bold " href="#page-top" >SEN FORAGE</a> -->
           <a class="page-section-heading text-center text-uppercase text-primary mb-0 navbar-brand js-scroll-trigger font-weight-bold " href="#page-top">SENFORAGE</a>


      
        </div>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"  href="#about">A propos</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
          @guest
                      <li class="nav-item">
                                <a class="nav-link text-center text-uppercase text-primary mb-0 navbar-brand js-scroll-trigger font-weight-bold " href="{{ route('login') }}">{{ __('SE CONNECTER') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-center text-uppercase text-primary mb-0 navbar-brand js-scroll-trigger font-weight-bold " href="{{ route('register') }}">{{ __("S'INSCRIRE") }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link " href="#" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                </a>

                                
                            </li>
                            <li>
                              <a class="dropdown-item  text-primary  js-scroll-trigger font-weight-bold" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                  {{ __('deconnexion') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                            </li>
                        @endguest          
                        </li>
          
        </ul>
      </div>
    </div>
  </nav>
  <!-- <div>
  @yield("content")

  </div> -->
    <!-- Masthead -->
    <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="img/9.svg" alt="">
      
    <div class="container">
          <div>
                <a href="Client/list.blade.php" class="btn btn-secondary">CLIENT</a>
               
             
                <a href="Abonnement/index.blade.php" class="btn btn-secondary">ABONNEMENT</a>
                
                
                <a href="compteur/compteur.blade.php"  class="btn btn-secondary">COMPTEUR</a>
         
                <a href="Consommation/index.blade.php" class="btn btn-secondary">CONSOMMATION</a>
               
                
            </div>
    
    
  </div>
         
      
       

    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-secondary text-white mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">A propos</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- About Section Content -->
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">SEN FORAGE est une entreprise evoluant dans la production et la distribution d'eau pour les villages au nord du senegal.</p>
        </div>
        <div class="col-lg-4 mr-auto">
          <!-- a propos Avatar Image -->
      <img class="masthead-avatar mb-5" src="img/10.svg" alt="">
        </div>
      </div>

    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">CONTACT</h2>
                

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          

        </div>
        <div class="divider-custom-line"></div>
      </div>
      <i class="fas fa-star"></i>
          <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
                telephone<br>:77-483-88-19 <br>
                :33-835-84-44
            </h2>
     
    </div>
  </section>
   

  <!-- Footer -->
  <!-- <footer class="copyright py-4 text-center text-white">
    <div class="container">
      
          <small>Copyright &copy; KHALIL Website 2019</small>
      
    </div>
  </footer> -->
  <script src="{{asset('js/app.js')}}"></script>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>
  <script src="{{asset('js/freelancer.min.js')}}"></script>

</body>

</html>

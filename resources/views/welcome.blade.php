<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KINGDOM - Emerkhammaat</title>
  <meta content="" name="description">
  <meta content="" name="emerkhammaat, kingdom, royaume, terre, afrique, black, lives , matter, origin caviaros, kalisso">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: WeBuild - v2.2.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">

      <!--<div class="logo float-left">-->
      <!--  <h1 class="text-light"><a href="index.html"><span>EMERKHAMMAAT- KINGDOM</span></a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <!--</div>-->

      <div class="contact-link float-right">
        <a href="#contact" class="scrollto">Contactez-nous</a>
      </div>

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container ">
      <div class="pt-5"></div>
      <div class="pb-1 ">
          <img src="{{asset('logo.png')}}" height="200" width="200" class="rounded mx-auto " alt="Logo Emerkhammaat">
      </div>
      <h1>EMERKHAMMAAT - KINGDOM</h1>
      <h2 class="p-0 m-0">Nous travaillons dur pour améliorer notre site Web et nous serons prêts à lancer bientôt</h2>
      <div class="countdown p-2 m-0" data-count="2021/10/27" data-template="%w semaines %d jours <br> %H:%M:%S"></div>

      <form action="{{route('notify.store')}}" method="post" role="form" class="php-email-form">
        @csrf
        <div class="row no-gutters">
          <div class="col-md-6 form-group pr-md-1">
            <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Veuillez saisir au moins 4 caractères" />
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group pl-md-1">
            <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="Veuillez entrer un email valide" />
            <div class="validate"></div>
          </div>
        </div>

        <div class="mb-1">
          <div class="loading">Chargement...</div>
          <div class="error-message"></div>
          <div class="success-message"></div>
          <div class="sent-message">Votre demande de notification a été envoyée. Merci!</div>
        </div>
        <div class="text-center"><button type="submit">S'inscrire</button></div>
      </form>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Nous contacter</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="icofont-google-map"></i>
              <h3>Adresse</h3>
              <address>Congo-Brazzaville</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="icofont-phone"></i>
              <h3>Téléphone</h3>
              <p><a href="tel:+242056922210">+242 05 692 22 10</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="icofont-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">royaume.emerkhammaat@gmail.com</a></p>
            </div>
          </div>

        </div>
        <!-- Alert User -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <div class="form">
          <form action="{{ route('contact.save') }}" method="post" role="form" class="php-email-form">
            @csrf
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" data-rule="minlen:4" data-msg="Veuillez saisir au moins 4 caractères" />
              <div class="validate"></div>
              <!-- Show error -->
                @if ($errors->has('name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="Veuillez entrer un email valide" />
              <div class="validate"></div>
               <!-- Show error -->
                @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                @endif        
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Votre Téléphone" data-rule="phone" data-msg="Veuillez entrer un téléphone valide" />
              <div class="validate"></div>
               <!-- Show error -->
                @if ($errors->has('phone'))
                    <div class="alert alert-danger">
                        {{ $errors->first('phone') }}
                    </div>
                @endif        
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Veuillez saisir au moins 8 caractères du sujet" />
              <div class="validate"></div>
              <!-- Show error -->
                @if ($errors->has('subject'))
                    <div class="alert alert-danger">
                        {{ $errors->first('subject') }}
                    </div>
                @endif   
              
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Veuillez saisir au moins un bout de message " placeholder="Message"></textarea>
              <div class="validate"></div>
              <!-- Show error -->
                @if ($errors->has('message'))
                    <div class="alert alert-danger">
                        {{ $errors->first('message') }}
                    </div>
                @endif  
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Votre message a été envoyé. Merci!</div>
            </div>
            <div class="text-center"><button  type="submit" name="send" value="Send">Envoyer le message</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>KINGDOM - EMERKHAMMAAT</span></strong>. Tous les droits sont réservés
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/ -->
        Développer par <a href="https://kalisso.com/">Kalisso.com</a>
      </div>
    </div>
  </footer><!-- End #footer -->

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-countdown/jquery.countdown.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
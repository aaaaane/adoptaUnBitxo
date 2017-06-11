<!DOCTYPE html>
<html>
<head>
<title>Adopta un bitxo!</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="public/assets/images/logo-128x128.png" type="image/png">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="public/assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="public/assets/tether/tether.min.css">
  <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="public/assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="public/assets/theme/css/style.css">
  <link rel="stylesheet" href="public/assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="public/assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="public/assets/tether/tether.min.css">
  <link rel="stylesheet" href="public/assets/mobirise-gallery/style.css">
  
</head>
<body >
<section id="menu-0">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <span class="navbar-logo"><img src="public/assets/images/logo-128x128.png" alt="bitxo"></span>
                        <a class="navbar-caption" href="{{url('/')}}">Adopta un bitxo!</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="{{url('/')}}">INICI</a></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="{{url('/sobreNosaltres')}}" aria-expanded="false">Sobre nosaltres</a><div class="dropdown-menu"><a class="dropdown-item" href="{{url('/register')}}">Registra't</a></div></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="" aria-expanded="false">Els nostres bitxos</a><div class="dropdown-menu"><a class="dropdown-item" href="{{url('/gats')}}">Gats</a><a class="dropdown-item" href="{{url('/gossos')}}">Gossos</a><a class="dropdown-item" href="{{url('/rosegadors')}}">Rosegadors</a></div></li><li class="nav-item nav-btn"><a class="nav-link btn btn-white-outline btn-white" href="{{url('adopta')}}">ADOPTA</a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

@foreach ($animals as $animal)
<p>{{$animal->id}}</p>

<section class="engine"><a rel="external" href="https://mobirise.com">Site Builder</a></section><section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery1-d" data-filter="false" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 0rem;">
    <!-- Filter -->
    

    <!-- Gallery -->
    <div class="mbr-gallery-row">
        <div class=" mbr-gallery-layout-default">
            <div>
                <div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Awesome" data-video-url="false">
                        <div href="#lb-gallery1-d" data-slide-to="0" data-toggle="modal">
                            
                            

                            <img alt="" src="{{$animal->image}}">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-d">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-d" class=" active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-d" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-d" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-d" data-slide-to="3"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-d" data-slide-to="4"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-d" data-slide-to="5"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-d" data-slide-to="6"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-d" data-slide-to="7"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img alt="" src="{{$animal->image}}">
                        </div>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery1-d">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery1-d">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
<script src="public/assets/web/assets/jquery/jquery.min.js"></script>
  <script src="public/assets/tether/tether.min.js"></script>
  <script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="public/assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="public/assets/dropdown/js/script.min.js"></script>
  <script src="public/assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="public/assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="public/assets/jarallax/jarallax.js"></script>
  <script src="public/assets/theme/js/script.js"></script>


  <script src="public/assets/jarallax/jarallax.js"></script>

  <script src="public/assets/masonry/masonry.pkgd.min.js"></script>
  <script src="public/assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="public/assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>

  <script src="public/assets/mobirise-gallery/player.min.js"></script>
  <script src="public/assets/mobirise-gallery/script.js"></script>

<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-3" style="background-color: rgb(65, 63, 63); padding-top: 90px; padding-bottom: 90px;">
    
    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <div><img src="public/assets/images/logo-128x128.png"></div>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Adreça</strong><br>
Carrer Fictici, 5<br>Reus, Tarragona<br>
Catalunya</p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Contace</strong><br>
Email: support@adoptaunbitxo.com<br>
Phone: +34 000 0000 001<br></p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><br><br></p>
            </div>

        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-2" style="background-color: rgb(65, 63, 63); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
    <div class="container">
        <p class="text-xs-center">Copyright (c) 2017 Oihane.</p>
    </div>
</footer>
 
</body>
</html>


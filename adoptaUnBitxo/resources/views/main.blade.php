<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Adopta un bitxo!</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{!! asset('public/assets/images/logo-128x128.png')!!}" type="image/png">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">

 {!! Html::style('public/assets/images/logo-128x128.png')!!}
  {!! Html::style('public/assets/bootstrap-material-design-font/css/material.css')!!}
  
  {!! Html::style('public/assets/tether/tether.min.css')!!}
{!! Html::style('public/assets/bootstrap/css/bootstrap.min.css')!!}
{!! Html::style('public/assets/dropdown/css/style.css')!!}
{!! Html::style('public/assets/animate.css/animate.min.css')!!}
{!! Html::style('public/assets/theme/css/style.css')!!}
{!! Html::style('public/assets/mobirise/css/mbr-additional.css')!!}
{!! Html::style('public/assets/et-line-font-plugin/style.css')!!}
{!! Html::style('public/assets/tether/tether.min.css')!!}
{!! Html::style('public/assets/mobirise-gallery/style.css')!!}

  

 @yield('css')
</head>
<body >
@include('nav')

@yield('content')

 @include('footer')


{!! Html::script('public/assets/web/assets/jquery/jquery.min.js')!!}
{!! Html::script('public/assets/tether/tether.min.js')!!}
{!! Html::script('public/assets/bootstrap/js/bootstrap.min.js')!!}
{!! Html::script('public/assets/smooth-scroll/smooth-scroll.js')!!}
{!! Html::script('public/assets/dropdown/js/script.min.js')!!}
{!! Html::script('public/assets/touch-swipe/jquery.touch-swipe.min.js')!!}
{!! Html::script('public/assets/viewport-checker/jquery.viewportchecker.js')!!}
{!! Html::script('public/assets/jarallax/jarallax.js')!!}
{!! Html::script('public/assets/theme/js/script.js')!!}

{!! Html::script('public/assets/jarallax/jarallax.js')!!}
{!! Html::script('public/assets/masonry/masonry.pkgd.min.js')!!}
{!! Html::script('public/assets/imagesloaded/imagesloaded.pkgd.min.js')!!}
{!! Html::script('public/assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js')!!}
{!! Html::script('public/assets/mobirise-gallery/player.min.js')!!}
{!! Html::script('public/assets/mobirise-gallery/script.js')!!}


@yield('scripts')

 
</body>
</html>
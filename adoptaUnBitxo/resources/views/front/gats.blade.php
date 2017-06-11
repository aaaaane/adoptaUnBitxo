@extends('main')

@section('content')
<section class="mbr-section article mbr-parallax-background" id="msg-box8-e" style="background-image: url(public/assets/images/adopta-2000x1125.jpg); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 style="color:white;" class="mbr-section-title display-2">NO DUBTIS MÉS</h3>
                <div style="color:white;" class="lead"><p>Aquí et deixem amb els nostres GATS! No dubtis en salvar una vida!</p></div>
                
            </div>
        </div>
    </div>

</section>

@foreach ($animals as $animal)
@if ($animal->type === 'Gat')
@if($animal->visible === 'Si')
<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery1-d" data-filter="false" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 0rem;">
    <!-- Filter -->

                   

    
    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">

              

              <div class="mbr-table-cell col-md-5 text-xs-center text-md-right content-size">
              <br><br>
                  <p><b>{{$animal->name}}</b></p>
                  <div class="lead">

                   <p>Gènere: {{$animal->gender}}</p>
                    <p>Edat: {{$animal->age}}</p>
                    @if ($animal->adopcio_id != null)
                    <p style="color: red;">Aquest bitxo ja ha estat adoptat!!</p>
                    @endif

                  </div>

                  <div><a  class="btn btn-primary" href="detall/{{$animal->id}}">Vull saber-ne més!</a></div>
              </div>


              


              <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 50%;">
                  <div class="mbr-figure" data-toggle="modal" data-slide-to="0" href="#lb-gallery1-d"><img src="{{$animal->image}}"></div>
              </div>

            </div>
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
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-d" class=" active" data-slide-to="0"></li>
                        @if ($animal->image2 != null)
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-d" data-slide-to="1"></li>
                        @endif 
                        @if ($animal->image3 != null)
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-d" data-slide-to="2"></li>
                        @endif 
                        @if ($animal->image4 != null)
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-d" data-slide-to="3"></li>
                        @endif
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img alt="" src="{{$animal->image}}">
                        </div>
                        @if ($animal->image2 != null)
                        <div class="carousel-item">
                            <img alt="" src="{{$animal->image2}}">
                        </div>
                        @endif
                        @if ($animal->image3 != null)
                        <div class="carousel-item">
                            <img alt="" src="{{$animal->image3}}">
                        </div>
                        @endif
                        @if ($animal->image3 != null)
                        <div class="carousel-item">
                            <img alt="" src="{{$animal->image4}}">
                        </div>
                        @endif
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
@endif
@endif
@endforeach



  
  
  <input name="animation" type="hidden">

  @stop
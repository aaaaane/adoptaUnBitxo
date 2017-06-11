@extends('main')

@section('content')
@foreach ($animals as $animal)
@if($animal->visible === 'Si')

<section class="mbr-section article mbr-parallax-background" id="msg-box8-e" style="background-image: url(../public/assets/images/adopta-2000x1125.jpg); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
            @if ($animal->gender === "Mascle")
                <h3 style="color:white;" class="mbr-section-title display-2">Coneix al {{$animal->name}}</h3>
                @elseif ($animal->gender ==="Femella")
                <h3 style="color:white;" class="mbr-section-title display-2">Coneix la {{$animal->name}}</h3>
                @endif                
            </div>
        </div>
    </div>

</section>





<section class="mbr-section" id="msg-box5-g" style="background-color: rgb(255, 255, 255); padding-top: 0px; padding-bottom: 0px;">

    
    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">

              

              <div class="mbr-table-cell col-md-5 text-xs-center text-md-right content-size">
                  <div class="lead">
                  <p></p>
                    <p>Nom: {{$animal->name}}</p>
                    <p>Gènere: {{$animal->gender}}</p>
                    <p>Edat: {{$animal->age}}</p>
                    @if ($animal->type ==="Gos")
                    <p>Mida: {{$animal->size}}</p>
                    @endif

                    <p>Està esterilitzat? {{$animal->sterilized}}</p>
                    <p>{{$animal->comment}}</p>



                  </div>
                  <div>
                  @if (Auth::check())
                     @if (Auth::user()->name ==='admin')
                     <a  class="btn btn-primary" href="/adoptaUnBitxo/editarAnimal1/{{$animal->id}}">Editar</a>
                     @else

                      @if ($animal->adopcio_id != null)
                        <p style="color: Red">Aquest animal ja ha estat adoptat!!!</p>
                        <p><a href="{{url('/adopta')}}">Torna enrere per a veure els nostres bitxos!!</a></p>
                      @else
                      <a  class="btn btn-primary" href="/adoptaUnBitxo/adopcio/{{$animal->id}}">ADOPTAR!</a><a  class="btn btn-primary" href="/adoptaUnBitxo/apadrinar/{{$animal->id}}">APADRINAR!</a>
                      @endif
                    @endif
                @else
                 @if ($animal->adopcio_id != null)
                        <p style="color: Red">Aquest animal ja ha estat adoptat!!!</p>
                        <p><a href="{{url('/adopta')}}">Torna enrere per a veure els nostres bitxos!!</a></p>
                      @else
                      <a  class="btn btn-primary" href="/adoptaUnBitxo/adopcio/{{$animal->id}}">ADOPTAR!</a><a  class="btn btn-primary" href="/adoptaUnBitxo/apadrinar/{{$animal->id}}">APADRINAR!</a>
                      @endif

                @endif

                  </div>

              </div>


              


              <div href="#lb-gallery1-d" data-slide-to="0" data-toggle="modal">
                            <p></p>
                            <img src="../{{$animal->image}}">
                            <p></p>
                        </div>

            </div>
        </div>
    </div>

</section>










<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery1-d" data-filter="false" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 0rem;">
    <!-- Filter -->
    
    <!-- Gallery -->
    

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-d">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-d" class=" active" data-slide-to="0"></li>@if ($animal->image2 != null)<li data-app-prevent-settings="" data-target="#lb-gallery1-d" data-slide-to="1"></li>@endif  @if ($animal->image3 != null)<li data-app-prevent-settings="" data-target="#lb-gallery1-d" data-slide-to="2"></li>@endif  @if ($animal->image4 != null)<li data-app-prevent-settings="" data-target="#lb-gallery1-d" data-slide-to="3"></li>@endif
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../{{$animal->image}}">
                        </div>
                        @if ($animal->image2 != null)
                        <div class="carousel-item">
                            <img src="../{{$animal->image2}}">
                        </div>
                        @endif
                        @if ($animal->image3 != null)
                        <div class="carousel-item">
                            <img src="../{{$animal->image3}}">
                        </div>
                        @endif
                        @if ($animal->image4 != null)
                        <div class="carousel-item">
                            <img src="../{{$animal->image4}}">
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
@else
<section class="mbr-section article mbr-parallax-background" id="msg-box8-e" style="background-image: url(../public/assets/images/adopta-2000x1125.jpg); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 style="color:white;" class="mbr-section-title display-2">L'animal que sol·licites no existeix.</h3>
            </div>
        </div>
    </div>

</section>
@endif
@endforeach

@stop
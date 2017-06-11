@extends('main')

@section('content')
<section class="mbr-section article mbr-parallax-background" id="msg-box8-e" style="background-image: url(public/assets/images/adopta-2000x1125.jpg); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 style="color:white;" class="mbr-section-title display-2">NO DUBTIS MÉS</h3>
                <div style="color:white;" class="lead"><p>Aquí et deixem amb els nostres bitxos! No dubtis en salvar una vida!</p></div>
                
            </div>
        </div>
    </div>

</section>

@foreach ($animals as $animal)
@if($animal->visible === 'Si')

<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery1-d" data-filter="false" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 0rem;">
  

                   

    
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
                  <div href="#lb-gallery1-d" data-slide-to="0" data-toggle="modal">

                 
        
                 <img src="{{$animal->image}}"/>

                   <span class="icon-focus"></span>
                  </div>
              </div>

            </div>
        </div>
    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

  

</section>

@endif
@endforeach

<input name="animation" type="hidden">
@stop
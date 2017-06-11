
@extends('main')

@section('content')

    <section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background" id="header1-1" style="background-image: url(public/assets/images/adoptar-perro-bilbao.jpg);">

    

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">

                    <h1 style="color: black;" class="mbr-section-title display-1">Adopta un bitxo!</h1>
                    <p style="color: black;" class="mbr-section-lead lead">Algú va dir una vegada que adoptant no canviaràs el món sencer, però li canviaràs el món a algú!&nbsp;</p>
                    
                </div>
            </div>
        </div>
    </div>

    

</section>

    <section class="mbr-info mbr-section mbr-section-md-padding" id="msg-box2-9" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">

    
    <div class="container">
        <div class="row">

            <div class="mbr-table-md-up">
              <div class="mbr-table-cell col-md-4">
                  <div class="text-xs-center"><a class="btn btn-primary" href="{{url('adopta')}}">ADOPTA</a></div>
              </div>
              <div class="mbr-table-cell mbr-right-padding-md-up col-md-8 text-xs-center text-md-left">
                  <h3 style="color:white;" class="mbr-info-title mbr-section-title display-2">NO PERDIS MÉS EL TEMPS</h3>
                  <h2 class="mbr-info-subtitle mbr-section-subtitle">Decideix salvar la vida a algú avui!!</h2>
              </div>
            </div>

            

        </div>
    </div>
</section>
    

</section>

@stop

@section('scripts')
@stop
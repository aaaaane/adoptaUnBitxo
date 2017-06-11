@extends('main')
@section('content')
@foreach ($animals as $animal)
<section class="mbr-section article mbr-parallax-background" id="msg-box8-e" style="background-image: url(../public/assets/images/adopta-2000x1125.jpg); padding-top: 120px; padding-bottom: 120px;">
   <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
   </div>
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-md-offset-2 text-xs-center">
            @if ($animal->gender === "Mascle")
            <h3 style="color:white;" class="mbr-section-title display-2">Fes una donació per al {{$animal->name}}</h3>
            @elseif ($animal->gender ==="Femella")
            <h3 style="color:white;" class="mbr-section-title display-2">Fes una donació per la {{$animal->name}}</h3>
            @endif                
         </div>
      </div>
   </div>
</section>



<div class="section" style="background-color: rgb(48, 48, 48); padding-top: 60px; padding-bottom: 40px; color:grey;">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="panel panel-default">
               <div class="mbr-table-cell mbr-right-padding-md-up col-md-8 text-xs-center text-md-left">
                  <font color="grey">
                     <h3>Fes una donació</h3>
                     <p>Cada donació, per petita que sigui és una gran ajuda per a nosaltres i els nostres bitxos! Moltes gràcies a tots aquells que col·laboreu amb nosaltres per fer-los la vida una mica millor.</p>
                  </font>
                  <br>
                  <div class="panel-body">
                    <font color="grey">
                     <h4>Donar 5€ per PayPal</h4>
                    </font>
                     <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="GL9CRBBAN9RSA">
                        <input id="5" type="image" src="https://www.sandbox.paypal.com/es_ES/ES/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal, la forma rápida y segura de pagar en Internet.">
                        <img alt="" border="0" src="https://www.sandbox.paypal.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                     </form>
                    </div>
                    <br><br>
                    <div class="panel-body">

                    <font color="grey">
                     <h4>Donar</h4>
                    </font>
                    {!! Form::open([ 'method' => 'post', 'novalidate']) !!}
                        {{ csrf_field() }}
                        {!! Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control' , 'required' => 'required']) !!}
                        {!! Form::hidden('animal_id', $animal->id, ['class' => 'form-control' , 'required' => 'required']) !!}
                        {!! Form::text('amount', '10', ['class' => 'form-control' , 'required' => 'required']) !!}
                        <br>
                         {!! Form::submit('Donar', ['class' => 'btn btn-success ' ] ) !!}

                    {!!Form::close()!!}

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endforeach
@stop
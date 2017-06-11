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
            <h3 style="color:white;" class="mbr-section-title display-2">Adopta al {{$animal->name}}</h3>
            @elseif ($animal->gender ==="Femella")
            <h3 style="color:white;" class="mbr-section-title display-2">Adopta la {{$animal->name}}</h3>
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
                     <h3>Adopta!</h3>
                     <p>Adoptant salvaràs la vida d'un animal a la vegada que ompliràs la teva. Aquesta és la sol·licitud online per a fer l'adopció.</p>
                  </font>
                  <br>
                  <div class="panel-body">
                  @if ($animal->adopcio_id != null)
                  <p style="color: red;">Aquest bitxo ja ha estat adoptat!!!!</p>
                  @else
                    {!! Form::open([ 'method' => 'post', 'novalidate']) !!}
                        {{ csrf_field() }}
                        {!! Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control' , 'required' => 'required']) !!}
                        {!! Form::hidden('animal_id', $animal->id, ['class' => 'form-control' , 'required' => 'required']) !!}
                        <p>Si de veritat vols adoptar 
                        @if ($animal->gender === "Mascle")
                         el 
                         @else
                          la
                          @endif
                          {{$animal->name}} només cal que facis clic a "Adoptar" per a començar a processar la teva sol·licitud!</p>
                        <br>
                         {!! Form::submit('Adoptar', ['class' => 'btn btn-success ' ] ) !!}

                    {!!Form::close()!!}
                    @endif

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endforeach
@stop
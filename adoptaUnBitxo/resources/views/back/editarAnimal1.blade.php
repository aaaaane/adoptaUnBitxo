@extends('main')

@section('content')
<div class="section" style="background-color: rgb(48, 48, 48); padding-top: 120px; padding-bottom: 40px; color:grey;">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="mbr-table-cell mbr-right-padding-md-up col-md-8 text-xs-center text-md-left">
@foreach ($animals as $animal)
                 @if ($animal->gender === "Mascle")
                <h3 style="color:grey;">Edita al {{$animal->name}}</h3>
                @elseif ($animal->gender ==="Femella")
                <h3 style="color:grey;">Edita la {{$animal->name}}</h3>
                @endif   
                            
                <div class="panel-body">
                
                    {!! Form::open([ 'method' => 'post', 'novalidate']) !!}
                        {{ csrf_field() }}
                        {!! Form::hidden('id', $animal->id) !!}

                       <label  class="col-md-4 control-label">Edat actual:</label>
                       <input type="text" class="form-control" value="{{$animal->age}}" readonly="readonly">
                        <br>
                        {!! Form::label('age', 'Nova edat: ', ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('age', '', ['class' => 'form-control']) !!}
                        <p>--------</p>
                        <br>
                        <label class="col-md-4 control-label">Està esterilitzat/da? </label>
                       <input type="text" class="form-control" value="{{$animal->sterilized}}" readonly="readonly">
                        <br>
                         {!! Form::label('sterilized', 'Està esterilitzat/da? ', ['class' => 'col-md-4 control-label']) !!}
                        {!!  Form::text('sterilized', $animal->sterilized, ['class' => 'form-control']
                        ) !!}
                        <p>--------</p>
                        <br>
                        <label class="col-md-4 control-label">Comentari actual:  </label>
                       <input type="text" class="form-control" value="{{$animal->comment}}" readonly="readonly">
                        <br>
                        {!! Form::label('comment', 'Nou comentari: ', ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('comment', '', ['class' => 'form-control']) !!}
                        <p>--------</p>
                        <br>
                        <label class="col-md-4 control-label">Imatge principal actual:  </label>
                       <input type="text" class="form-control" value="{{$animal->image}}" readonly="readonly">
                        <br>
                        {!! Form::label('image', 'Nova imatge principal (recorda ficar el prefixe "/public/image/"): ', ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('image', '', ['class' => 'form-control']) !!}
                        <p>--------</p>
                        <br>
                       <label class="col-md-4 control-label">Imatge 2 actual:  </label>
                       <input type="text" class="form-control" value="{{$animal->image2}}" readonly="readonly">
                        <br>
                        {!! Form::label('image2', 'Imatge 2 (recorda ficar el prefixe "/public/image/"): ', ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('image2', '', ['class' => 'form-control']) !!}
                        <p>--------</p>
                        <br>
                        <label class="col-md-4 control-label">Imatge 3 actual:  </label>
                       <input type="text" class="form-control" value="{{$animal->image3}}" readonly="readonly">
                        <br>
                        {!! Form::label('image3', 'Imatge 3 (recorda ficar el prefixe "/public/image/"): ', ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('image3', '', ['class' => 'form-control']) !!}
                        <p>--------</p>
                        <br>
                        <label class="col-md-4 control-label">Imatge 4 actual:  </label>
                       <input type="text" class="form-control" value="{{$animal->image4}}" readonly="readonly">
                        <br>
                        {!! Form::label('image4', 'Imatge 4 (recorda ficar el prefixe "/public/image/"): ', ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('image4', '', ['class' => 'form-control']) !!}


                        <br>
                         {!! Form::submit('Editar', ['class' => 'btn btn-success ' ] ) !!}

                    {!!Form::close()!!}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

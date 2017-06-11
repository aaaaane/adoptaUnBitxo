@extends('main')

@section('content')
<div class="section" style="background-color: rgb(48, 48, 48); padding-top: 120px; padding-bottom: 40px; color:grey;">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="mbr-table-cell mbr-right-padding-md-up col-md-8 text-xs-center text-md-left">

                            <font color="grey"><h3>Afegir un animal</h3></font><br>
                <div class="panel-body">
                    {!! Form::open([ 'method' => 'post', 'novalidate']) !!}
                        {{ csrf_field() }}

                        {!! Form::label('name', 'Nom: ') !!}
                        {!! Form::text('name', '', ['class' => 'form-control' , 'required' => 'required']) !!}
                        <br>
                        {!! Form::label('age', 'Edat: ') !!}
                        {!! Form::text('age', '', ['class' => 'form-control' , 'required' => 'required']) !!}
                        <br>
                        {!! Form::label('gender', 'Gènere: ') !!}
                        {!!  Form::select('gender', [
                            'Mascle' => 'Mascle',
                            'Femella' => 'Femella'], ['class' => 'form-control' , 'required' => 'required']
                        ) !!}
                        <br>
                        {!! Form::label('sterilized', 'Esterilitzat: ') !!}
                        {!!  Form::select('sterilized', [
                            'Si' => 'Si',
                            'No' => 'No'], ['class' => 'form-control' , 'required' => 'required']
                        ) !!}
                        <br>
                        {!! Form::label('size', 'Mida: ') !!}
                        {!! Form::text('size', '', ['class' => 'form-control', 'required' => 'required']) !!}
                        <br>
                        {!! Form::label('type', 'Tipus: ') !!}
                        {!!  Form::select('type', [
                            'Gat' => 'Gat',
                            'Gos' => 'Gos',
                            'Rosegador' => 'Rosegador'],
                             ['class' => 'form-control' , 'required' => 'required']
                        ) !!}
                        <br>
                        {!! Form::label('comment', 'Comentari: ') !!}
                        {!! Form::text('comment', '', ['class' => 'form-control', 'required' => 'required']) !!}
                        <br>
                        {!! Form::label('image', 'Imatge principal: ') !!}
                        {!! Form::text('image', 'public/image/', ['class' => 'form-control', 'required' => 'required']) !!}
                        <br>
                        {!! Form::label('image2', 'Imatge 2: ') !!}
                        {!! Form::text('image2', '', ['class' => 'form-control']) !!}
                        <br>
                        {!! Form::label('image3', 'Imatge 3: ') !!}
                        {!! Form::text('image3', '', ['class' => 'form-control']) !!}
                        <br>
                        {!! Form::label('image4', 'Imatge 4: ') !!}
                        {!! Form::text('image4', '', ['class' => 'form-control']) !!}


                        <br>
                         {!! Form::submit('Afegir', ['class' => 'btn btn-success ' ] ) !!}

                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@extends('main')
@section('content')
<div class="section" style="background-color: rgb(48, 48, 48); padding-top: 120px; padding-bottom: 40px; color:grey;">
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="panel panel-default">
            <div class="mbr-table-cell mbr-right-padding-md-up col-md-8 text-xs-center text-md-left">
               <font color="grey">
                  <h3>Editar els animals</h3>
               </font>
               <br>
               <div class="container">
                  <div class="container">
                     <div class="table-responsive">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th>Nom animal</th>
                                 <th>Edat</th>
                                 <th>Gènere</th>
                                 <th>Editar</th>
                                 <th>Visible?</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($animals as $animal)
                              <tr>
                                 <td>{{ $animal->name }}</td>
                                 <td>{{ $animal->age }}</td>
                                 <td>{{ $animal->gender }}</td>
                                 <td><a href = 'editarAnimal1/{{ $animal->id }}'><input type="button" class="btn btn-default" value="Editar"/></a></td>

                                 {!! Form::open([ 'method' => 'post', 'novalidate']) !!}
                                     {{ csrf_field() }}
                                     {!! Form::hidden('id', $animal->id) !!}
                                 @if ($animal->visible === 'Si')
                                 {!! Form::hidden('visble', 'No') !!}
                                 <td>{!! Form::submit('No mostrar el bitxo', ['class' => 'btn btn-default ' ] ) !!}</td>
                                 @else 
                                 {!! Form::hidden('visible', 'Si') !!}
                                 <td>{!! Form::submit('Mostrar el bitxo', ['class' => 'btn btn-default ' ] ) !!}</td>
                                 @endif
                                 

                               {!!Form::close()!!}
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
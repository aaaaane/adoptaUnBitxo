@extends('main')

@section('content')


<section class="mbr-section article mbr-parallax-background" id="msg-box8-e" style="background-image: url(public/assets/images/adopta-2000x1125.jpg); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 style="color:white;" class="mbr-section-title display-2">Els meus apadrinaments</h3>            
            </div>
        </div>
    </div>

</section>

<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery1-d" data-filter="false" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 0rem;">
  

                   

    
    <div class="container">
        <div class="container">                                                                              
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Nom animal</th>
        <th>Edat</th>
        <th>Gènere</th>
        <th>Data</th>
        <th>Quantitat</th>
      </tr>
    </thead>
    
    <tbody>

    @foreach ($apadrinaments as $apadrinament)
    @if (Auth::User()->id === $apadrinament->user_id)
      <tr>
        <td>{{ $apadrinament->animal->name }}</td>
        <td>{{ $apadrinament->animal->age }}</td>
        <td>{{ $apadrinament->animal->gender }}</td>
        <td>{{ $apadrinament->created_at }}</td>
        <td>{{ $apadrinament->amount }}</td>
      </tr>
      @endif
      @endforeach
    </tbody>
  </table>
  </div>
</div>
    </div>

  

</section>
@stop
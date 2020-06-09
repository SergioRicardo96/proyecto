@extends('layouts.appSuscriptor')

@section('content')

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
    
      @foreach ($consulta1 as $item)
      @if (auth()->id() == $item->user_id)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">



            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="..\img\{{ $item->imagen1 }}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="..\img\{{ $item->imagen2 }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                 <img class="d-block w-100" src="..\img\{{ $item->imagen3 }}" alt="Third slide">
               </div>
              </div>
            </div>
        
            <div class="card-body">
              <p class="card-text"><strong>{{ $item->nombre }}</strong></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">


                  <!-- ----------------------------------------------------------------------------------------- -->
                  <center>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{ $item->id }}">
                      Ver Info
                    </button>

                    <div class="modal fade" id="modal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Informacion de {{ $item->nombre}} </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        








         
<div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="../img/{{ $item->imagen1 }}" class="rounded" alt="..." width="100%" height="100%"></div></div>
<div class="row">

    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Servicio : </strong>
            {{ $item->nombre}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>costo : </strong>
            {{ $item->costo}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>mora : </strong>
            {{ $item->mora}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>horario : </strong>
            {{ $item->horario}}
        </div>
    </div>
</div>














      </div>
     
    </div>
  </div>
</div>







                
                </div>
              </center>
              </div>
            </div>
          </div>
        </div>





         @endif
      @endforeach


        
      </div>
    </div>
  </div>
</center>

</main>

@endsection

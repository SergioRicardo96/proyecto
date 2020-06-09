@extends('layouts.appCobrador')

@section('content')

<center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">
  Crear Servicio
</button>
</center>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Crear Servicio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        


        <form class="form-group" method="POST" action="/cobrador/Servicio" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="">Nombre</label>
    <input type="text" name="nombre" class="form-control">
  </div>
   
  <div class="form-group">
    <label for="">Costo</label>
    <input type="text" name="costo" class="form-control">
  </div>

  <div class="form-group">
    <label for="">Mora</label>
    <input type="text" name="mora" class="form-control">
  </div>

  <div class="form-group">
    <label for="">Horario</label>
    <input type="text" name="horario" class="form-control">
  </div>

  <div class="form-group">
    <label for="">Imagen 1</label>
    <input type="file" name="avatar1">
  </div>

  <div class="form-group">
    <label for="">Imagen 2</label>
    <input type="file" name="avatar2">
  </div>

  <div class="form-group">
    <label for="">Imagen 3</label>
    <input type="file" name="avatar3">
  </div>

<div class="modal-footer">
  <button type="submit" class="btn btn-primary">Guardar</button>

</div>
</form>









      </div>
      
        
      
    </div>
  </div>
</div>

<!-- --------------------------------------------------------------------------------------- -->

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        
      @foreach ($servi as $item)

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

<!-- ----------------------------------------------------------------------------------------------------- -->
              

                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal{{ $item->id }}Y{{ $item->id }}">
                      Modificar
                    </button>

<div class="modal fade" id="modal{{ $item->id }}Y{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modificar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        






<form class="form-group" method="POST" action="/cobrador/Servicio" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="">Nombre</label>
    <input type="text" name="nombre" value="{{ $item->nombre }}" class="form-control">
  </div>
   
  <div class="form-group">
    <label for="">Costo</label>
    <input type="text" name="costo" value="{{ $item->costo }}"class="form-control">
  </div>

  <div class="form-group">
    <label for="">Mora</label>
    <input type="text" name="mora" value="{{ $item->mora }}" class="form-control">
  </div>

  <div class="form-group">
    <label for="">Horario</label>
    <input type="text" name="horario" value="{{ $item->mora }}" class="form-control">
  </div>

    <div class="form-group">
    <label for="">Imagen 1</label>
    <input type="file" name="avatar1">
  </div>

  <div class="form-group">
    <label for="">Imagen 2</label>
    <input type="file" name="avatar2">
  </div>

  <div class="form-group">
    <label for="">Imagen 3</label>
    <input type="file" name="avatar3">
</div>
  <button type="submit" class="btn btn-primary">Actualizar</button>

</form>















</div>
      
    </div>
  </div>
</div>




                   <!-- <a class="btn btn-primary" href="/Servicio/{{$item->slug}}" role="button">Ver</a> -->
                  <!-- <a class="btn btn-warning" href="/cobrador/Servicio/{{$item->slug}}/edit/" role="button">Modificar</a> -->
                 <form class="btn-group" method="POST" action="/cobrador/Servicio/{{$item->slug}}">
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-danger">Eliminar</button>
          </form>
                
                </div>
              </center>
              </div>
            </div>
          </div>
        </div>







      @endforeach


        
      </div>
    </div>
  </div>
</center>

</main>








@endsection

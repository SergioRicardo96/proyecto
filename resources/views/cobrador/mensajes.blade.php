@extends('layouts.appCobrador')

@section('content')
<div class="container">
    
    <h1>Envio de Mensajes</h1> <br><br>

    @if(Session::has('flash_message'))
{{Session::get('flash_message')}}
@endif
   
 <form class="form-group" method="POST" action="/cobrador/enviarMensaje" enctype="multipart/form-data">
  @csrf

    <div class="form-group">
    <label for="travel">Selecionar Usuarios</label><br>
    <select name="travel" class="selectpicker" multiple>
      @foreach ($usuario as $item)
      <option value="{{ $item->email }}">{{ $item->name }}</option>
      @endforeach
    </select>
    </div>

  <div class="form-group">
    <label for="">Asunto</label>
    <input type="text" name="asunto" class="form-control">
  </div>
   

 <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" type="text" name="cuerpo" class="form-control" rows="3"></textarea>
  </div>




<div class="modal-footer">
  <button type="submit" class="btn btn-primary">Guardar</button>

</div>
</form>

    

            
     
    
</div>


<script type="text/javascript">
  // Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>


@endsection



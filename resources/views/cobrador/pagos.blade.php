@extends('layouts.appCobrador')

@section('content')

    
    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pagos</h1> <br><br>



@foreach ($consulta as $item)
@if ($item->id)


<ul class="nav justify-content-center">


</ul>

 @endif
@endforeach
         
     






@endsection



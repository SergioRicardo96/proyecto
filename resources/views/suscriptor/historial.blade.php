@extends('layouts.appSuscriptor')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <th>Servicio</th>
              <th>Fecha</th>
              <th>Costo</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($consulta1 as $item1 ) 
                @if (auth()->id() == $item1->user_id)
            <tr>
                  <td>{{ $item1->nombre }}</td>
                  <td>{{ $item1->created_at }}</td>
                  <td>{{ $item1->costo }}</td>
              
            </tr>
            @endif
              @endforeach
          
           
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection

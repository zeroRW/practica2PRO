@extends('template')

@section('contenido')

@if (session()->has('actualizar'))
    {!!
    " <script> Swal.fire(
        'Very nice!',
        'Recuerdo actualizado',
        'success'
      ) </script>"
    !!}
@endif

@if (session()->has('eliminado'))
    {!!
    " <script> Swal.fire(
        'Alerta',
        'El recuerdo ha sido eliminado correctamente',
        'warning'
      ) </script>"
    !!}
@endif


    <h1 class="displat mb-5 mt-4 text-center"> CONSULTA RECUERDOS </h1>
    
    <div class="conteiner col-md-8 offset-md-2">

        @foreach ($ConsultaRec as $consulta)
            
        
        <div class="card text-left">
            
            <div class="card-header">
                <h5 class="text-primary text-center">{{$consulta->fecha}}</h5>
            </div>
            
            <div class="card-body">
                <h5 class="card-title">{{$consulta->titulo}}</h5>
                <p class="card-text">{{$consulta->recuerdo}}</p>
            </div>
            
            <div class="card-footer text-muted">

                <a href="{{route('recuerdo.edit',$consulta->idRecuerdo)}}" class="btn btn-outline-success">Editar</a>

                <a href="{{route('recuerdo.show',$consulta->idRecuerdo)}}" class="btn btn-outline-danger">Eliminar</a>
                
            </div>
        </div>
        <br>
        @endforeach
        
    </div>
    

@stop
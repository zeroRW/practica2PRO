@extends('template')

@section('contenido')


    <h1 class="displat mb-5 mt-4 text-center"> Eliminar recuerdo </h1> 

    <div class="alert alert-danger col-md-8 offset-md-2 text-center" role="alert">
        <strong>
            ¿Esta seguro de eliminar este recuerdo? No se podra consultar nuevamente.   
        </strong>
      </div>

    <div class="conteiner col-md-8 offset-md-2">     
               
        <form action="{{route('recuerdo.destroy', $consultaIDD->idRecuerdo)}}" method="POST">

            @csrf
            {!!method_field('delete')!!}

            <div class="card text-left">
            
            <div class="card-header">
                <h5 class="text-primary text-center">{{$consultaIDD->fecha}}</h5>
            </div>
            
            <div class="card-body">
                <h5 class="card-title">{{$consultaIDD->titulo}}</h5>
                <p class="card-text">{{$consultaIDD->recuerdo}}</p>
            </div>
            
            <div class="card-footer text-muted">

                <a href="{{route('recuerdo.store')}}" class="btn btn-outline-danger">Cancelar</a>

                <button type="submit" class="btn btn-outline-success m-1">Confirmar</button>
                
            </div>
        </div>
        <br>
        </form>
    </div>
    

@stop
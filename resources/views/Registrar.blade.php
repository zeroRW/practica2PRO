@extends('template')

@section('contenido')

@if (session()->has('confirmacion'))
    {!!
    " <script> Swal.fire(
        'Very nice!',
        'Proceso finalizado en la BD',
        'success'
      ) </script>"
    !!}
@endif

    <div class="conteiner col-md-8 offset-md-2">

        <h1 class="display-2 text-center mb-5"> Registrar </h1>
            @if ($errors->any())

                    @foreach ($errors->all() as $error)

                    <!-- MENSAJE DE ALERTA -->

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{$error}}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    @endforeach

                @endif 

    <!-- FORMULARIO -->

    <div class="card text-left mb-5 border">
        
        <div class="card-header text-center" style="color: black">
          Querido diario...
        </div>

            <div class="card-body">
                <form class="m-4" action="{{route('recuerdo.store')}}" method="POST">

                @csrf
                
                <div class="mb-3 text-left">
                    <label for="form-label" style="color: black">Titulo:</label>
                    <input type="text" class="form-control" name="txtTitulo" value="{{old('txtTitulo')}}">
                    <p class=" fst-italic" style="color: crimson">
                        {{$errors->first('txtTitulo')}}
                    </p>
                    
                </div>
                <div class="mb-3">
                    <label for="form-label" style="color: black">Texto:</label>
                    <textarea class="form-control" name="txtTexto" id="" cols="30" rows="4">{{old('txtTexto')}}</textarea>
                    <p class="fst-italic" style="color: crimson">
                        {{$errors->first('txtTexto')}}
                    </p>
                    
                </div>      
            </div>
        
            <div class="card-footer">

                    <button type="submit" class="btn btn-dark m-1">Guardar Recuerdo</button>

                </form>

            </div>
        </div>
    </div>
@stop
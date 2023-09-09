@extends('adminlte::page')


@section('title', 'Articulo')

@section('content_header')
    <h1>Editar Articulo</h1>
@stop



@section('content')

<form action="/articulo/{{$articulo->id}}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input type="text" value="{{$articulo->descripcion}}" name="descripcion" id="descripcion" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input type="number" value="{{$articulo->cantidad}}" name="cantidad" id="cantidad" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <a href="/articulo" class="btn btn-info" >Cancelar</a>
    <button type="submit" class="btn btn-info" >Guardar</button>
      

</form>





@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
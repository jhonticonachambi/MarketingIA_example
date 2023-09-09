@extends('adminlte::page')


@section('title', 'Articulo')

@section('content_header')
    <h1>Crear Articulo</h1>
@stop



@section('content')

<form action="/articulo" method="POST">

    @csrf
    

    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input type="number" name="cantidad" id="cantidad" class="form-control" placeholder="" aria-describedby="helpId">
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
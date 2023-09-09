@extends('adminlte::page')


@section('title', 'Articulo')

@section('content_header')
    <h1>Articulo</h1>
@stop



@section('content')

<a href="articulo/create" class="btn btn-primary">Crear</a>
<br>

<br>
<div class="table-responsive">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
                <tr >
                    <td>{{ $articulo->id}}</td>
                    <td>{{ $articulo->descripcion}}</td>
                    <td>{{ $articulo->cantidad}}</td>

                    <td> 
                        <form action="{{ route ('articulo.destroy',$articulo->id)}}" method="POST" >
                        
                            @csrf 
                            @method('DELETE')
                        
                        <a href="/articulo/{{ $articulo->id }}/edit" class="btn btn-info">Editar</a> 
                        <button type="submit" class="btn btn-danger">Eliminar</button> 
                        </form>
                    </td>
                </tr>
            @endforeach

            
        </tbody>
    </table>
</div>




@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
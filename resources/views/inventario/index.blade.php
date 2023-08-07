@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<a href="invertario/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody> <!-- Mover el tbody aquí, fuera del foreach -->

        @foreach ($inventarios as $inventario) <!-- Agregar el signo "$" antes de "inventarios" y el signo "$" antes de "inventario" -->
        <tr>
            <td>{{$inventario->id}}</td>
            <td>{{$inventario->codigo}}</td>
            <td>{{$inventario->descripcion}}</td>
            <td>{{$inventario->cantidad}}</td>
            <td>{{$inventario->precio}}</td>
            <td>
                <a href="/invertario/{{$inventario->id}}/edit" class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Borrar</button>
            </td>
        </tr>
        @endforeach

    </tbody>

</table>
@stop


@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
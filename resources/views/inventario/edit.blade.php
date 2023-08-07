@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h2>EDITAR INVENTARIO</h2>
@stop

@section('content')
<!-- CUANDO HACEMOS UN CRUD O UNA ACTUALIZACION DEBEMOS HACER UN PUT  -->
<form action="/invertario/{{$hola->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="codigo" class="form-label">Código</label>
        <input type="text" class="form-control" id="codigo" name="codigo" value="{{$hola->codigo}}">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$hola->descripcion}}">
    </div>
    <div class="mb-3"></label>
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{$hola->cantidad}}">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" step="any" value="{{$hola->precio}}" class="form-control" id="precio" name="precio">
    </div>
    <a href="/invertario" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>

</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h2>CREAR REGISTROS</h2>
@stop

@section('content')

<form action="/invertario" method="post">
    @csrf
    <div class="mb-3">
        <label for="codigo" class="form-label">Código</label>
        <input type="text" class="form-control" id="codigo" name="codigo" aria-describedby="" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" aria-describedby="" tabindex="2">
    </div>
    <div class="mb-3"></label>
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="number" class="form-control" id="cantidad" name="cantidad" aria-describedby="" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" step="any" value="0.00" class="form-control" id="precio" name="precio" aria-describedby="">
    </div>
    <a href="/invertario" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

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
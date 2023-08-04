@extends('layouts.vistapadre')

@section('contenidoPrincipal')<!--  este section surge del yield que se encuentra en la carpeta layouts/vistapadre.blade.php-->
<h2>Contenido de la vista 1</h2>
<div class="card">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

<!-- con blade se utiliza el php y cerrarlo -->
@php
echo 'esto es parte de la vista 1 con @php';
@endphp

<ul>
    @for ($i = 0; $i < 10; $i++) <li>el valor de i es: {{$i}}</li>
        @endfor
</ul>

<ul>
    @foreach($users as $usuarios)
    <li>{{$usuarios}}</li>
    @endforeach
</ul>

@endsection
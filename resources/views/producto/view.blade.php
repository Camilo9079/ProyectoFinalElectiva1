@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="text-center mt-5" style="color:green">Descripcion del producto {{ $producto->NombreDelProducto }}</h1>
    <div class="row">
        <ol>
            <li>ID: {{$producto->id}}</li>
            <li>Nombre del producto: {{ $producto->NombreDelProducto}}</li>
            <li>Descripcion del producto: {{ $producto->Descripcion}}</li>
            <li>Preccio del producto: {{ $producto->Precio}}</li>
            <li>Unidades Disponibles del producto: {{ $producto->Unidades}}</li>
            <li>Imagen del producto: <br> <img class="img-thumbnail img-fluid"
                    src="{{ asset('storage' . '/' . $producto->Foto) }}" width="120" alt=""></li>
        </ol>
        <a href="{{ route('producto.index') }}" class="btn btn-primary">Volver</a>
    </div>

</div>

@endsection

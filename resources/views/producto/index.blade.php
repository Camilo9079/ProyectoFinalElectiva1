@extends('layouts.app')

@section('content')
<div class="container">

    {{-- @if (Session::has('mensaje'))
    {{ Session::get( 'mensaje' ) }}
    @endif --}}

    <a href="{{ route('producto.create') }}" class="btn btn-success">Registrar nuevo producto</a>
    <br>
    <br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre del producto</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Unidades</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>
                    <img class="img-thumbnail img-fluid" src="{{ asset('storage' . '/' . $producto->Foto) }}" width="50"
                        alt="">
                </td>
                <td>{{ $producto->NombreDelProducto }}</td>
                <td>{{ $producto->Descripcion }}</td>
                <td>{{ $producto->Precio }}</td>
                <td>{{ $producto->Unidades }}</td>
                <td>
                    <a href="{{ route('producto.show', $producto->id) }}" class="btn btn-primary">
                        Ver
                    </a>

                    <a href="{{ route('producto.edit', $producto->id) }}" class="btn btn-warning">
                        Editar
                    </a>

                    <form action="{{ route('producto.destroy', $producto->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Eliminar"
                            onclick="return confirm('¿Desea eliminar el producto?');">

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$productos->links()}}
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('producto.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include( 'producto.form', ['modo' => 'Crear'] )
    </form>
</div>
@endsection

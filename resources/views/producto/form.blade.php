<h2>{{ $modo }} producto</h2>

<div class="form-group">
<label for="NombreDelProducto">Nombre del producto: </label>
<input type="text" class="form-control" name="NombreDelProducto" id="NombreDelProducto" value="{{ isset( $producto->NombreDelProducto ) ? $producto->NombreDelProducto : '' }}">
</div>
<br>

<div class="form-group">
<label for="Descripcion">Descripcion: </label>
<input type="text" class="form-control" name="Descripcion" id="Descripcion" value="{{ isset( $producto->Descripcion ) ? $producto->Descripcion : '' }}">
</div>
<br>

<div class="form-group">
<label for="Precio">Precio: </label>
<input type="text" class="form-control" name="Precio" id="Precio" value="{{ isset( $producto->Precio ) ? $producto->Precio : '' }}">
</div>
<br>

<div class="form-group">
<label for="Unidades">Unidades: </label>
<input type="text" class="form-control" name="Unidades" id="Unidades" value="{{ isset( $producto->Unidades ) ? $producto->Unidades : '' }}">
</div>
<br>

<div class="form-group">
<label for="Foto">Foto: </label>

@if( isset( $producto->Foto ) )
    <img class="img-thumbnail img-fluid"  src="{{ asset( 'storage' . '/' . $producto->Foto ) }}" width="100" alt="">
@endif
<input class="form-control" type="file" name="Foto">
</div>
<br>
<br>
<input class="btn btn-success" type="submit" value="{{ $modo }} producto">
<a class="btn btn-primary" href="{{ route('producto.index') }}">Regresar</a>
<br>

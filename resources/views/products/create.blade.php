@extends('layout.app')

@section('title')
    Crear Producto Nuevo
@endsection

@section('content')
    <!-- Contenido principal -->
    <div class="container content py-4">
        <h1 class="text-center mb-4">Crear Nuevo Producto</h1>
        <div class="card">
            <div class="card-body">
                <form action="guardar_producto.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Nombre del Producto:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoría:</label>
                        <select class="form-control" id="categoria" name="categoria" required>
                            <option value="">Seleccione una categoría</option>
                            <option value="Electrodomésticos">Electrodomésticos</option>
                            <option value="Tecnología">Tecnología</option>
                            <option value="Limpieza">Limpieza</option>
                            <option value="Moda">Moda</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen del Producto:</label>
                        <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*"
                            required>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar Producto</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('plantilla')
@section('contenido')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear Chollo</div>

                    <div class="card-body">
                        <!-- Formulario para crear un chollo -->
                        <form action="{{ route('chollos.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="titulo">Título:</label>
                                <input type="text" name="titulo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripción:</label>
                                <textarea name="descripcion" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="url">URL:</label>
                                <input type="url" name="url" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="categoria">Categoría:</label>
                                <input type="text" name="categoria" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="puntuacion">Puntuación:</label>
                                <input type="number" name="puntuacion" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="precio">Precio:</label>
                                <input type="number" step="0.01" name="precio" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="precio_descuento">Precio con descuento:</label>
                                <input type="number" step="0.01" name="precio_descuento" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="disponible">Disponible:</label>
                                <select name="disponible" class="form-control" required>
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Crear Chollo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

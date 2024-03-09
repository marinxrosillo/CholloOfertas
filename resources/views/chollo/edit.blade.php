@extends('plantilla')
@section('contenido')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Chollo</div>

                    <div class="card-body">
                        <!-- Formulario para editar un chollo -->
                        <form action="{{ route('chollos.update', $chollo->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="titulo">Título:</label>
                                <input type="text" name="titulo" class="form-control" value="{{ $chollo->titulo }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripción:</label>
                                <textarea name="descripcion" class="form-control" required>{{ $chollo->descripcion }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="url">URL:</label>
                                <input type="url" name="url" class="form-control" value="{{ $chollo->url }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="categoria">Categoría:</label>
                                <input type="text" name="categoria" class="form-control" value="{{ $chollo->categoria }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="puntuacion">Puntuación:</label>
                                <input type="number" name="puntuacion" class="form-control"
                                    value="{{ $chollo->puntuacion }}" required>
                            </div>
                            <div class="form-group">
                                <label for="precio">Precio:</label>
                                <input type="number" step="0.01" name="precio" class="form-control"
                                    value="{{ $chollo->precio }}" required>
                            </div>
                            <div class="form-group">
                                <label for="precio_descuento">Precio con descuento:</label>
                                <input type="number" step="0.01" name="precio_descuento" class="form-control"
                                    value="{{ $chollo->precio_descuento }}" required>
                            </div>
                            <div class="form-group">
                                <label for="disponible">Disponible:</label>
                                <select name="disponible" class="form-control" required>
                                    <option value="1" {{ $chollo->disponible == 1 ? 'selected' : '' }}>Sí</option>
                                    <option value="0" {{ $chollo->disponible == 0 ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Actualizar Chollo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

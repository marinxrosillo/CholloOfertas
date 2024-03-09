@extends('plantilla')

@section('contenido')
    <!-- Content -->
    <div class="container-fluid mt-4"> <!-- Cambié container a container-fluid para que sea más ancho -->
        <div class="row">
            @foreach ($chollos as $chollo)
                <div class="col-lg-3 col-md-6 mb-4"> <!-- Dividir en 4 columnas en pantallas grandes -->
                    <div class="card">
                        <img src="{{ asset('img/' . $chollo->id . '-chollo-ofertas.jpg') }}" class="card-img-top"
                            alt="Imagen del chollo">
                        <div class="card-body">
                            <h5 class="card-title">{{ $chollo->titulo }} {{ $chollo->precio_descuento }}€</h5>
                            <p class="card-text">{{ $chollo->descripcion }}</p>
                            <a href="{{ route('chollos.show', $chollo->id) }}" class="btn btn-primary">Ver más</a>
                            <a href="{{ route('chollos.edit', $chollo->id) }}" class="btn btn-secondary">Editar</a>
                            <form action="{{ route('chollos.destroy', $chollo->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('¿Estás seguro de que quieres borrar este chollo?')">Borrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

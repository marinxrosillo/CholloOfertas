@extends('plantilla')
@section('contenido')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $chollo->titulo }}</div>

                    <div class="card-body">
                        <h5 class="card-title">{{ $chollo->titulo }}</h5>
                        <p class="card-text">{{ $chollo->descripcion }}</p>
                        <p class="card-text"><strong>URL:</strong> <a href="{{ $chollo->url }}"
                                target="_blank">{{ $chollo->url }}</a></p>
                        <p class="card-text"><strong>Categoría:</strong> {{ $chollo->categoria }}</p>
                        <p class="card-text"><strong>Puntuación:</strong> {{ $chollo->puntuacion }} / 10</p>
                        <p class="card-text"><strong>Precio:</strong> ${{ $chollo->precio }}</p>
                        <p class="card-text"><strong>Precio con descuento:</strong> ${{ $chollo->precio_descuento }}
                        </p>
                        <p class="card-text"><strong>Disponible:</strong> {{ $chollo->disponible ? 'Sí' : 'No' }}
                        </p>
                        <p class="card-text"><strong>Imagen:</strong> <span><img src="{{ asset('img/' . $chollo->id . '-chollo-ofertas.jpg') }}" class="card-img-top"
                            alt="Imagen del chollo"></span>
                        </p>
                        <a href="{{ route('chollos.index') }}" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

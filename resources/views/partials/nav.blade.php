<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"  style="padding: 20px">
    <a class="navbar-brand" href="{{ route('chollos.index') }}">CholloOfertas</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('chollos.index') }}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('chollos.index') }}">Nuevos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('chollos.index') }}">Destacados</a>
            </li>
        </ul>
    </div>

    <!-- Botón para crear un nuevo chollo -->
    <div class="text-center">
        <a href="{{ route('chollos.create') }}" class="btn btn-success">Crear Nuevo Chollo</a>
    </div>
</nav>

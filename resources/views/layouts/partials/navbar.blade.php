<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white">Home</a></li> 
        <li><a href="{{ route('estudiantes.index') }}" class="nav-link px-2 text-white">Estudiantes</a></li> 
        <li><a href="{{ route('notas.index') }}" class="nav-link px-2 text-white">Notas</a></li> 
        <li><a href="{{ route('progresos.index') }}" class="nav-link px-2 text-white">Progresos</a></li> 
        <li><a href="{{ route('calculadoras.index') }}" class="nav-link px-2 text-white">Calculadora</a></li> 
      </ul>
    </div>
  </div>
</header>
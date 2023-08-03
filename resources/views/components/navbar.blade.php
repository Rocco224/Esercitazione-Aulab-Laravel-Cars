<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
  <div class="container-fluid">
    <a class="navbar-brand fw-semibold">{{ config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('cars.catalog') }}">Auto</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <div>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle p-0 fs-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              @auth
              <i class="bi bi-person-check"></i>
              @else
              <i class="bi bi-person"></i>
              @endauth
            </a>
            @auth
            <ul class="dropdown-menu dropdown-menu-end text-lg-center">
              <li>
                <form action="/logout" method="POST" class="dropdown-item">
                  @csrf
                  <button class="btn btn-sm btn-danger" type="submit">Logout</button>
                </form>
              </li>
            </ul>
            @else
            <ul class="dropdown-menu dropdown-menu-end text-lg-center">
              <li>
                <a class="dropdown-item" href="/login">Login</a>
              </li>
            </ul>
            @endauth
          </li>
        </div>
      </ul>
    </div>
  </div>
</nav>
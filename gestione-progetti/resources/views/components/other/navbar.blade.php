<nav class="navbar navbar-expand-lg bg-success px-5">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold text-light" href="/manage/project">MANAGE PROJECTS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/manage/project">Home</a>
        </li>
      </ul>
      <div class="dropdown me-4">
        <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ auth()->user()->name }}
        </button>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/profile">Profile</a></li>
          <li>
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class='border-0 bg-white dropdown-item'>Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
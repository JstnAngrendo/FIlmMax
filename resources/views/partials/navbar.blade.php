<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">FilmMax</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

        <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/></svg>
    </form>
      <div class="collapse navbar-collapse w-20" id="navbarNav" style="justify-content:space-around;">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active =="about") ? 'active' : '' }} "href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active =="genre") ? 'active' : '' }}" href="/genre">Genre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active =="about") ? 'active' : '' }}" href="/about">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
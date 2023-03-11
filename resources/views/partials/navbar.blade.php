<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="/">Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          {{-- <a class="nav-link {{ request()->is('/')  ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          <a class="nav-link {{ request()->is('post*') || request()->is('author*')  ? 'active' : '' }}" href="/post">Blog</a>
          <a class="nav-link {{ request()->is('category*')  ? 'active' : '' }}" href="/category">Category</a>
          <a class="nav-link " href="/login" class="ms-auto">Login</a>
           --}}
           <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link {{ request()->is('/')  ? 'active' : '' }}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('post*') || request()->is('author*')  ? 'active' : '' }}" href="/post">Blog</a>
            </li>
            @auth            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{-- auth merupah method bawaan untuk mengetahui data user yg sudah login --}}
               {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard">Dasboard</a></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                </li>
              </ul>
            </li>
            @endauth
            @guest
            <li class="nav-item">
              <a class="nav-link " href="/login" class="ms-auto">Login</a>
            </li>
            @endguest
          </ul>
        </div>
       
      </div>
    </div>
  </nav>
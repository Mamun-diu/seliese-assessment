<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        </ul>
        @if (isset(session()->get('user')->id))
            <a href="{{ route('logout') }}" class="me-2">Logout</a>
        @else
            <a href="{{ route('login.view') }}" class="me-2">Login</a>
        @endif

        <a href="{{ route('cart.items') }}">Cart({{ \Cart::count() }})</a>
      </div>
    </div>
  </nav>

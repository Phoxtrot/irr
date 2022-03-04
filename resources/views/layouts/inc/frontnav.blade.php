<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('front.index')}}">E-Shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{Request::is('/')?'active':''}} " aria-current="page" href="{{route('front.index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('/category')?'active':''}}" href="{{route('front.cat')}}">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('/cart')?'active':''}}" href="{{route('cart')}}">Cart</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

@php

use App\Http\Controllers\ProductController;

$total=0;
if(Session::has('user'))
$total=ProductController::cartItem();

@endphp
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Fuji</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/myorders">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/view_cart">Cart ({{$total}})</a>
        </li>
        <li class="nav-item">
       
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 marginRight">
        @if(Session::has('user'))
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Session::has('user')?Session::get('user')['name']:'More'}}
          </a>
          <ul class="dropdown-menu">
            <li>
              <form action="/logout" method="POST" class="dropdown-item">
                @csrf
                <button class="btn">Logout</button>
              </form>
            
           
            <!-- <li><hr class="dropdown-divider"></li> -->
            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </li>
        @else
        <li class="nav-item"><a class="nav-link" aria-current="page" href="/login">Login</a></li>
        <li class="nav-item"><a class="nav-link" aria-current="page" href="/register">Register</a></li>
       @endif
        </ul>
        </li>
      
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <div>
        
      
      </div>
     
     
    </div>
   
  </div>
  
</nav>
@extends('master')
@section('content')
<div class="container custom-product m-tt">
<div id="carouselExample" class="carousel slide limit container">
  <div class="carousel-inner">
  @foreach($products as $product)
  <div class="carousel-item {{$product["id"]==1?"active":""}} ">
    <a href="/details/{{$product->id}}" >
    <img src={{$product->gallery}} class="d-block slider-image " alt={{$product->name}}>
      <div class="carousel-caption slider-text d-none d-md-block">
        <h3 >{{$product->name}}</h3>
        <p>{{$product->description}}</p>
      </div>
    </div>
      </a>
     
      @endforeach
    
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <div class="trending-wraper m-tt">
<h3>Trending Products </h3>
  @foreach($products as $product)
  <div class="trending-items">
    <a href="/details/{{$product->id}}">
    <img src={{$product->gallery}} alt={{$product->name}} class="trending-image d-none d-md-block">
      <div class="">
        <h3 >{{$product->name}}</h3>
        
      </div>
    </div>
    </a>
      
      @endforeach
  </div>
</div>
   
   

   

</div>
@endsection
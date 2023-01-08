@extends('master')
@section('content')
<div class="container m-tt">
  <div class="row">
    <div class="col-sm-6">
      <img src={{$product->gallery}} class="details-img " alt={{$product->description}}/>
    </div>
    <div class="col-sm-6">
      <a href="/">
        Go Back
      </a>
      <br />
      <br />
      <h2>{{$product->name}}</h2>
      <h3>Price : {{$product->price}}</h3>
    
      <p>Details : {{$product->description}}</p>
      <h5>Category : {{$product->category}}</h5>
      <br />
      <br />
      <form action="/addtocart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value={{$product->id}}> 
      <button class="btn btn-primary" type="submit">Add to Cart</button>
      </form>
     

      <br />
      <br />
      <button class="btn btn-success">Buy Now</button>
      <br />
      <br />
    </div>
  </div>
</div>
@endsection
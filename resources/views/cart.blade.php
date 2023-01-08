@extends('master')
@section('content')
<div class="m-tt">
 
  <div class="col-sm-10">
    <div class="trending-wraper">
      <h4 class="mb-tt">Result for products</h4>
      <a class="btn btn-success mb-tt" href="order_produts">Order Now</a>
      @foreach($products as $item)
      <div class="row searched-item cart-list-devider">
        <div class="col-sm-3">
        <a href="/details/{{$item->id}}">
        <img src={{$item->gallery}} class="trending-image" />
       
        </a>
        </div>
        <div class="col-sm-4">
     
        <div class="">
          <h2>{{$item->name}}</h2>
          <h5>{{$item->description}}</h5>
        </div>
       
        </div>
        <div class="col-sm-3">
          <a href="/remove/{{$item->cartId}}"> <button class="btn btn-warning">Remove From Cart</button></a>
       
        </div>
       
       
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
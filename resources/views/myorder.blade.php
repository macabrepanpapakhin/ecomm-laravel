@extends('master')
@section('content')
<div class="m-tt">
 
  <div class="col-sm-10">
    <div class="trending-wraper">
      <h4 class="mb-tt">Order Lists</h4>
    
      @foreach($products as $item)
      <div class="row searched-item cart-list-devider">
        <div class="col-sm-3">
        <a href="/details/{{$item->id}}">
        <img src={{$item->gallery}} class="trending-image" />
       
        </a>
        </div>
        <div class="col-sm-4">
     
        <div class="">
          <h2>Name : {{$item->name}}</h2>
          <p>Descripton : {{$item->description}}</p>
          <p>Address : {{$item->address}}</p>
          <p>Delivery Status : {{$item->status}}</p>
          <p>Payments Methods : {{$item->payment_method}}</p>
          <p>Payments Status : {{$item->payment_status}}</p>
        </div>
      
        </div>
     
       
       
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
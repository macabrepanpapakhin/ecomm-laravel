@extends('master')
@section('content')
<div class="m-tt">
 
  <div class="col-sm-10">
  <table class="table">

  <tbody>
    <tr>
      
      <td>Amount</td>
      <td>$ {{$total}}</td>
      
    </tr>
    <tr>

     
      <td>Tax</td>
      <td>$ 0</td>
     
    </tr>
    <tr>
     
     <td>Delivery Fees</td>
     <td>$ 10</td>
    
   </tr>
   
   <tr>
     
     <td>Total Amount</td>
     <td>$ {{$total+10}}</td>
    
   </tr>
   
  </tbody>
</table>

   <form action="/makeanorder" method="POST">
    @csrf
   <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Your Full Address</label>
  <textarea name="address" class="form-control mb-tt" id="exampleFormControlTextarea1" rows="3"></textarea>
  <label for="pwd" class="pr-5">Payment Methods</label>
  
  <input value="prepaid" type="radio" name="payment"  >
  <span class="pr-3">Prepaid</span>
  <input value="cash" type="radio" name="payment" >
  <span  class="pr-3">Cash on Delivery</span>
  <button type="submit" class="btn btn-success">Order Now</button>

   </form>

    </div>
  </div>
</div>
@endsection
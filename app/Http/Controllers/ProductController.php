<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    function index(){
        $products=Product::all();
        return view('product',['products'=>$products]);
    }

    function details($id){
        $product= Product::find($id);
        return view('details',['product'=>$product]);
    }

    function addToCart(Request $request){
       if($request->session()->has('user')){
        $cart =new Cart;
        $cart->user_id=$request->session()->get('user')['id'];
        $cart->product_id=$request->product_id;
        $cart->save();
        return redirect('/');
       }else
       return redirect('/login');
    }

    function search(Request $request){
        $data=Product::where('name','like','%'.$request->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }

    static function cartItem(){
        $userID=Session::get('user')['id'];
        return Cart::where('user_id',$userID)->count();
    }
    
    function viewCart(){
        $userID=Session::get('user')['id'];
        $products=DB::table('carts')->join('products','carts.product_id','=','products.id')->where('carts.user_id',$userID)->select('products.*','carts.id as cartId')->get();
        return view('cart',['products'=>$products]);
    }

    function removeItem($id){
       Cart::destroy($id);
       return redirect('/view_cart');
    }

    function orderNow(){
        $userID=Session::get('user')['id'];
        $total = DB::table('carts')->join('products','carts.product_id','=','products.id')
       ->where('carts.user_id',$userID)->sum('products.price');

      return view('order',['total'=>$total]);
      
    }

    function submitOrder(Request $request){
        $userId=Session::get('user')['id'];
        $allCart=Cart::where('user_id',$userId)->get();

        foreach($allCart as $cart){
            $order=new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$request->payment;
            $order->payment_status="pending";
            $order->address=$request->address;
            Cart::where('user_id',$userId)->delete();
            $order->save();
        }
        return redirect('/');
       
    }

    public function myOrders(){
        $userID=Session::get('user')['id'];
        $products = DB::table('orders')->join('products','orders.product_id','=','products.id')
       ->where('orders.user_id',$userID)->get();

      return view('myorder',['products'=>$products]);
    }
}

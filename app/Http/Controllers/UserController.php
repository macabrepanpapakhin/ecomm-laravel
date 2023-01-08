<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
class UserController extends Controller
{
   public function login(Request $request){
    $user= User::where(['email'=>$request->email])->first();
    if($user && Hash::check($request->password,$user->password)){
        $request->session()->put('user',$user);
        return redirect('/');
    }
    return ['status'=>'invalid user name or password'];
   }

   public function show(){
    return view('login');
   }

   public function logout(){
    Session::forget('user');
    return redirect('/');
   }

   public function index(){
    return view('register');
   }

   public function register(Request $request){
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect('/login');
   }
}

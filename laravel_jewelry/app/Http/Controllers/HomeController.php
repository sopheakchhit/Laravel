<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products; 
use App\User;
use Cart;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('FrontEnd.home', compact('product'));
    }


     public function profile()
    {
      $product = Products::orderBy('id','desc')->get();
      return view('FrontEnd.index', compact('product'));
    }


    public function receipt()
    {
      $cartProducts = Cart::Content();
      
      return view('FrontEnd.receipt',['cartProducts'=> $cartProducts]);
    }


     public function view_customer_acc($id)
    {
      $user = User::findorfail($id);
      return view('Admin.Users.user',compact('user'));
    }


    public function edit_customer_acc($id)
    {
       $user = User::find($id);
       return view('Admin.Users.edit_acc',compact('user'));
    }


    public function update(Request $request, $id)
    { 
      $user = User::find($id);
      $user->name = $request->get('name');
      $user->email  =  $request->get('email');
      $user->address = $request->get('add');
      $user->phone = $request->get('phone');
      $user->save();
      return redirect('frontend/user-acc/');
    }


    public function cartShow()
     {
       $cartProducts = Cart::Content();
        
       return view('FrontEnd.cart.ShowCart',['cartProducts'=> $cartProducts]);
     }

     public function about()
     {
       return view('FrontEnd.about_front');
     }

      public function feedback()
    {
        return view('Admin.Feedback.index');
    } 


    public function clear()
    {
      return view('FrontEnd.clear');
    }

}

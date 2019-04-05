<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Orders;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class CheckOutController extends Controller
{
    public function index()
    {
      $cartProducts = Cart::Content();
      
      return view('FrontEnd.cart.checkOut',['cartProducts'=> $cartProducts]);
    }

    public function formcheck()
    {
      $cartProducts = Cart::Content();
      return view('FrontEnd.cart.formcheck',['cartProducts' => $cartProducts]);
    }

    public function form()
    {
       return view('layouts.CheckOutForm',['cartProducts' => $cartProducts]);
    }

    public function store(Request $request )
    {
      
      $cartProducts = Cart::Content();        

         foreach ($cartProducts as $orders) {
        $order = array([
          'pro_id' => $orders ->id,
          'qty' => $orders ->qty,
          'customer_id' => Input::get('id') 
          ]);       
               
      DB::table('orders')->insert($order); }
    
      return redirect('/receipt')->with('msg', 'Your Payment are Success !!');
  }


  public function success()
  {
    return('success');
  }
}

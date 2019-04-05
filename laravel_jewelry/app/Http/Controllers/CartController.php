<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Cart;
class CartController extends Controller
{
   public function addToCart(Request $request)
   {
      // dd($request->all());
      $productId = $request->productId;

      $productById = Products::where('id',$productId)->first();

      Cart::Add([
        'id'=> $productId,
        'id'=> $productById->id,
        'name' => $productById->proname,
        'price' => $productById->price,
        'qty' => $request->qty
      ]);

      return redirect('frontend/cart-show');
   }

   // public function cartShow()
   // {
   //   $cartProducts = Cart::Content();
      
   //   return view('FrontEnd.cart.ShowCart',['cartProducts'=> $cartProducts]);
   // }

   public function updateCart(Request $request)
   {
      Cart::update($request->rowId , $request->qty);

      return redirect('frontend/cart-show')->with('msg', 'Item update successful !!');
   }

   public function removeCartProduct($rowId)
   {
     Cart::remove($rowId);
     return redirect('frontend/cart-show')->with('msgcancel','Item successful Cancel !!');
   }


}

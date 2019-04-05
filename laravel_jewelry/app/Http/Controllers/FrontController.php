<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Products; 
use App\Sliders;

class FrontController extends Controller
{
    public function index()
    {
      $product = Products::orderBy('id','desc')->get();
      return view('FrontEnd', compact('product'));

    }


   public function proCat(Request $request,$id)
    {
      $cat = $request->cat;
      $product =  DB::table('products')->join('categories','categories.id','products.cat_id')
      ->select('products.*')
      ->where('categories.name',$cat)->get();
      return view('FrontEnd',compact('product'));
    }

 
   public function about()
    {
      return view('about');
    }


    public function search(Request $request)
    {
      
     $search = $request->q;
     $product =  DB::table('products')
     ->select('products.*')
     ->where('products.proname','like','%'.$search.'%')
     ->get();
    

    echo"<div class=\"panel panel-success\" style=\"margin-left: 10px;\">
          <div class=\"panel panel-heading\">ONLINE JEWELRY SHOP</div>
          <div class=\"panel-body\">" ;
        foreach($product as $product): 
           echo "<div class=\"col-md-3\">
             <div style=\"margin: 5px;\">
              <div class=\"panel panel-success\"> 
                <div class=\"panel panel-heading\"></div>
                <div class=\"panel panel-body\">";
                 echo"<center> <img src=\"".asset($product->image)."\" width=\"170\" height=\"145\"> </center>
                  <p>".$product->proname."</p>
                  <p>$".$product->price."</p>
                  <a href=\"".url('view',$product->id)."\">";
                  echo "<div class=\"col-md-30\">
                  <input type=\"submit\" class=\"form-control form-control-lg btn btn-danger\" 
                  value=\"VIEW\" style=\"margin-bottom: -45px;\">
                  </div>
                  </a>
                </div>
                </div>
              </div>      
              </div>";    
         endforeach;
         echo"</div>
         </div>
        </div>";
  
  }
 
 public function slider()
 {
   return view('layouts.slider');
 }
 

}

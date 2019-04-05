<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\get;
use App\Products;
use Illuminate\Support\Facades\DB;
class ProductsController extends Controller
{

   /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('');
    // }

  

 public function store()
    {
      $product = new Products;

      $product->proname = Input::get('proname');
      $product->description = Input::get('description');
      $product->price = Input::get('price');
      $product->cat_id = Input::get('category');

      if (Input::hasFile('image'))
      {
         $file=Input::file('image');
         $file->move(public_path().'/',$file->getClientOriginalName());

         $product->image =  $file -> getClientOriginalName();
         $product->size  =  $file -> getClientsize();
         $product->type  =  $file -> getClientMimeType();
      }

      $product->save();
      return redirect('admin/product');
    }

    

    public function update(Request $request, $id)
    { 
      $product = Products::find($id);
      $product->proname = $request->get('proname');
      $product->description  =  $request->get('description');
      $product->cat_id = $request->get('cate');
      $product->price = $request->get('price');

      if (Input::hasFile('image'))
      {
         $request = get::file('image');
         $request->move(public_path().'/',$request->getClientOriginalName());

         $product->image =  $request -> getClientOriginalName();
         $product->size  =  $request -> getClientsize();
         $product->type  =  $request -> getClientMimeType();
      }

      $product->save();
      return redirect('admin/product');
    }


    public function destroy($id)
    {
       $product = Products::find($id);
       $product->delete('null');
       return redirect('admin/product'); 
    }

 
  public function view($id)
    {
      $product = Products::findorfail($id);
      return view('FrontEnd.view',compact('product'));
    }


    public function proCat(Request $request,$id)
    {
       $cat = $request->cat;
       $product =  DB::table('products')->join('categories','categories.id','products.cat_id')
       ->select('products.*')
       ->where('categories.name',$cat)
       ->get();
       return view('FrontEnd.index',compact('product'));
      
    }


     public function searchbtn(Request $request)
     {
        $txt = $request->txt;
        $product =  DB::table('products')
        ->select('products.*')
        ->Where('products.proname','like','%'.$txt.'%')
        ->orWhere('Products.description','like','%'.$txt.'%')
        ->get();
        return view('FrontEnd.index',compact('product'));
     }

}

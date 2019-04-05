<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Categories;
class CategoryController extends Controller
{
   public function store()
   {
     $cate = new Categories;
     $cate->name = Input::get('cate_name');
     $cate->save();
     return redirect('admin/categoires');
   }

   public function update(Request $request ,$id)
   {
      $cate =  Categories::find($id);
      $cate->name = $request->get('cate_name');
      $cate->save();
      return redirect('admin/categoires');
   }


   public function destroy($id)
   {
      $cate = Categories::find($id);
      $cate->delete();
      return redirect('admin/categoires');
   }


   public function search()
   {

      $q = Input::get('q'); 
      if($q != '')
      {
      $cate = Categories::Where('id','like','%' .$q. '%')
                      ->orWhere('name','like','%' .$q. '%')
                      ->paginate(2)
                      ->setpath('');
      $cate ->appends(array(
       'q' => Input::get('q'),
      )); 
      if(count($cate)>0)   
        { 
           return view('Admin.categories.index', compact('cate'));
        } 

        return view('Admin.categoires.index');          
      }
   }
}

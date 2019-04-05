<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Sliders;

class SliderController extends Controller
{

    public function store()
    {
      $slider = new Sliders;

      $slider->name = Input::get('name');

      if (Input::hasFile('image'))
      {
         $file=Input::file('image');
         $file->move(public_path().'/assets/Products',$file->getClientOriginalName());

         $slider->image = $file -> getClientOriginalName();
         $slider->size  =  $file -> getClientsize();
         $slider->type  =  $file -> getClientMimeType();
      }

      $slider->save();
      return redirect('admin/slider');
    }
}

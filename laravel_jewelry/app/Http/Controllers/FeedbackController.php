<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use Illuminate\Support\Facades\Input;
class FeedbackController extends Controller
{
      

      
     public function store()
    {
      $fb = new Feedback;

      $fb->user_id = Input::get('id');
      $fb->subject = Input::get('sub');
      $fb->message = Input::get('msg');
     
      $fb->save();
      return redirect('frontend/feedback')->with('msg','Your message send success !!');
    }

    public function destroy($id)
    {
      $fb = Feedback::find($id);
      $fb->delete();
      return redirect('admin/feedbackAdmin');
    }    

     public function read($id)
    {
      $fb = Feedback::find($id);
      return view('Admin.Feedback.read',compact('fb'));
    }
  
}

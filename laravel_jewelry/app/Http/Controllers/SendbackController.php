<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Sendback;
use Auth;
use Illuminate\Support\Facades\Input;

class SendbackController extends Controller
{
    
    public function updateInbox(Request $request)
    {
    	$mId = $request->mgsId;
    	$update = DB::table('sendback')
    	->where('id',$mId)
    	->update([
    		'status' => 1 
    	]);
    	if($update)
    	{
    		echo "success";
    	}
    }


   public function index()
     {
       $inbox = Sendback::where('user_id', Auth::user()->id)->get();
       return view('Admin.Sendback.index', compact('inbox'));
     }


      public function store()
    {
      $fb = new Sendback;

      $fb->user_id = Input::get('id');
      $fb->subject = Input::get('sub');
      $fb->message = Input::get('msg');
      $fb->status  = Input::get('status');
     
      $fb->save();
      return redirect('admin/feedbackAdmin')->with('msg','Your message send success !!');
    }
}

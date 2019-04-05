<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {


    }

    public function destroy($id)
    {
       $user = User::find($id);
       $user->delete('null');
       return redirect('/'); 
    }

}

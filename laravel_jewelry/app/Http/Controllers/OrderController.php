<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;

class OrderController extends Controller
{
    public function destroy($id)
    {
    	$order = Orders::find($id);
    	$order->delete();
    	return redirect('admin/order');
    }


}

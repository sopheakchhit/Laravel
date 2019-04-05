<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Categories;
use App\Users;
use App\Orders;
use App\Feedback;
use App\Sendback;
use DB;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin.admin');
    }

    public function index_pro()
  {

    $product = Products::paginate(4);
    return view('Admin.Product.index',compact('product'));
  }


   public function create()
  {
    return view('Admin.Product.create');
  }


   public function edit($id)
    {
       $product = Products::find($id);
       return view('Admin.Product.edit' ,compact('product','id'));
    }


    public function cate()
    { 
      $cate = Categories::paginate(3);
      return view('Admin.categories.index',compact('cate'));
    }


    public function create_cate()
    {
      return view('Admin.categories.create');
    }

    public function edit_cate($id)
    {
       $cate = Categories::find($id);
       return view('Admin.categories.edit',compact('cate','id'));
    }


    public function user()
    {
        $user = Users::paginate(5);
        return view('Admin.Users.index', compact('user'));
    }


    public function deleteUser($id)
    {
      $user = Users::find($id);
      $user->delete();
      return redirect('admin/user');
    }

  
    public function order()
    {
      $order  = Orders::orderBY('id','desc')->paginate(10);
      return view('Admin.orders.index',compact('order'));
    }

    public function chart()
    {
        $chart = DB::table('orders')
                ->select(DB::raw('month(created_at) as label, SUM(qty) as value'))
                ->orderBy('created_at')
                ->groupBy(DB::raw('month(created_at)'))
                ->get();
        return view('Admin.orders.chart',compact('chart'));
    }

    public function chart2()
    {
       $forecas = DB::table('orders')
                ->select(DB::raw('SUM(qty) as num'))
                ->orderBy('created_at','desc')
                ->groupBy(DB::raw('month(created_at)'))
                ->limit(3)
                ->get();

        $forecas1 = DB::table('orders')
                ->select(DB::raw('SUM(qty) as num'))
                ->orderBy('created_at','desc')
                ->groupBy(DB::raw('month(created_at)'))
                ->limit(2)
                ->get();

        $forecas2 = DB::table('orders')
                ->select(DB::raw('SUM(qty) as num'))
                ->orderBy('created_at','desc')
                ->groupBy(DB::raw('month(created_at)'))
                ->limit(1)
                ->get();
      
      
      $chart = DB::table('orders')
                ->select(DB::raw('month(created_at) as labels, SUM(qty) as data'))
                ->orderBy('created_at')
                ->groupBy(DB::raw('month(created_at)'))
                ->get();
      return view('Admin.orders.chart2',compact('chart','forecas','forecas1','forecas2'));
    }


    public function feedbackAdmin()
    {
      $fb = DB::table('feedback')
            ->orderBy('id','desc')
            ->get();

      return view('Admin.Feedback.FeedbackAdmin',compact('fb'));
    }

    
    public function sendback()
    {
      $sb = DB::table('sendback')
            ->orderBy('id','desc')
            ->get();
      return view('Admin.Sendback.reply',compact('sb'));
    }

    public function slider()
    {
       return view('Admin.Slider.create');
    }

    public function viewOrder($id)
    {
      
      $order = Orders::find($id);
      return view('Admin.orders.view',compact('order','product'));
    }


    public function viewUser($id)
    {
      $user = Users::find($id);
      return view('Admin.Users.view',compact('user','order'));
    }


    public function viewPro($id)
    {
      $product = Products::find($id);
      return view('Admin.Product.view',compact('product'));
    }
    
}



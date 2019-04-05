<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('FrontEnd');
// });
use Illuminate\Support\Facades\Input;
use App\Products;
use App\Orders;
use App\User;

Auth::routes();

// FrontEnd Page
Route::get('/', 'HomeController@index')->name('home');
Route::get('/frontend','HomeController@profile');
Route::get('/','FrontController@index');
Route::get('/receipt','HomeController@receipt');
Route::get('/clear','HomeController@clear');
Route::get('frontend/user-acc/{id}','HomeController@view_customer_acc');
Route::get('frontend/edit/{id}','HomeController@edit_customer_acc');
Route::post('frontend/edit/{id}','HomeController@update');
Route::get('frontend/cart-show','HomeController@cartShow');
Route::get('frontend/about','HomeController@about');

Route::get('frontend/feedback','HomeController@feedback');


// Shopping Cart

Route::POST('/cart-add','CartController@addToCart');
//Route::get('frontend/cart-show','CartController@cartShow');
Route::POST('/update-cart','CartController@updateCart');
Route::get('/delete-cart-product/{rowId}', 'CartController@removeCartProduct');
Route::get('formcheck','CheckOutController@formcheck');


//Admin Pages
Route::prefix('admin')->group(function(){
  Route::get('/login','Auth\AdminLoginController@ShowLoginForm')->name('admin.login');
  Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/','AdminController@index')->name('admin.dashboard');

  Route::get('/product','AdminController@index_pro');
  Route::get('/create','AdminController@create');
  Route::get('/edit{id}','AdminController@edit');

  Route::get('/categoires','AdminController@cate');
  Route::get('/create_cate','AdminController@create_cate');
  Route::get('/edit_cate/{id}','AdminController@edit_cate');

  Route::get('user','AdminController@user');
  
  Route::get('order','AdminController@order');

  Route::get('feedbackAdmin','AdminController@feedbackAdmin');

  Route::get('sendback','AdminController@sendback');

  Route::get('slider','AdminController@slider');

  Route::get('viewOrder/{id}','AdminController@viewOrder');

  Route::get('viewUser/{id}','AdminController@viewUser');

  Route::get('viewPro/{id}','AdminController@viewPro');

  Route::get('deleteUser/{id}','AdminController@deleteUser');

  Route::get('chart','AdminController@chart');

  Route::get('chart2','AdminController@chart2');

});


//Check Out
Route::get('check-out','CheckOutController@index');
Route::post('order','CheckOutController@store');

 
//view
Route::get('view/{id}','ProductsController@view');
//admin read message
Route::get('read/{id}','FeedbackController@read');


//product
route::resource('Admin/Product','ProductsController');

//categories
Route::resource('Admin/categories','CategoryController');

//user
Route::resource('Admin/Users','UserController');

//order
Route::resource('Admin/orders','OrderController');

//feedback
Route::resource('Admin/Feedback','FeedbackController');

//sendback
Route::resource('Admin/Sendback','SendbackController');

//slider
Route::resource('Admin/Slider','SliderController');




Route::get('cat/{cat}','FrontController@proCat');

// Route::get('/views/{id}','FrontController@view');

Route::get('frontend/{cat}','ProductsController@proCat');

// search
Route::get('search','FrontController@search');

Route::get('searchbtn','ProductsController@searchbtn');

Route::get('slider','FrontController@slider');

Route::get('about','FrontController@about');

Route::get('updateInbox','SendbackController@updateInbox');

// Route::get('admin/chart','AdminController@getMonthlyPostData');




Route::any('/pagiSearch', function(){
  $q = Input::get('q'); 
  if($q != '')
  {
    $product = Products::Where('proname','like','%' .$q. '%')
                    ->orWhere('id','like','%' .$q. '%')
                    ->paginate(3)
                    ->setpath('');
    $product ->appends(array(
     'q' => Input::get('q'),
    )); 
    if(count($product)>0)   
      { 
         return view('Admin.Product.index', compact('product'));
      } 

      return view('Admin.Product.index');          
  }
});



Route::any('/searchOrder', function(){
  $q = Input::get('q'); 
  if($q != '')
  {
    $order = Orders::Where('created_at','like','%' .$q. '%')
                    ->orWhere('id','like','%' .$q. '%')
                    ->paginate(10)
                    ->setpath('');
    $order ->appends(array(
     'q' => Input::get('q'),
    )); 
    if(count($order)>0)   
      { 
         return view('Admin.orders.index', compact('order'));
      } 
     
      return view('Admin.orders.index');          
  }
});


Route::any('/searchUsers', function(){
  $q = Input::get('q'); 
  if($q != '')
  {
    $user = User::Where('id','like','%' .$q. '%')
                    ->orWhere('name','like','%' .$q. '%')
                    ->paginate(3)
                    ->setpath('');
    $user ->appends(array(
     'q' => Input::get('q'),
    )); 
    if(count($user)>0)   
      { 
         return view('Admin.Users.index', compact('user'));
      } 

      return view('Admin.Users.index');          
  }
});

Route::any('/searchcate','CategoryController@search');



<?php

namespace App\Http\Controllers;

use Stripe;
use Session;
use App\Models\Cart;
use App\Models\order;
use App\Models\Contact;
use App\Models\Category;

use App\Models\Testmonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SendMessageRequest;

class FrontController extends Controller

{
    
    public function index(){
        $categories = Category::paginate(4);
        
        return view('front.index',get_defined_vars());
    }

    public function shop(){  //logic error 

        
         
         $categories = Category::paginate(4);
        return view('front.shop',get_defined_vars());
    }

    public function why(){
        return view('front.why');
    }

    public function testmonial(){
        $testmonials = Testmonial::all();
        return view('front.testmonial',get_defined_vars());
    }

    public function contact(){
        return view('front.contact');
    }

    public function productDetails($id){
        $data = Category::find($id);
        return view('front.product_details',get_defined_vars());

    }

    public function add_to_cart($id)
    {
        $product_id = $id ; 
        
        $user_id = Auth::user()->id ; 
        $data = new Cart;
        $data->user_id = $user_id ; 
        $data->product_id = $product_id ; 
        $data->save();
        return to_route('front.shop');
        
    }

    public function myCart(){
        $carts = Cart::all();
        return view('front.mycart',get_defined_vars());
    }

    public function orderConfirm(Request $request){
        $userId = Auth::user()->id ; 
        $carts = Cart::where('user_id',$userId)->get();
        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone ; 
        foreach($carts as $cart){
            $order = new order ; 
            
            $order->name = $name ; 
            $order->phone =$phone ;
            $order->address =$address ; 
            $order->user_id = $userId;
            $order->product_id = $cart->product_id;

            $order->save();
            


        }
        return to_route('front.myCart') ;
    }

        
    public function productDestroy(Cart  $cart)
    {
        $cart->delete();
        return to_route('front.myCart');
    }

    public function stripe()
    {
        return view('front.stripe');
    }

    public function sendMessageFromContactPage(SendMessageRequest $request){
        $data=$request->validated();
        Contact::create($data);
        return to_route('front.contact');
    }

    

    
}
